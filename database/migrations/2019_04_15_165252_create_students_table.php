<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('course');
            $table->string('extension_name')->nullable();
            $table->date('date_of_birth');
            $table->string('address');                               
            $table->string('contact_number');
            $table->string('student_type'); // regular or irregular
            $table->string('status'); // continuing or dropped
            $table->boolean('isCollege'); // 0 - false for SHS ---- 1 - true for College
            $table->timestamps();
        });
        DB::update("ALTER TABLE students AUTO_INCREMENT = 190000");
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
