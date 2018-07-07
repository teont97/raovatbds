<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('id_hinhthuc')->unsigned();
            $table->foreign('id_hinhthuc')->references('id')->on('hinhthuc')->onDelete('cascade');
            $table->integer('id_theloai')->unsigned();
            $table->foreign('id_theloai')->references('id')->on('loaitin')->onDelete('cascade');
            $table->double('price');
            $table->string('area');
            $table->integer('room');
            $table->integer('bathroom');
            $table->string('images');
            $table->string('address');
            $table->integer('id_tinh')->unsigned();
            $table->foreign('id_tinh')->references('id')->on('tinh')->onDelete('cascade');
            $table->integer('id_huyen')->unsigned();
            $table->foreign('id_huyen')->references('id')->on('huyen')->onDelete('cascade');
            $table->integer('id_duong')->unsigned();
            $table->foreign('id_duong')->references('id')->on('duong')->onDelete('cascade');
            $table->text('description');
            $table->integer('id_uptin')->unsigned();
            $table->foreign('id_uptin')->references('id')->on('loaiuptin')->onDelete('cascade');
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
        Schema::dropIfExists('post');
    }
}
