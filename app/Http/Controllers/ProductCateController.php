<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Validator;
use App\ProductCate;

class ProductCateController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:2|max:255'
        ],[
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự',
            'name.max'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCate::orderby('order','asc')->get();
        return view('admins.product_cates.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = ProductCate::select('id','name','parent_id')->get()->toArray();
        return view('admins.product_cates.create',['parent'=>$parent]);
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

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $name = $request->name;
            $alias = Str::slug($request->name);
            $order = $request->order;
            $icon = $request->icon;
            $parent_id = $request->parent_id;
            $prioritize = $request->prioritize;
            $status = $request->status;
            $keywords = $request->keywords;
            $description = $request->description;

            $cate = ProductCate::where('name',$name)->count();
            if($cate == 0){
                ProductCate::create([
                    'name' => $name,
                    'alias' => $alias,
                    'parent_id' => $parent_id,
                    'prioritize' => $prioritize,
                    'status' => $status,
                    'order' => $order,
                    'icon' => $icon,
                    'keywords' => $keywords,
                    'description' => $description
                ]);
                return redirect()->route('admin.productCate.index')->with('result','Bạn đã thêm thành công!');
            }else{
                return redirect()->route('admin.productCate.index')->with('result','Danh mục bạn vừa tạo đã tồn tại!');
            }
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
        $parent = ProductCate::select('id','name','parent_id')->get()->toArray();

        $category = ProductCate::findOrFail($id);

        return view('admins.product_cates.edit',['category'=>$category,'parent'=>$parent,'id'=>$id]);
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
        //Validator form when update
        $validator = $this->validator($request->all());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $name = $request->name;
            $alias = Str::slug($request->name);
            $order = $request->order;
            $icon = $request->icon;
            $parent_id = $request->parent_id;
            $group = $request->group;
            $is_menu = $request->is_menu;
            $prioritize = $request->prioritize;
            $status = $request->status;
            $keywords = $request->keywords;
            $description = $request->description;

            $category = ProductCate::findOrFail($id);

            $category->update([
                'name' => $name,
                'alias' => $alias,
                'order' => $order,
                'icon' => $icon,
                'parent_id' => $parent_id,
                'group' => $group,
                'is_menu' => $is_menu,
                'prioritize' => $prioritize,
                'status' => $status,
                'keywords' => $keywords,
                'description' => $description
            ]);

            return redirect()->route('admin.productCate.edit',['id' => $id])->with('result','Bạn đã sửa thành công!');
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
        $parent = ProductCate::where('parent_id',$id)->count();
        
        if($parent == 0){
            $category = ProductCate::find($id);
            $category -> delete();
            return redirect()->route('admin.productCate.index')->with('result','Bạn đã xóa thành công!');
        }else{
            return redirect()->route('admin.productCate.index')->with('result','Bạn không thể xóa danh mục khi tồn tại danh mục con!');            
        }
    }
}
