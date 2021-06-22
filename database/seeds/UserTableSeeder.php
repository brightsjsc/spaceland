<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$permission_user_list = Permission::where('name', 'user-list')->first();
    	$permission_user_create = Permission::where('name', 'user-create')->first();
    	$permission_user_edit = Permission::where('name', 'user-edit')->first();
    	$permission_user_delete = Permission::where('name', 'user-delete')->first();

    	$permission_role_list = Permission::where('name', 'role-list')->first();
    	$permission_role_create = Permission::where('name', 'role-create')->first();
    	$permission_role_edit = Permission::where('name', 'role-edit')->first();
    	$permission_role_delete = Permission::where('name', 'role-delete')->first();

    	$permission_list = Permission::where('name', 'permission-list')->first();
    	$permission_create = Permission::where('name', 'permission-create')->first();
    	$permission_edit = Permission::where('name', 'permission-edit')->first();
    	$permission_delete = Permission::where('name', 'permission-delete')->first();

        $role_writer = Role::where('name', 'writer')->first();
		$role_editor  = Role::where('name', 'editor')->first();
		$role_admin = Role::where('name', 'admin')->first();

		$admin = new User();
		$admin->name = 'Admin Name';
		$admin->email = 'admin@example.com';
		$admin->password = bcrypt('Chung!@#456');
		$admin->save();
		$admin->roles()->attach($role_admin);
		$role_admin->permissions()->attach($permission_user_list);
		$role_admin->permissions()->attach($permission_user_create);
		$role_admin->permissions()->attach($permission_user_edit);
		$role_admin->permissions()->attach($permission_user_delete);
		$role_admin->permissions()->attach($permission_role_list);
		$role_admin->permissions()->attach($permission_role_create);
		$role_admin->permissions()->attach($permission_role_edit);
		$role_admin->permissions()->attach($permission_role_delete);
		$role_admin->permissions()->attach($permission_list);
		$role_admin->permissions()->attach($permission_create);
		$role_admin->permissions()->attach($permission_edit);
		$role_admin->permissions()->attach($permission_delete);

		$writer = new User();
		$writer->name = 'Writer Name';
		$writer->email = 'writer@example.com';
		$writer->password = bcrypt('123456');
		$writer->save();
		$writer->roles()->attach($role_writer);

		$editor = new User();
		$editor->name = 'Editor Name';
		$editor->email = 'editor@example.com';
		$editor->password = bcrypt('123456');
		$editor->save();
		$editor->roles()->attach($role_editor);
    }
}
