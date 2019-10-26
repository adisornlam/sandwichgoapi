<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $administrator_permission = Permission::whereIn('slug',['create-user','create-role'])->get();
	    $owner_permission = Permission::where('slug', 'create-user')->first();

	    $dev_role = new Role();
	    $dev_role->slug = 'administrator';
	    $dev_role->name = 'Administrator';
	    $dev_role->save();
	    $dev_role->permissions()->attach($administrator_permission);

	    $manager_role = new Role();
	    $manager_role->slug = 'owner';
	    $manager_role->name = 'Owner Website';
	    $manager_role->save();
	    $manager_role->permissions()->attach($owner_permission);
    }
}
