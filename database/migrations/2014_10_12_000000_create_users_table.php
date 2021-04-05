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
            $table->string('password')->nullable();
            $table->bigInteger('number')->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('job_title')->nullable();
            $table->text('company_name')->nullable();
            $table->text('desc')->nullable();
            $table->text('github_link')->nullable();
            $table->string('university')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('major_id')->nullable();
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
