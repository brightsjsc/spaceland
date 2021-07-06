<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\ProductCate;
use App\Product;
use App\Project;
use App\District;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\City;

use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $products   = Product::getProductByDistrict('021');
        // $products2  = Product::getProductByDistrict('019');
        // $products3  = Product::getProductByDistrict('005');
        // $products4  = Product::getProductByDistrict('009');

        $projects = DB::table('projects')->orderBy('id', 'DESC')->take(5)->get();

        $post = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        // return response()->json($projects);
        return view('pages.home', compact('post', 'projects'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function productCate($product_cate, Request $request)
    {
        $getDistrict = District::where('city_id', '01')->get();
        $product_cate = ProductCate::where('alias', $product_cate)->first();
        $child_cates = ProductCate::where('parent_id', $product_cate->id)->get()->toArray();
        // Kiểm tra có tồn tại Danh mục con không?
        if (empty($child_cates)) {
            //TH không tồn tại DM con
            if (!empty($request->orderBy)) {
                if ($request->orderBy == 'tin-moi-nhat') {
                    $products = Product::where('product_cate_id', $product_cate->id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'desc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'tin-cu-nhat') {
                    $products = Product::where('product_cate_id', $product_cate->id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'asc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'gia-tu-thap-den-cao') {
                    $products = Product::where('product_cate_id', $product_cate->id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('price', 'asc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'gia-tu-cao-den-thap') {
                    $products = Product::where('product_cate_id', $product_cate->id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('price', 'desc')
                        ->paginate(20);
                } else {
                    $products = Product::where('product_cate_id', $product_cate->id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'desc')
                        ->paginate(20);
                }
            } else {
                $products = Product::where('product_cate_id', $product_cate->id)
                    ->where('status', 0)
                    ->where('publish', 0)
                    ->orderby('created_at', 'desc')
                    ->paginate(20);
            }
        } else {
            $child_id = array();
            foreach ($child_cates as $child) {
                $child_id[] = $child['id'];
            }

            if (!empty($request->orderBy)) {
                if ($request->orderBy == 'tin-moi-nhat') {
                    $products = Product::wherein('product_cate_id', $child_id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'desc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'tin-cu-nhat') {
                    $products = Product::wherein('product_cate_id', $child_id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'asc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'gia-tu-thap-den-cao') {
                    $products = Product::wherein('product_cate_id', $child_id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('price', 'asc')
                        ->paginate(20);
                } elseif ($request->orderBy == 'gia-tu-cao-den-thap') {
                    $products = Product::wherein('product_cate_id', $child_id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('price', 'desc')
                        ->paginate(20);
                } else {
                    $products = Product::wherein('product_cate_id', $child_id)
                        ->where('status', 0)
                        ->where('publish', 0)
                        ->orderby('created_at', 'desc')
                        ->paginate(20);
                }
            } else {
                $products = Product::wherein('product_cate_id', $child_id)
                    ->where('status', 0)
                    ->where('publish', 0)
                    ->orderby('created_at', 'desc')
                    ->paginate(20);
            }
        }

        // dd($products);

        return view('pages.product_cate', ['product_cate' => $product_cate, 'products' => $products, 'request' => $request->all(), 'getDistrict' => $getDistrict]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function productDetail($product)
    {
        $getDistrict = District::where('city_id', '01')->get();
        $product = Product::where('alias', $product)->first();

        $projects_related = Project::where('adr_commune_id', $product->project->adr_commune_id)->get();

        $project_related_id = array();
        foreach ($projects_related as $project_related) {
            $project_related_id[] = $project_related->id;
        }
        $products_related = Product::whereIn('project_id', $project_related_id)->orderby('created_at', 'desc')->limit(12)->get();

        return view('pages.product_detail', ['product' => $product, 'projects_related' => $projects_related, 'products_related' => $products_related, 'getDistrict' => $getDistrict]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function PostContact(Request $request)
    {
        //validate form
        $messages = [
            'required' => 'Không được để rỗng',
            'phone.numeric' => 'Vui lòng nhập số điện thoại',
            'phone.max' => " điện thoại phải 10 số",
            'name.min' => 'tên phải điền ít nhất 6 ký tự',
            'name.max' => 'tên điền tối đa 30 ký tự',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6|max:30',
            'phone' => 'required|numeric',
            'id_district' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Contact::exists($request->phone)) {
            goto _return;
        }

        Contact::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'id_district' => $request->id_district
        ]);

        _return:
        return redirect()->back()->with('success', 'chúng tôi sẽ liên hện bạn trong thời gian sớm nhất');
    }
    public function resizeCanvas()
    {
        // $img = Image::make(public_path().'/uploads/images/products/canvas/1599126305_5.jpg');

        $img = Image::make(public_path() . '/uploads/images/products/canvas/watermark.png');

        $watermark = Image::make(public_path() . '/uploads/images/products/canvas/1599126305_5.jpg');

        $watermark->resize(null, 600, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->insert($watermark, 'center');

        $img->save(public_path() . '/uploads/images/products/canvas_new/1599126305_5.jpg');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function productsOfProject($project, Request $request)
    {
        $getDistrict = District::where('city_id', '01')->get();
        $district = District::where('city_id', '01')->get();

        $project = Project::where('alias', $project)->first();

        $product_id = [];
        // dd($get_project->id);
        $get_products = Product::select()->get();
        foreach ($get_products as $get_product) {
            $project_arr = explode(',', $get_product->project_id);
            if (in_array($project->id, $project_arr)) {
                array_push($product_id, $get_product->id);
            }
        }

        if ($request->orderBy == 'tin-moi-nhat') {
            $products = Product::whereIn('id', $product_id)
                ->where('status', 0)
                ->where('publish', 0)
                ->orderby('created_at', 'desc')
                ->paginate(20);
        } elseif ($request->orderBy == 'tin-cu-nhat') {
            $products = Product::whereIn('id', $product_id)
                ->where('status', 0)
                ->where('publish', 0)
                ->orderby('created_at', 'asc')
                ->paginate(20);
        } elseif ($request->orderBy == 'gia-tu-thap-den-cao') {
            $products = Product::whereIn('id', $product_id)
                ->where('status', 0)
                ->where('publish', 0)
                ->orderby('price', 'asc')
                ->paginate(20);
        } elseif ($request->orderBy == 'gia-tu-cao-den-thap') {
            $products = Product::whereIn('id', $product_id)
                ->where('status', 0)
                ->where('publish', 0)
                ->orderby('price', 'desc')
                ->paginate(20);
        } else {
            $products = Product::whereIn('id', $product_id)
                ->where('status', 0)
                ->where('publish', 0)
                ->orderby('created_at', 'desc')
                ->paginate(20);
        }

        return view('pages.product_of_project', ['project' => $project, 'products' => $products, 'request' => $request->all(), 'getDistrict' => $getDistrict]);
    }

    /**
     * Show the application dashboard.
     *
     * @param $district_alias
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function productsOfDistrict($district_alias, Request $request)
    {
        $getDistrict = District::where('city_id', '01')->get();
        $district = District::where('alias', $district_alias)->first();
        if ($district == null) {
            return response()->json([
                "code" => 403,
                "message" => 'Permission denied!'
            ], 403);
        }

        $projects   = $district->projects;
        $project_id = array_column($projects->toArray(), 'id');

        $query = Product::where('status', 0)->where('publish', 0);

        // Khi bộ lọc hoạt động
        if ($request->project != '') {
            $project = Project::where('alias', $request->project)->first();
            $query->where('project_id', $project->id);
        } else {
            $query->whereIn('project_id', $project_id);
        }

        if ($request->room_number != '') {
            $query->where('room_number', $request->room_number);
        }

        if ($request->price != '') {
            $price = explode('-', $request->price);
            if ($request->price == 'thoa-thuan') {
                $query->where('price', 0);
            } elseif ($request->price == '>20000000') {
                $query->where('price', '>', 20000000);
            } else {
                $query->whereBetween('price', $price);
            }
        }

        if (!empty($request->orderBy)) {
            // Khi sắp xếp hoạt động
            switch ($request->orderBy) {
                case 'tin-cu-nhat':
                    $query->orderby('created_at', 'asc');
                    break;
                case 'gia-tu-thap-den-cao':
                    $query->orderby('price', 'asc');
                    break;
                case 'gia-tu-cao-den-thap':
                    $query->orderby('price', 'desc');
                    break;
                case 'tin-moi-nhat':
                default:
                    $query->orderby('created_at', 'desc');
            }
        }

        $products = $query->paginate(20);

        return view('pages.product_of_district', ['district' => $district, 'projects' => $projects, 'products' => $products, 'request' => $request->all(), 'getDistrict' => $getDistrict]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $getDistrict = District::where('city_id', '01')->get();
        $product_cate = $request->product_cate;
        $district = $request->district;
        $projects = $request->projects;
        $acreage = $request->acreage;

        //Danh sách tin theo thể loại
        $products_of_cate = array();
        if ($product_cate != '') {
            $get_product_cate   = ProductCate::where('name', $product_cate)->first();

            $products_of_cate = Product::select('id')->where('product_cate_id', $get_product_cate->id)
                ->where('status', 0)->where('publish', 0)
                ->get()->toArray();

            // dd($products_of_cate);

            $productWithCate = array();
            if (!empty($products_of_cate)) {
                foreach ($products_of_cate as $product_of_cate) {
                    $productWithCate[] = $product_of_cate['id'];
                }
            }
        }

        // Danh sách tin theo Khu vực Quận/Huyện
        $products_of_district = array();
        if ($district != '') {
            $get_district = District::where('name_local', $district)->first();

            $projects_list_of_distrit = $get_district->projects;

            $project_id = array();
            foreach ($projects_list_of_distrit as $project) {
                $project_id[] = $project->id;
            }

            $products_of_district = Product::select('id')->whereIn('project_id', $project_id)
                ->where('status', 0)->where('publish', 0)
                ->get()->toArray();

            $productWithDistrict = array();
            if (!empty($products_of_district)) {
                foreach ($products_of_district as $product_of_district) {
                    $productWithDistrict[] = $product_of_district['id'];
                }
            }
        }

        // Danh sách tin theo Dự án
        $products_of_project = array();
        if ($projects != '') {
            $product_id = [];
            $get_project = Project::where('name', $projects)->first();
            // dd($get_project->id);
            $get_products = Product::select()->get();
            foreach ($get_products as $get_product) {
                $project_arr = explode(',', $get_product->project_id);
                if (in_array($get_project->id, $project_arr)) {
                    array_push($product_id, $get_product->id);
                }
            }
            $products_of_project = Product::select('id')->whereIn('id', $product_id)
                ->where('status', 0)->where('publish', 0)
                ->get()->toArray();

            $productWithProject = array();
            if (!empty($products_of_project)) {
                foreach ($products_of_project as $product_of_project) {
                    $productWithProject[] = $product_of_project['id'];
                }
            }
        }

        // Lấy các ID tin đăng trùng nhau
        if (isset($productWithCate) && isset($productWithDistrict) && isset($productWithProject)) {
            $product_filter_id = array_intersect($productWithCate, $productWithDistrict, $productWithProject);
        } elseif (!isset($productWithCate) && isset($productWithDistrict) && isset($productWithProject)) {
            $product_filter_id = array_intersect($productWithDistrict, $productWithProject);
        } elseif (isset($productWithCate) && !isset($productWithDistrict) && isset($productWithProject)) {
            $product_filter_id = array_intersect($productWithCate, $productWithProject);
        } elseif (isset($productWithCate) && isset($productWithDistrict) && !isset($productWithProject)) {
            $product_filter_id = array_intersect($productWithCate, $productWithDistrict);
        } elseif (isset($productWithCate) && !isset($productWithDistrict) && !isset($productWithProject)) {
            $product_filter_id = $productWithCate;
        } elseif (!isset($productWithCate) && isset($productWithDistrict) && !isset($productWithProject)) {
            $product_filter_id = $productWithDistrict;
        } elseif (!isset($productWithCate) && !isset($productWithDistrict) && isset($productWithProject)) {
            $product_filter_id = $productWithProject;
        } else {
            $product_filter_id = array();
        }

        if ($acreage != '') {
            $acreage_short = substr($acreage, 0, strlen($acreage) - 3);

            // dd($acreage_short);

            if ($acreage_short == '<= 30') {
                $products = Product::whereIn('id', $product_filter_id)->where('acreage', '<=', 30)->orderby('created_at', 'desc')->paginate(5);
            } elseif ($acreage_short == '>= 500') {
                $products = Product::whereIn('id', $product_filter_id)->where('acreage', '>=', 500)->orderby('created_at', 'desc')->paginate(5);
            } else {
                $acreage_arr = explode('-', $acreage_short);

                $int_acreage_arr = array_map(
                    function ($value) {
                        return (int)$value;
                    },
                    $acreage_arr
                );

                $products = Product::whereBetween('acreage', $int_acreage_arr)->whereIn('id', $product_filter_id)->orderby('created_at', 'desc')->paginate(5);
            }
        } else {
            $products = Product::whereIn('id', $product_filter_id)->orderby('created_at', 'desc')->paginate(5);
        }



        return view('pages.product_of_filter', ['products' => $products, 'request' => $request->all(), 'getDistrict' => $getDistrict]);
    }
    public function intro()
    {
        $getDistrict = District::where('city_id', '01')->get();
        return view('pages.contactpage', compact('getDistrict'));
    }

    public function projectDetail($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.century', compact('project'));
    }

    public function postDetail($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.post_detail', compact('post'));
    }

    public function search(Request $request)
    {
        $value = $request->all();
        $adr_city_id = $request->adr_city_id;
        $project_id = $request->project_id;
        $acreage = $request->acreage;
        $price = $request->price;

        if ($value['adr_city_id'] == '' && $value['project_id'] == '' && $value['acreage'] == '' && $value['price'] == '') {
            $products = [];
        } else {
            $adr_city_id == '' ?  $adr_column = null : $adr_column = "adr_city_id";

            $project_id == "" ? $project_column = null : $project_column = "id";
            //Trường hợp Diện tích != Null
            if ($acreage != '') {
                //Trường hợp Diện tích != Null && Giá !=Null
                if ($price != '') {
                    $acreage_short = $acreage;
                    $price_short = $price;
                    if ($acreage_short == '1') {
                        //Diên tích <= 30m & Giá < 1 tỉ
                        if ($price_short == '0') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '<=', 30)->orderby('created_at', 'desc')
                                ->where('price', '<=', 1000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích <= 30m & Giá >= 5 tỉ
                        if ($price_short == '5') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '<=', 30)->orderby('created_at', 'desc')
                                ->where('price', '>=', 4000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích <= 30m & Giá trong khoảng 1 - 4 tỉ
                        if ($price_short != '0' && $price_short != '5') {
                            $price_arr = explode('-', $price_short);
                            $int_price_arr = array_map(
                                function ($value) {
                                    return (int)$value;
                                },
                                $price_arr
                            );

                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '<=', 30)->orderby('created_at', 'desc')
                                ->whereBetween('price', $int_price_arr)->orderby('created_at', 'desc')->paginate(5);
                        }
                    } elseif ($acreage_short == '2') {
                        //Diên tích >= 500m & Giá < 1 tỉ
                        if ($price_short == '0') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '>=', 500)->orderby('created_at', 'desc')
                                ->where('price', '<=', 1000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích >= 500m & Giá > 4 tỉ
                        if ($price_short == '5') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '>=', 500)->orderby('created_at', 'desc')
                                ->where('price', '>=', 4000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích >= 500m & Giá trong khoảng 1 - 4 tỉ
                        if ($price_short != '0' && $price_short != '5') {
                            $price_arr = explode('-', $price_short);
                            $int_price_arr = array_map(
                                function ($value) {
                                    return (int)$value;
                                },
                                $price_arr
                            );

                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->where('acreage', '>=500', 500)->orderby('created_at', 'desc')
                                ->whereBetween('price', $int_price_arr)->orderby('created_at', 'desc')->paginate(5);
                        }
                    } else {
                        $acreage_arr = explode('-', $acreage_short);
                        $int_acreage_arr = array_map(
                            function ($value) {
                                return (int)$value;
                            },
                            $acreage_arr
                        );
                        //Diên tích trong khoảng 30 - 500m & Giá < 1 tỉ
                        if ($price_short == '0') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->whereBetween('acreage', $int_acreage_arr)->orderby('created_at', 'desc')
                                ->where('price', '<=', 1000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích trong khoảng 30 - 500m & Giá > 4 tỉ
                        if ($price_short == '5') {
                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->whereBetween('acreage', $int_acreage_arr)->orderby('created_at', 'desc')
                                ->where('price', '>=', 4000000000)->orderby('created_at', 'desc')->paginate(5);
                        }
                        //Diên tích trong khoảng 30 - 500 & Giá trong khoảng 1 - 4 tỉ
                        if ($price_short != '0' && $price_short != '5') {
                            $price_arr = explode('-', $price_short);
                            $int_price_arr = array_map(
                                function ($value) {
                                    return (int)$value;
                                },
                                $price_arr
                            );

                            $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                                $query->where($adr_column, '=', $request->adr_city_id);
                                $query->where($project_column, '=', $request->project_id);
                            }])
                                ->whereBetween('acreage', $int_acreage_arr)->orderby('created_at', 'desc')
                                ->whereBetween('price', $int_price_arr)->orderby('created_at', 'desc')->paginate(5);
                        }
                    }
                }
                //Trường hợp Diện tích != Null && Giá == Null
                if ($price == "") {
                    $acreage_short = $acreage;
                    // Diện tích <= 30m

                    if ($acreage_short == '1') {
                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->where('acreage', '<=', 30)->orderby('created_at', 'desc')->paginate(5);
                    }
                    // Diện tích >= 500m
                    if ($acreage_short == '2') {
                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->where('acreage', '>=', 500)->orderby('created_at', 'desc')->paginate(5);
                    }
                    // Diện tíchtrong khoảng  30 - 500m
                    if ($acreage_short != '1' && $acreage_short != '2') {
                        $acreage_arr = explode('-', $acreage_short);
                        $int_acreage_arr = array_map(
                            function ($value) {
                                return (int)$value;
                            },
                            $acreage_arr
                        );

                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->whereBetween('acreage', $int_acreage_arr)->orderby('created_at', 'desc')->paginate(5);
                    }
                }
            }
            //Trường hợp Diện tích == Null && Giá != Null
            else {
                $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                    $query->where($adr_column, '=', $request->adr_city_id);
                    $query->where($project_column, '=', $request->project_id);
                }])->paginate(5);
                if ($price != '') {
                    $price_short = $price;
                    // Giá < 1 tỉ
                    if ($price_short == '0') {
                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->where('price', '<=', 1000000000)->orderby('created_at', 'desc')->paginate(5);
                    }
                    // Giá > 4 tỉ
                    if ($price_short == '5') {
                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->where('price', '>=', 4000000000)->orderby('created_at', 'desc')->paginate(5);
                    }
                    // Giá từ 1 - 4 tỉ
                    if ($price_short != '0' && $price_short != '5') {
                        $price_arr = explode('-', $price_short);
                        $int_price_arr = array_map(
                            function ($value) {
                                return (int)$value;
                            },
                            $price_arr
                        );

                        $products = Product::with(['project' => function ($query) use ($request, $adr_column, $project_column) {
                            $query->where($adr_column, '=', $request->adr_city_id);
                            $query->where($project_column, '=', $request->project_id);
                        }])
                            ->whereBetween('price', $int_price_arr)->orderby('created_at', 'desc')->paginate(5);
                    }
                }
            }
        }

        // return response()->json($products);
        return view('pages.product_of_filter', ['products' => $products, 'request' => $request->all()]);
    }
}
