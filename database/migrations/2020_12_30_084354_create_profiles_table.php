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
            $table->bigInteger('recruiter_id')->nullable();
            $table->bigInteger('user_id')->nullable();

            $table->year('ex_start_date')->nullable();
            $table->year('ex_end_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('current_salary')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('skill_name')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('university')->nullable();
            $table->year('uni_starting_date')->nullable();
            $table->year('uni_completion_date')->nullable();
            $table->text('brief')->nullable();
            $table->string('company_desc')->nullable();
            $table->year('company_founding_date')->nullable();
            $table->string('company_website_url')->nullable();
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
