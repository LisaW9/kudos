<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('giver')->unsigned();
            $table->foreign('giver')->references('id')->on('users')->onDelete('cascade');
            $table->integer('receiver')->unsigned();
            $table->foreign('receiver')->references('id')->on('users')->onDelete('cascade');
            $table->string('compliment');
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
        Schema::dropIfExists('compliments');
    }
}
