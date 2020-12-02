<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToernooisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toernoois', function (Blueprint $table)
        {
            //toernooi ID
            $table->id();
            //Baancode
            $table->foreignId("baancode")->constrained("baans");
            //lid nummer
            //$table->foreignId("userid")->constrained("users");
            //toernooi beschrijving
            $table->text("beschrijving")->nullable();
            //datum van het toernooi
            $table->date("toernooidatum");
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
        Schema::dropIfExists('toernoois');
    }
}
