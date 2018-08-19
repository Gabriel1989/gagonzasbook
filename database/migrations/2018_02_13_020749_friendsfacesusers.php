<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Friendsfacesusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendsfacesusers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('id_facefriend')->unsigned();
            $table->primary(['user_id','id_facefriend']);
            $table->foreign('id_facefriend')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('friendsfacesusers');
    }
}
