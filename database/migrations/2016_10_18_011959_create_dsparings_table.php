<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsparingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsparings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sparings_id');
            $table->integer('users_id')->unsigned();
            $table->string('pesan');
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
        Schema::dropIfExists('dsparings');
    }
}
