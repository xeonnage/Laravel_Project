<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoomtype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RoomType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Type');
            $table->integer('NumberPeople');
            $table->double('RoomFee');
            $table->double('ElectricityBill');
            $table->double('WaterBill');
            $table->string('Dormitory_ID');
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
        Schema::dropIfExists('RoomType');
    }
}
