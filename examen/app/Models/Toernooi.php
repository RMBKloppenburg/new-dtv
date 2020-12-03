<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toernooi extends Model
{
    use HasFactory;


    protected $fillable = ['beschrijving', 'maxspelers', 'toernooidatum', 'toernooieinddatum'];
}
