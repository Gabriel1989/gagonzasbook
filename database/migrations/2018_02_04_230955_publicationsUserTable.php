<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicationsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications_users', function (Blueprint $table) {
            $table->increments('id_publication');
            $table->string('publication_text');
            $table->integer('id_user')->unsigned();
            $table->string('url_image_publication')->nullable();
            $table->timestamps();
            $table->dateTime('fecha_publ');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications_users');
    }
}
