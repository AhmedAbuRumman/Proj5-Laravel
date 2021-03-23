<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->date('recruiter_date_of_birth')->nullable();
            $table->enum('recruiter_gender', ['female', 'male'])->nullable();
            $table->enum('recruiter_is_active',['true', 'false'])->nullable();
            $table->bigInteger('recruiter_number')->nullable();
            $table->enum('recruiter_email_active', ['true', 'false'])->nullable();
            $table->text('recruiter_image')->nullable();
            $table->string('recruiter_first_name')->nullable();
            $table->string('recruiter_last_name')->nullable();
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
        Schema::dropIfExists('recruiters');
    }
}
