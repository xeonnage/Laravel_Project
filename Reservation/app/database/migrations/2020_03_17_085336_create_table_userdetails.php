<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserDetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Code_ID');
            $table->string('Status');
            $table->string('Collegian_ID');
            $table->string('Firstname_Thai');
            $table->string('Lastname_Thai');
            $table->string('Firstname_Eng');
            $table->string('Lastname_Eng');
            $table->string('Gender');
            $table->string('ethnicity');//เชื้อชาติ
            $table->string('nationality');//สัญชาติ
            $table->string('religion');//ศาสนา
            $table->date('Birth_Date');
            $table->string('Phone');
            $table->string('Email');
            $table->string('Faculty');
            $table->string('Major');
            $table->string('Level');
            $table->string('Address');
            $table->string('Amphures');
            $table->string('Districts');
            $table->string('Provinces');
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
        Schema::dropIfExists('UserDetails');
    }
}
