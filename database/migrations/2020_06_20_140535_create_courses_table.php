<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('CourseTitle');
            $table->string('slug');
            $table->string('Category');
            $table->string('Instructor');
            $table->string('Rating');
            $table->string('Students');
            $table->string('CourseLink');
            $table->longText('Prerequisites');
            $table->longText('Description');
            $table->string('CourseBanner');
            $table->string('Status')->default('0');
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
        Schema::dropIfExists('courses');
    }
}
