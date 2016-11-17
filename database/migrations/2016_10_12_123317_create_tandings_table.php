<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tandings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('author_id')->unsigned();
            $table->date('waktu');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')
              ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tandings');
    }
}
