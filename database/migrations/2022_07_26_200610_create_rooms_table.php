<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number');
            $table->string('state', 100)->nullable()->default('Disponible');
            $table->string('floor', 100)->nullable()->default('Plata baja');
            $table->integer('bed_number')->unsigned()->nullable()->default(1);
            $table->string('type_of_bed', 100)->nullable()->default('Matrimonial');
            $table->integer('price_per_night')->unsigned()->nullable()->default(300);
            $table->integer('price_per_hour')->unsigned()->nullable()->default(50);
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
        Schema::dropIfExists('rooms');
    }
}
