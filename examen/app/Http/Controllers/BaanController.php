<?php

namespace App\Http\Controllers;

use App\Models\baan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaanController extends Controller
{
    public function index()
    {
        $baans = DB::table('baans')->get();
        return view("Backend.AdminBaanManage",["baans" => $baans]);

    }
    //
}
