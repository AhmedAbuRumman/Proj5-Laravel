<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajorSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('major_skill', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('major_id');
            $table->foreign('skill_id')->references('id')->on('skill')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('major')->onDelete('cascade');
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
        Schema::dropIfExists('major_skill');
    }
}
