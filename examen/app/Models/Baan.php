<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baan extends Model
{
    use HasFactory;


    protected $fillable = ['afmetingen','vloer','checkdatum','servicedatum'];
}
