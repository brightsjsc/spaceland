<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserController extends Controller
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
        $users = User::select(['id','name','email','created_at'])->get()->toArray();

        foreach ($users as $user) {
            $user['roles'] = User::find($user['id'])->roles()->get()->toArray();
            $listUserHasRole[] = $user;
        }

        return view('admins.users.index',['users' => $listUserHasRole]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('admins.users.create',['roles' => $roles]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role_id' => ['required'],
        ],[
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.max' => 'Tên người dùng không quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.max' => 'Email không quá 255 ký tự.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu ít nhất có 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không trùng khớp.',
            'role_id.required' => 'Vui lòng chọn ít nhất 1 quyền.',
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
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            foreach ($request->role_id as $role_id) {
                $user->roles()->attach(Role::where('id', $role_id)->first());
            }
            
            return redirect()->route('admin.system.user.index')->with('result','Thêm mới người dùng thành công!');
        }
    }

    /**
     * Edit a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $user['roles'] = $user->roles()->pluck('role_id');

        $roles = Role::all();

        return view('admins.users.edit',['user' => $user, 'roles' => $roles]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['confirmed'],
            'role_id' => ['required'],
        ],[
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.max' => 'Tên người dùng không quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.max' => 'Email không quá 255 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không trùng khớp.',
            'role_id.required' => 'Vui lòng chọn ít nhất 1 quyền.',
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
            if ($request->password == '') {
                $data = array(
                    'name' => $request->name,
                    'email' => $request->email
                );
            } else {
                $data = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                );
            }

            $user = User::findOrFail($id);
            $user -> update($data);

            //Xóa tất cả các quyền của user đang cần sửa
            $user->roles()->detach();

            foreach ($request->role_id as $role_id) {
                $user->roles()->attach(Role::where('id', $role_id)->first());
            }

            return redirect()->route('admin.system.user.edit', ['id'=> $id])->with('result','Sửa người dùng thành công!');
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
        $user = User::findOrFail($id);

        //Xóa tất cả các quyền của user đang cần sửa
        $user->roles()->detach();

        $user->delete();

        return redirect()->route('admin.system.user.index')->with('result','Xóa người dùng thành công!');
    }

}
