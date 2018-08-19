<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfirmAddFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmfriendsNoty', function (Blueprint $table) {
            $table->integer('id_user_follower')->unsigned();
            $table->integer('id_user_followed')->unsigned();
            $table->primary(['id_user_follower', 'id_user_followed']);
            $table->foreign('id_user_follower')->references('id')->on('users');
            $table->foreign('id_user_followed')->references('id')->on('users');
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
        Schema::dropIfExists('confirmfriendsNoty');
    }
}
