<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {

            $table->increments('id');


            $table->string('name');


            $table->text('cdn_url');


            $table->text('description');


            $table->boolean('is_default');


            $table->integer('created_by')->nullable();


            $table->integer('last_modified_by')->nullable();


            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('themes');

    }
}
