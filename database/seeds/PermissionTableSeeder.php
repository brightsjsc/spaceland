<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_list = new Permission();
		$permission_list->name = 'user-list';
		$permission_list->description = 'Xem người dùng';
		$permission_list->controller = 'User';
		$permission_list->save();

		$permission_create = new Permission();
		$permission_create->name = 'user-create';
		$permission_create->description = 'Thêm người dùng';
		$permission_create->controller = 'User';
		$permission_create->save();

		$permission_edit = new Permission();
		$permission_edit->name = 'user-edit';
		$permission_edit->description = 'Sửa người dùng';
		$permission_edit->controller = 'User';
		$permission_edit->save();

		$permission_delete = new Permission();
		$permission_delete->name = 'user-delete';
		$permission_delete->description = 'Xóa người dùng';
		$permission_delete->controller = 'User';
		$permission_delete->save();

		$permission_list = new Permission();
		$permission_list->name = 'role-list';
		$permission_list->description = 'Xem nhóm quyền';
		$permission_list->controller = 'Role';
		$permission_list->save();

		$permission_create = new Permission();
		$permission_create->name = 'role-create';
		$permission_create->description = 'Thêm nhóm quyền';
		$permission_create->controller = 'Role';
		$permission_create->save();

		$permission_edit = new Permission();
		$permission_edit->name = 'role-edit';
		$permission_edit->description = 'Sửa nhóm quyền';
		$permission_edit->controller = 'Role';
		$permission_edit->save();

		$permission_delete = new Permission();
		$permission_delete->name = 'role-delete';
		$permission_delete->description = 'Xóa nhóm quyền';
		$permission_delete->controller = 'Role';
		$permission_delete->save();

		$permission_list = new Permission();
		$permission_list->name = 'permission-list';
		$permission_list->description = 'Xem quyền';
		$permission_list->controller = 'Permission';
		$permission_list->save();

		$permission_create = new Permission();
		$permission_create->name = 'permission-create';
		$permission_create->description = 'Thêm quyền';
		$permission_create->controller = 'Permission';
		$permission_create->save();

		$permission_edit = new Permission();
		$permission_edit->name = 'permission-edit';
		$permission_edit->description = 'Sửa quyền';
		$permission_edit->controller = 'Permission';
		$permission_edit->save();

		$permission_delete = new Permission();
		$permission_delete->name = 'permission-delete';
		$permission_delete->description = 'Xóa quyền';
		$permission_delete->controller = 'Permission';
		$permission_delete->save();
    }
}
