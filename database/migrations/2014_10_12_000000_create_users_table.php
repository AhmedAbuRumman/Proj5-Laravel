<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['female', 'male'])->nullable();
            $table->enum('is_active',  ['true', 'false'])->nullable();
            $table->bigInteger('number')->nullable();
            $table->enum('email_active',['true', 'false'] )->nullable();
            $table->text('image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('university')->nullable();
            $table->string('major')->nullable();
            $table->string('degree')->nullable();
            $table->text('bio')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('ex_start_date')->nullable();
            $table->string('ex_end_date')->nullable();
            $table->string('ex_job_title')->nullable();
            $table->string('ex_company_name')->nullable();
            $table->text('ex_job_desc')->nullable();
            $table->text('cv_file')->nullable();
            $table->enum('role',['seeker', 'recruiter','admin'])->nullable();
            $table->rememberToken();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();


    }
}
