<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(AddressBookTypeTableSeeder::class);
         $this->call(ProvinceTableSeeder::class);
         $this->call(DistrictTableSeeder::class);
         $this->call(SubdistrictTableSeeder::class);
    }
}
