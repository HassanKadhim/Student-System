<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('stage_id')->nullable();
            $table->string('card_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('type')->default(1); // 1 => Morning | 2 => Pararal | 3 => Night

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); 
            
            $table->foreign('stage_id')
                ->references('id')
                ->on('stages')
                ->onDelete('cascade');  
            // $table->foreignId('stage_id')->constrained('stages')->onDelete('cascade')->nullable();
            // $table->foreignId('department_id')->constrained('departments')->onDelete('cascade')->nullable();

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
        Schema::dropIfExists('students');
    }
}
