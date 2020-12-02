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
    public function indexCreate()
    {
        return view('Backend.AdminBaanCreate');
    }
    public function create(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required',
            'specie' => 'required',
            'gender' => 'required',
        ]);

        $id = DB::table('animals')->insertGetId([
            'name' => $data['name'],
            'specie' => $data['specie'],
            'gender' => $data['gender'],
        ]);
        return redirect('all-zooanimals');
    }
    //
}
