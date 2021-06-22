<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_admin = new Role();
		$role_admin->name = 'admin';
		$role_admin->description = 'Quản trị viên';
		$role_admin->save();

		$role_writer = new Role();
		$role_writer->name = 'writer';
		$role_writer->description = 'Người viết bài';
		$role_writer->save();

		$role_editor = new Role();
		$role_editor->name = 'editor';
		$role_editor->description = 'Biên tập viên';
		$role_editor->save();
    }
}
