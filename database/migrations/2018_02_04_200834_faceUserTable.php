<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('face_user', function (Blueprint $table) {
            $table->integer('id_face')->unsigned();
            $table->foreign('id_face')->references('id')->on('users');
            $table->string('love_situation');
            $table->string('face_info');
            $table->date('birthday');
            $table->integer('telephone');
            $table->string('living_place');
            $table->enum('gender',['Hombre','Mujer']);
            $table->string('hobbies');
            $table->string('avatar');
            $table->primary('id_face');
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
        Schema::dropIfExists('face_user');
    }
}
