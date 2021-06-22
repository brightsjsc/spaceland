<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Validator;
use App\Menu;

class MenuController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|min:2|max:255'
        ],[
            'title.required' => 'Bạn chưa nhập tên thể loại',
            'title.min'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự',
            'title.max'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderby('order','asc')->get();
        return view('admins.menus.index',['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Menu::select('id','title','parent_id')->get()->toArray();
        return view('admins.menus.create',['parent'=>$parent]);
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
            $title = $request->title;
            $url = $request->url;
            $order = $request->order;
            $icon = $request->icon;
            $parent_id = $request->parent_id;
            $prioritize = $request->prioritize;
            $status = $request->status;
            $keywords = $request->keywords;
            $description = $request->description;

            $cate = Menu::where('title',$title)->count();
            if($cate == 0){
                Menu::create([
                    'title' => $title,
                    'url' => $url,
                    'parent_id' => $parent_id,
                    'prioritize' => $prioritize,
                    'status' => $status,
                    'order' => $order,
                    'icon' => $icon,
                    'keywords' => $keywords,
                    'description' => $description
                ]);
                return redirect()->route('admin.system.menu.index')->with('result','Bạn đã thêm thành công!');
            }else{
                return redirect()->route('admin.system.menu.index')->with('result','Menu bạn vừa tạo đã tồn tại!');
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
        $parent = Menu::select('id','title','parent_id')->get()->toArray();

        $category = Menu::findOrFail($id);

        return view('admins.menus.edit',['category'=>$category,'parent'=>$parent,'id'=>$id]);
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
            $title = $request->title;
            $url = $request->url;
            $order = $request->order;
            $icon = $request->icon;
            $parent_id = $request->parent_id;
            $prioritize = $request->prioritize;
            $status = $request->status;
            $keywords = $request->keywords;
            $description = $request->description;

            $category = Menu::findOrFail($id);

            $category->update([
                'title' => $title,
                'url' => $url,
                'parent_id' => $parent_id,
                'prioritize' => $prioritize,
                'status' => $status,
                'order' => $order,
                'icon' => $icon,
                'keywords' => $keywords,
                'description' => $description
            ]);

            return redirect()->route('admin.system.menu.edit',['id' => $id])->with('result','Bạn đã sửa thành công!');
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
        $parent = Menu::where('parent_id',$id)->count();
        
        if($parent == 0){
            $category = Menu::find($id);
            $category -> delete();
            return redirect()->route('admin.system.menu.index')->with('result','Bạn đã xóa thành công!');
        }else{
            return redirect()->route('admin.system.menu.index')->with('result','Bạn không thể xóa menu khi tồn tại menu con!');            
        }
    }
}
