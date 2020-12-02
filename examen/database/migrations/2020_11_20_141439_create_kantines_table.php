<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantines', function (Blueprint $table)
        {
            $table->id();
            //product naam, zoals Patatje met
            $table->String("naam");
            // Catogorie zoals brood
            $table->String("catogorie");
            //Merk bedrijf, zoals coca cola
            $table->String("bedrijf")->nullable();
            //Prijs van het product
            $table->Double("prijs");
            //1 = Snack, 2 = Drank
            $table->Integer("soort");
            //Hoeveelheid er nog op voorraad is
            $table->Integer("hoeveelheid");
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
        Schema::dropIfExists('kantines');
    }
}
