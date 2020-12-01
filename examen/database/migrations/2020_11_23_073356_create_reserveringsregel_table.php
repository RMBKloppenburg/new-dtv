<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveringsregelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserveringsregel', function (Blueprint $table) {
            $table->foreignId("lidid")->constrained("lids");
            $table->foreignId("reservingid")->constrained("reserverings");
            $table->timestamps();
            //foreign key example
            //$table->foreignId("baancode")->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserveringsregel');
    }
}
