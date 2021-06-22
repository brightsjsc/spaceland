<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // PermissionTableSeeder.
        $this->call(PermissionTableSeeder::class);
        // RoleTableSeeder.
        $this->call(RoleTableSeeder::class);
        // UserTableSeeder.
        $this->call(UserTableSeeder::class);

        // CityTableSeeder.
        $this->call(CityTableSeeder::class);
        // DistrictTableSeeder.
        $this->call(DistrictTableSeeder::class);
        // CommuneTableSeeder.
        $this->call(CommuneTableSeeder::class);
    }
}
