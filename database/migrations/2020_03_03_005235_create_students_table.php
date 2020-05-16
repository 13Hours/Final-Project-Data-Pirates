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
            
            $table->string('fname');
            $table->string('lname');
            $table->integer('id_number');
            $table->primary('id_number');
            $table->string('gender');
            $table->string('email');
            $table->string('faculty');
            $table->string('department');
            $table->string('student_status');
            $table->integer('current_year');
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
