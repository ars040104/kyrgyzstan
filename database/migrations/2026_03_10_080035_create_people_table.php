<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passport')->unique();
            $table->unsignedBigInteger('oblast_id');
            $table->unsignedBigInteger('rayon_id');
            $table->foreign('oblast_id')->references('id')->on('oblasts')->onDelete('cascade');
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');
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
        Schema::dropIfExists('people');
    }
}
