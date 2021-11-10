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
            $table->string('card_number');
            $table->string('mother_name');
            $table->string('city');
            $table->string('district');
            $table->string('phoneNumbe');
            $table->integer('type')->default(1); // 1 => Morning | 2 => Pararal | 3 => Night
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
