<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baans', function (Blueprint $table)
        {
            //baancode
            $table->id();
            $table->string('afmetingen');
            $table->string('vloer');
            $table->date('checkdatum')->nullable();
            $table->date('servicedatum')->nullable();
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
        Schema::dropIfExists('baans');
    }
}
