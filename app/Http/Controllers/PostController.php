<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Validator;
use App\PostCate;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('id','desc')->get();
        return view('admins.posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCate::select('id','name','parent_id')->get()->toArray();

        return view('admins.posts.create',['categories' => $categories]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title'      => 'required|min:2|max:255',
            'image' => 'required',
            'content' =>  'required',
            'type_id' => 'required',
            'postcate_id' => 'required',
        ],[
            'title.required' => '(*) Vui lòng điền tiêu đề',
            'title.min' => '(*) Tiêu đề phải có độ dài từ 2 đến 255 ký tự',
            'title.max' => '(*) Tiêu đề phải có độ dài từ 2 đến 255 ký tự',
            'image.required' => '(*) Vui lòng chọn ảnh bài viết',
            'content.required' => '(*) Trường này không được bỏ trống',
            'type_id.required' => '(*) Trường này không được bỏ trống',
            'postcate_id.required' => '(*) Trường này không được bỏ trống',
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
        $validator = $this->validator($request->all());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $imgPath = '/uploads/images/posts';

            $images = $request->file('image');

            if($request->hasFile('image')){
                $imgName = time().'_'.$images->getClientOriginalName();
                $images->move(public_path().$imgPath, $imgName);
            } else {
                $imgName = '';
            }
            
            if(Auth::check()){
                $inputData = array(
                    'title'  => $request->title,
                    'alias' => Str::slug($request->title),
                    'image' => $imgName,
                    'content' => $request->content,
                    'tag' => $request->tag,
                    'keyword' => $request->keyword,
                    'description' => $request->description,
                    'views' => 0,
                    'type_id' => $request->type_id,
                    'status' => $request->status,
                    'postcate_id' => $request->postcate_id,
                );  
            }

            Post::create($inputData);
            return redirect()->route('admin.post.index')->with('result','Thêm bài viết thành công!');
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
        $post  = Post::findOrFail($id);
        return view('admins.posts.edit',['post'=>$post]);
    }

    protected function validator_update(array $data)
    {
        return Validator::make($data, [
            'title'      => 'required|min:2|max:255',
            'description'    =>  'required',
            'content' =>  'required',
            'type_id' => 'required',
        ],[
            'title.required' => '(*) Vui lòng điền tiêu đề',
            'title.min' => '(*) Tiêu đề phải có độ dài từ 2 đến 255 ký tự',
            'title.max' => '(*) Tiêu đề phải có độ dài từ 2 đến 255 ký tự',
            'description.required' => '(*) Trường này không được bỏ trống',
            'content.required' => '(*) Trường này không được bỏ trống',
            'type_id.required' => '(*) Trường này không được bỏ trống',
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
        $validator_update = $this->validator_update($request->all());

        if($validator_update->fails()){
            return redirect()->back()->withErrors($validator_update)->withInput($request->all());
        }else{
            $imgPath = '/uploads/images/posts';

            $images = $request->file('image');

            if($request->hasFile('image')){
                $imgName = time().'_'.$images->getClientOriginalName();
                $images->move(public_path().$imgPath, $imgName);
            } else {
                $imgName = '';
            }
            
            if(Auth::check()){
                if ($imgName == '') {
                    $inputData = array(
                        'title'  => $request->title,
                        'alias' => Str::slug($request->title),
                        'content' => $request->content,
                        'tag' => $request->tag,
                        'keyword' => $request->keyword,
                        'description' => $request->description,
                        'type_id' => $request->type_id,
                        'status' => $request->status,
                    );  
                } else {
                    $inputData = array(
                        'title'  => $request->title,
                        'alias' => Str::slug($request->title),
                        'image' => $imgName,
                        'content' => $request->content,
                        'tag' => $request->tag,
                        'keyword' => $request->keyword,
                        'description' => $request->description,
                        'type_id' => $request->type_id,
                        'status' => $request->status,
                    );
                }
            }

            $post = Post::findOrFail($id);
            $post -> update($inputData);
            return redirect()->route('admin.post.edit',['id' => $id])->with('result','Sửa bài viết thành công!');
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
        $post = Post::find($id);
        $post -> delete();
        return redirect()->route('admin.post.index')->with('result','Xóa bài viết thành công!');
    }
}
