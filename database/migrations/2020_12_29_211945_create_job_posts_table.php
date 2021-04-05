<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('recruiter_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('major_id')->nullable();
            $table->text('job_desc')->nullable();
            $table->string('job_city')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('company_logo')->nullable();
            $table->timestamps();

            
        });
        // Schema::table('job_posts', function (Blueprint $table) {
        //     $table->foreign('major_id')->references('id')->on('majors');    
        // });
        // Schema::table('job_posts', function (Blueprint $table) {
        //     $table->dropColumn('category_id');
        // });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}
