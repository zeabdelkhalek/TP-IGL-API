<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('matricule');
            $table->string('email')->unique();
            $table->string('first-name');
            $table->string('last-name');
            $table->text('adresse');
            $table->string('commune');
            $table->string('wilaya');
            $table->string('phone');
            $table->enum('promo', ['1cp','2cp','1cs','2cs','3cs']);
            $table->enum('section', ['A','B','C']);
            $table->enum('groupe', ['01','02','03','04','05','06','07','08','09','10']);
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
        Schema::drop('students');
    }
}
