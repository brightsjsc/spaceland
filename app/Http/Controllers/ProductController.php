<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;
use App\ProductCate;
use App\Product;
use App\Project;
use App\City;
use App\District;
use App\Commune;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::all();
        $districts = array();
        $communes = array();
        $projects = array();

        if ($request->all()) {

            $query = Project::select('id')->distinct('id');
            if ($request->adr_city_id) {
                $query->where('adr_city_id', $request->adr_city_id);
            }
            if ($request->adr_district_id) {
                $query->where('adr_district_id', $request->adr_district_id);
            }
            if ($request->adr_commune_id) {
                $query->where('adr_commune_id', $request->adr_commune_id);
            }
            $project_id = $query->get()->toArray();

            if ($request->project_id) {
                $product_id = [];
                $get_project = Project::where('id',$request->project_id)->first();
                $get_products = Product::select()->get();
                foreach($get_products as $get_product){
                    $project_arr = explode(',',$get_product->project_id);
                    if(in_array($get_project->id,$project_arr)){
                        array_push($product_id,$get_product->id);
                    }
                }
                $products = Product::whereIn('id', $product_id)->get();
            } else {
                $products = Product::whereIn('project_id', $project_id)->get();
            }

            $districts = District::where('city_id', $request->adr_city_id)->get();
            $communes = Commune::where('district_id', $request->adr_district_id)->get();
            $projects = Project::select('id', 'name')->distinct('id')
                ->whereIn('id', $project_id)
                ->get();
            // dd($projects);

            $filter = $request->all();
        } else {
            $products = Product::all();
            $filter = '';
        }


        return view('admins.products.index', ['products' => $products, 'cities' => $cities, 'districts' => $districts, 'communes' => $communes, 'projects' => $projects, 'filter' => $filter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = ProductCate::select('id', 'name', 'parent_id')->get()->toArray();

        $cities = City::all();

        $projects = Project::all();

        return view('admins.products.create', ['categories' => $categories, 'cities' => $cities, 'projects' => $projects]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|min:1|max:255',
            'address' => 'required',
            'product_cate_id' => 'required',
            'acreage' => 'required',
            'project_id' => 'required',
            'price' => 'required',
            'price_type' => 'required',
            'image' => 'required',
            'gallery' => 'required',
            'contact_mobile' => 'required',
        ], [
            'name.required' => '(*) Trường này không được bỏ trống',
            'name.min' => '(*) Độ dài từ 2 đến 255 ký tự',
            'name.max' => '(*) Độ dài từ 2 đến 255 ký tự',
            'address.required' => '(*) Trường này không được bỏ trống',
            'acreage.required' => '(*) Trường này không được bỏ trống',
            'project_id.required' => '(*) Trường này không được bỏ trống',
            'price.required' => '(*) Trường này không được bỏ trống',
            'price_type.required' => '(*) Trường này không được bỏ trống',
            'image.required' => '(*) Trường này không được bỏ trống',
            'gallery.required' => '(*) Trường này không được bỏ trống',
            'contact_mobile.required' => '(*) Trường này không được bỏ trống',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            $imgPath = '/uploads/images/products';
            $thumbPath = '/uploads/images/products/thumbs';

            $image = $request->file('image');
            if ($request->hasFile('image')) {
                $imgName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path() . $imgPath, $imgName);

                Image::make(public_path() . $imgPath . "/" . $imgName)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName);
            } else {
                $imgName = '';
            }

            $gallerys = $request->file('gallery');
            $gallerylist = array();
            if ($gallerys != null) {
                foreach ($gallerys as $gallery) {
                    if ($request->hasFile('gallery')) {
                        $galleryName = time() . '_' . $gallery->getClientOriginalName();
                        $gallery->move(public_path() . $imgPath, $galleryName);
                    }
                    $gallerylist[] = $galleryName;
                }
                $gallery_prod = implode($gallerylist, '|');
            } else {
                $gallery_prod = '';
            }
            $project = implode(",", $request->project_id);
            if (Auth::check()) {
                $price = ($request->price != '') ? str_replace(',', '', $request->price) : 0;

                $inputData = array(
                    'name'  => $request->name,
                    'alias' => Str::slug($request->name),
                    'address'  => $request->address,
                    'product_cate_id'  => $request->product_cate_id,
                    'project_id' => $project,
                    'acreage' => $request->acreage,
                    'price' => $price,
                    'price_type' => $request->price_type,
                    'description' => $request->description,
                    'witdh' => $request->witdh,
                    'land_witdh' => $request->land_witdh,
                    'home_direction' => $request->home_direction,
                    'bacon_direction' => $request->bacon_direction,
                    'floor_number' => $request->floor_number,
                    'room_number' => $request->room_number,
                    'toilet_number' => $request->toilet_number,
                    'furniture' => $request->furniture,
                    'legality' => $request->legality,
                    'image' => $imgName,
                    'gallerys' => $gallery_prod,
                    'video_url' => $request->video_url,
                    'map' => $request->map,
                    'contact_name' => $request->contact_name,
                    'contact_address' => $request->contact_address,
                    'contact_mobile' => $request->contact_mobile,
                    'contact_phone' => $request->contact_phone,
                    'contact_email' => $request->contact_email,
                    'status' => $request->status,
                    'publish' => $request->publish
                );
            }
            // dd($inputData);

            $product = Product::create($inputData);

            return redirect()->route('admin.product.index')->with('result', 'Thêm sản phẩm thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product  = Product::findOrFail($id);

        $categories = ProductCate::select('id', 'name', 'parent_id')->get()->toArray();

        $cities = City::all();

        if ($product->project_id) {
            $districts = District::where('city_id', $product->project->adr_city_id)->get();

            $communes = Commune::where('district_id', $product->project->adr_district_id)->get();

            $projects = Project::where('adr_commune_id', $product->project->adr_commune_id)->get();

            $multi_projects = explode(',', $product->project_id);
            $chosen_projects = [];

            foreach ($multi_projects as $multi_project) {
                $temp = Project::where('id', '=', $multi_project)->get();

                foreach ($temp as $tmp) {
                    array_push($chosen_projects, $tmp);
                }
            }
        } else {
            $districts = '';
            $communes = '';
            $projects = '';
        }

        return view('admins.products.edit', ['product' => $product, 'categories' => $categories, 'cities' => $cities, 'districts' => $districts, 'communes' => $communes, 'projects' => $projects, 'chosen_projects' => $chosen_projects]);
    }

    protected function validator_update(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|min:1|max:255',
            'address' => 'required',
            'product_cate_id' => 'required',
            'acreage' => 'required',
            'project_id' => 'required',
            'price' => 'required',
            'price_type' => 'required',
            'contact_mobile' => 'required',
        ], [
            'name.required' => '(*) Trường này không được bỏ trống',
            'name.min' => '(*) Độ dài từ 2 đến 255 ký tự',
            'name.max' => '(*) Độ dài từ 2 đến 255 ký tự',
            'address.required' => '(*) Trường này không được bỏ trống',
            'acreage.required' => '(*) Trường này không được bỏ trống',
            'project_id.required' => '(*) Trường này không được bỏ trống',
            'price.required' => '(*) Trường này không được bỏ trống',
            'price_type.required' => '(*) Trường này không được bỏ trống',
            'contact_mobile.required' => '(*) Trường này không được bỏ trống',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        //Validator form when update
        $validator_update = $this->validator_update($request->all());

        if ($validator_update->fails()) {
            return redirect()->back()->withErrors($validator_update)->withInput($request->all());
        } else {
            $imgPath = '/uploads/images/products';

            $image = $request->file('image');
            if ($request->hasFile('image')) {
                $imgName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path() . $imgPath, $imgName);

                $thumbPath = '/uploads/images/products/thumbs';
                $img = Image::make(public_path() . $imgPath . "/" . $imgName)->resize(299, 199);
                $img->save(public_path() . $thumbPath . "/" . $imgName);
            } else {
                $imgName = '';
            }

            $gallerys = $request->file('gallery');
            $gallerylist = array();
            if ($gallerys != null) {
                foreach ($gallerys as $gallery) {
                    if ($request->hasFile('gallery')) {
                        $galleryName = time() . '_' . $gallery->getClientOriginalName();
                        $gallery->move(public_path() . $imgPath, $galleryName);
                    }
                    $gallerylist[] = $galleryName;
                }
                $gallery_prod = implode($gallerylist, '|');
            } else {
                $gallery_prod = '';
            }
            $project = implode(",", $request->project_id);
            if (Auth::check()) {
                $price = ($request->price != '') ? str_replace(',', '', $request->price) : 0;

                if ($imgName == '') {
                    if ($gallery_prod == '') {
                        $inputData = array(
                            'name'  => $request->name,
                            'alias' => Str::slug($request->name),
                            'address'  => $request->address,
                            'product_cate_id'  => $request->product_cate_id,
                            'project_id' => $project,
                            'acreage' => $request->acreage,
                            'price' => $price,
                            'price_type' => $request->price_type,
                            'description' => $request->description,
                            'witdh' => $request->witdh,
                            'land_witdh' => $request->land_witdh,
                            'home_direction' => $request->home_direction,
                            'bacon_direction' => $request->bacon_direction,
                            'floor_number' => $request->floor_number,
                            'room_number' => $request->room_number,
                            'toilet_number' => $request->toilet_number,
                            'furniture' => $request->furniture,
                            'legality' => $request->legality,
                            'video_url' => $request->video_url,
                            'map' => $request->map,
                            'contact_name' => $request->contact_name,
                            'contact_address' => $request->contact_address,
                            'contact_mobile' => $request->contact_mobile,
                            'contact_phone' => $request->contact_phone,
                            'contact_email' => $request->contact_email,
                            'status' => $request->status,
                            'publish' => $request->publish
                        );
                    } else {
                        $inputData = array(
                            'name'  => $request->name,
                            'alias' => Str::slug($request->name),
                            'address'  => $request->address,
                            'product_cate_id'  => $request->product_cate_id,
                            'project_id' => $project,
                            'acreage' => $request->acreage,
                            'price' => $price,
                            'price_type' => $request->price_type,
                            'description' => $request->description,
                            'witdh' => $request->witdh,
                            'land_witdh' => $request->land_witdh,
                            'home_direction' => $request->home_direction,
                            'bacon_direction' => $request->bacon_direction,
                            'floor_number' => $request->floor_number,
                            'room_number' => $request->room_number,
                            'toilet_number' => $request->toilet_number,
                            'furniture' => $request->furniture,
                            'legality' => $request->legality,
                            'gallerys' => $gallery_prod,
                            'video_url' => $request->video_url,
                            'map' => $request->map,
                            'contact_name' => $request->contact_name,
                            'contact_address' => $request->contact_address,
                            'contact_mobile' => $request->contact_mobile,
                            'contact_phone' => $request->contact_phone,
                            'contact_email' => $request->contact_email,
                            'status' => $request->status,
                            'publish' => $request->publish
                        );
                    }
                } else {
                    if ($gallery_prod == '') {
                        $inputData = array(
                            'name'  => $request->name,
                            'alias' => Str::slug($request->name),
                            'address'  => $request->address,
                            'product_cate_id'  => $request->product_cate_id,
                            'project_id' => $project,
                            'acreage' => $request->acreage,
                            'price' => $price,
                            'price_type' => $request->price_type,
                            'description' => $request->description,
                            'witdh' => $request->witdh,
                            'land_witdh' => $request->land_witdh,
                            'home_direction' => $request->home_direction,
                            'bacon_direction' => $request->bacon_direction,
                            'floor_number' => $request->floor_number,
                            'room_number' => $request->room_number,
                            'toilet_number' => $request->toilet_number,
                            'furniture' => $request->furniture,
                            'legality' => $request->legality,
                            'image' => $imgName,
                            'video_url' => $request->video_url,
                            'map' => $request->map,
                            'contact_name' => $request->contact_name,
                            'contact_address' => $request->contact_address,
                            'contact_mobile' => $request->contact_mobile,
                            'contact_phone' => $request->contact_phone,
                            'contact_email' => $request->contact_email,
                            'status' => $request->status,
                            'publish' => $request->publish
                        );
                    } else {
                        $inputData = array(
                            'name'  => $request->name,
                            'alias' => Str::slug($request->name),
                            'address'  => $request->address,
                            'product_cate_id'  => $request->product_cate_id,
                            'project_id' => $project,
                            'acreage' => $request->acreage,
                            'price' => $price,
                            'price_type' => $request->price_type,
                            'description' => $request->description,
                            'witdh' => $request->witdh,
                            'land_witdh' => $request->land_witdh,
                            'home_direction' => $request->home_direction,
                            'bacon_direction' => $request->bacon_direction,
                            'floor_number' => $request->floor_number,
                            'room_number' => $request->room_number,
                            'toilet_number' => $request->toilet_number,
                            'furniture' => $request->furniture,
                            'legality' => $request->legality,
                            'image' => $imgName,
                            'gallerys' => $gallery_prod,
                            'video_url' => $request->video_url,
                            'map' => $request->map,
                            'contact_name' => $request->contact_name,
                            'contact_address' => $request->contact_address,
                            'contact_mobile' => $request->contact_mobile,
                            'contact_phone' => $request->contact_phone,
                            'contact_email' => $request->contact_email,
                            'status' => $request->status,
                            'publish' => $request->publish
                        );
                    }
                }
            }

            // dd($inputData);

            $product = Product::findOrFail($id);
            $product->update($inputData);

            return redirect()->route('admin.product.edit', ['id' => $id])->with('result', 'Sửa sản phẩm thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('result', 'Xóa sản phẩm thành công!');
    }
}
