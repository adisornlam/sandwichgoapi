<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('fullname', 100)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('address', 100)->nullable();
            $table->bigInteger('subdistrict_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->bigInteger('province_id')->unsigned();
            $table->string('zipcode', 5)->nullable();
            $table->bigInteger('address_book_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subdistrict_id')->references('id')->on('subdistricts');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('address_book_type_id')->references('id')->on('address_book_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_books');
    }
}
