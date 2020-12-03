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
//            $table->foreignId("baancode")->constrained("baans");
            //$table->foreignId("userid")->constrained("users");
            $table->text("beschrijving")->nullable();
            $table->text("maxspelers")->nullable();
            //datum van het toernooi
            $table->date("toernooidatum");
            $table->date("toernooieinddatum");
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
