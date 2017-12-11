<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');


            $table->string('name');


            $table->string('email')->unique();


            $table->string('avatar')->default('default.jpg');


            $table->string('bio')->default('Add A Bio');


            $table->string('password');


            $table->integer('created_by')->nullable();


            $table->integer('last_modified_by')->nullable();


            $table->rememberToken();



            $table->timestamps();


            $table->softDeletes();


            $table->integer('deleted_by')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    //make:migration
}
