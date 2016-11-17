<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparing_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sparing_id')->unsigned()->index();
            $table->foreign('sparing_id')->references('id')->on('sparings')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->boolean('is_returned')->default(false);
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
        Schema::dropIfExists('sparing_logs');
    }
}
