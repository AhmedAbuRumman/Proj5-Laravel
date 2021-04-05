<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('recruiter_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('current_salary')->nullable();
            $table->string('skill_name')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('university')->nullable();
            $table->text('brief')->nullable();
            $table->string('company_desc')->nullable();
            $table->text('company_logo')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
