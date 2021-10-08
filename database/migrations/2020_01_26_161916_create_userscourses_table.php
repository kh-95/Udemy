<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserscoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userscourses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            
            $table->unsignedbigInteger('course_id');
            $table->foreign('course_id')->on('courses')->references('id')->onDelete('cascade');
            $table->boolean('is_confirmed')->default('0');
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
        Schema::dropIfExists('userscourses');
    }
}
