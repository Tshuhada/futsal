<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('lapangan_id');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('konsekuensi');
            $table->string('status');
            $table->string('logo');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sparings');
    }
}
