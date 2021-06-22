<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Permission;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('admins.permissions.index',['permissions' => $permissions]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.permissions.create');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator_store(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'description' => ['required'],
            'controller' => ['required'],
        ],[
            'name.required' => 'Vui lòng nhập tên quyền.',
            'description.required' => 'Vui lòng nhập mô tả cho quyền.',
            'controller.required' => 'Vui lòng nhập tên controller cho quyền.',
        ]);
    }

    /**
     * Create a new user.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(Request $request)
    {
        // dd($request->all());
        $validator = $this->validator_store($request->all());
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $permission = Permission::create([
                'name' => $request->name,
                'description' => $request->description,
                'controller' => $request->controller,
            ]);
            
            return redirect()->route('admin.system.permission.create')->with('result','Thêm quyền mới thành công!');
        }
    }

    /**
     * Edit a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admins.permissions.edit',['permission' => $permission]);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator_update(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'description' => ['required'],
            'controller' => ['required'],
        ],[
            'name.required' => 'Vui lòng nhập tên quyền.',
            'description.required' => 'Vui lòng nhập mô tả cho quyền.',
            'controller.required' => 'Vui lòng nhập tên controller cho quyền.',
        ]);
    }

    /**
     * Update a user.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function update(Request $request, $id)
    {
        $validator = $this->validator_update($request->all());
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $data = array(
                'name' => $request->name,
                'description' => $request->description,
                'controller' => $request->controller
            );

            $permission = Permission::findOrFail($id);
            $permission -> update($data);

            return redirect()->route('admin.system.permission.edit', ['id'=> $id])->with('result','Sửa quyền thành công!');
        }
    }

    /**
     * Remove a user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $permission = Permission::findOrFail($id);

        //Xóa tất cả các quyền của role đang cần xóa
        $permission->roles()->detach();
        
        //Xóa tất cả các quyền đã gắn cho user của role đang cần xóa
        $permission->users()->detach();

        $permission->delete();

        return redirect()->route('admin.system.permission.index')->with('result','Xóa quyền thành công!');
    }

}
