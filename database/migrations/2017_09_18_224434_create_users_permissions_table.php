<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
	        $table->bigInteger('user_id')->unsigned();
	        $table->bigInteger('permission_id')->unsigned();
	        //FOREIGN KEY CONSTRAINTS
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
	        $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
	        //SETTING THE PRIMARY KEYS
	        $table->primary(['user_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permissions');
    }
}
