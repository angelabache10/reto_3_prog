<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('first_lastname');
            $table->string('second_lastname')->nullable();
            $table->integer('ci')->unique();
            $table->enum('ci_type', ciTypes()->all())->default('V');
            $table->enum('gender', genders()->all());
            $table->string('image')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birth');
            $table->boolean('is_upta')->default(false);
            $table->enum('role', roles(true)->all())->default('Estudiante');
            $table->timestamps();
            // Student fields
            $table->enum('grade', grades()->all())->nullable();
            // Instructor fields
            $table->string('degree')->nullable();
            $table->foreignId('area_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
