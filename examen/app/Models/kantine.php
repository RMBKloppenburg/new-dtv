<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kantine extends Model
{
    use HasFactory;

	public $timestamps = true;
    public $table = "kantines";
    //Zorgt ervoor dat prijs als een double wordt meegegeven
    protected $casts = ['prijs' => 'double'];
    //invulbare velden in de database
    protected $fillable = ['naam','catogorie','bedrijf','prijs','soort','hoeveelheid'];
}
