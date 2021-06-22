<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = 'null')
    {
        if(Auth::check()){
            // Lấy danh sách các Role của User đang hoạt động
            $listRoleOfUsers = User::find(auth()->id())->roles()->select('roles.id')->pluck('id')->toArray();

            // Lấy danh sách các Permission của User đang hoạt động từ các Role đã lấy ở trên
            foreach ($listRoleOfUsers as $listRoleOfUser) {
                $listPermissionOfUsers[] = Role::find($listRoleOfUser)->permissions()->select('permissions.name')->pluck('name')->toArray();
            }

            foreach ($listPermissionOfUsers as $key => $value) {
                foreach ($value as $k => $v) {
                    $permissionOfUsers[] = $v;
                }
            }

            //Loại bỏ các Permission trùng nhau
            $permissionOfUsers = (array_unique($permissionOfUsers));

            if (collect($permissionOfUsers)->contains($permission)) {
                return $next($request);
            }
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
}
