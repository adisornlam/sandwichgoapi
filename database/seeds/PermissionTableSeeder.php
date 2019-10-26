<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $administrator_role = Role::where('slug','administrator')->first();
	    $owner_role = Role::where('slug', 'owner')->first();

	    $createUsers = new Permission();
	    $createUsers->slug = 'create-user';
	    $createUsers->name = 'Create Users';
	    $createUsers->save();
		// $createUsers->roles()->attach($administrator_role);
		
		$createRoles = new Permission();
	    $createRoles->slug = 'create-role';
	    $createRoles->name = 'Create Roles';
	    $createRoles->save();
		// $createRoles->roles()->attach($owner_role);
    }
}
