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
            $table->string('name')->unique();
            $table->string('image');
            $table->text('description');
            $table->integer('total_price');
            $table->integer('reserv_price')->nullable();
            $table->date('start_ins');
            $table->date('end_ins');
            $table->date('start_course');
            $table->date('end_course');
            $table->integer('duration');
            $table->integer('student_limit');
            $table->set('days', days()->all());
            $table->time('start_hour');
            $table->time('end_hour');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('area_id')->constrained();
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
