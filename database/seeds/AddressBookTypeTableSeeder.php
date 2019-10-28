<?php

use Illuminate\Database\Seeder;
use App\Models\AddressBookType;

class AddressBookTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressBookType::create(
            ['slug' => 'home','name_th'=>'ที่บ้าน','name_en'=>'Home'],
            ['slug' => 'work','name_th'=>'ที่ทำงาน','name_en'=>'Work']
        );
    }
}
