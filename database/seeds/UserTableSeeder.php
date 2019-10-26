<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
	    $administrator_perm = Permission::whereIn('slug',['create-user','create-role'])->get();
	    $owner_perm = Permission::where('slug','create-user')->first();

	    $developer = new User();
	    $developer->name = 'Admini Strator';
	    $developer->email = 'admin@mail.com';
	    $developer->password = bcrypt('secret');
	    $developer->save();
	    $developer->roles()->attach($administrator_role);
	    $developer->permissions()->attach($administrator_perm);


	    $manager = new User();
	    $manager->name = 'Owner User';
	    $manager->email = 'owner@mail.com';
	    $manager->password = bcrypt('secret');
	    $manager->save();
	    $manager->roles()->attach($owner_role);
	    $manager->permissions()->attach($owner_perm);
    }
}
