<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Permission;

class RoleController extends Controller
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
        $roles = Role::all();

        return view('admins.roles.index',['roles' => $roles]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group_permissions = Permission::all()->groupBy('controller')->toArray();

        return view('admins.roles.create',['group_permissions' => $group_permissions]);
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
        ],[
            'name.required' => 'Vui lòng nhập tên nhóm quyền.',
            'description.required' => 'Vui lòng nhập mô tả cho nhóm quyền.',
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
            $role = Role::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            if (!empty($request->permission_id)) {
                foreach ($request->permission_id as $permission_id) {
                    $role->permissions()->attach(Permission::where('id', $permission_id)->first());
                }
            }
            
            return redirect()->route('admin.system.role.index')->with('result','Thêm mới quyền thành công!');
        }
    }

    /**
     * Edit a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        $role['permissions'] = $role->permissions()->pluck('permissions.id');

        $groupPermissionOfUser = Permission::whereIn('id',$role['permissions'])->get()->groupBy('controller')->toArray();

        $groupPermissionAll = Permission::all()->groupBy('controller')->toArray();

        return view('admins.roles.edit',['role' => $role, 'groupPermissionOfUser' => $groupPermissionOfUser, 'groupPermissionAll' => $groupPermissionAll]);
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
        ],[
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'description.required' => 'Vui lòng nhập mô tả cho nhóm quyền.',
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
                'description' => $request->description
            );

            $role = Role::findOrFail($id);
            $role -> update($data);

            //Xóa tất cả các quyền của role đang cần sửa
            $role->permissions()->detach();

            if (!empty($request->permission_id)) {
                foreach ($request->permission_id as $permission_id) {
                    $role->permissions()->attach(Permission::where('id', $permission_id)->first());
                }
            }

            return redirect()->route('admin.system.role.edit', ['id'=> $id])->with('result','Sửa quyền thành công!');
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
        $role = Role::findOrFail($id);

        //Xóa tất cả các quyền của role đang cần xóa
        $role->permissions()->detach();
        
        //Xóa tất cả các quyền đã gắn cho user của role đang cần xóa
        $role->users()->detach();

        $role->delete();

        return redirect()->route('admin.system.role.index')->with('result','Xóa quyền thành công!');
    }

}
