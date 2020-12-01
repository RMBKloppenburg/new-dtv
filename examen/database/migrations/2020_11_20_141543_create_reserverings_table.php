<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserverings', function (Blueprint $table)
        {
            $table->id();
            //baancode
            $table->foreignId("baancode")->constrained("baans");
            //datum reservering
            $table->date("reserveringdatum");
            //tijdstip van de reservering
            $table->time("reserveringtijd");
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
        Schema::dropIfExists('reserverings');
    }
}
