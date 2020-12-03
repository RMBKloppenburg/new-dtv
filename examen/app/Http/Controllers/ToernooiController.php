<?php

namespace App\Http\Controllers;

use App\Models\Toernooi;
use Illuminate\Http\Request;
use DB;

class ToernooiController extends Controller
{
    public function index()
    {
        $toernooi = DB::table('toernoois')->get();
        return view("Backend.AdminToernooiManage",
            [
                "toernoois" => $toernooi
            ]
        );
    }


    public function store()
    {
        return view('Backend.AdminToernooiCreate');
    }

    public function create(Request $request)
    {
        $toernooi = new Toernooi();
        $toernooi->beschrijving = $request['beschrijving'];
        $toernooi->maxspelers = $request['maxspelers'];
        $toernooi->toernooidatum = $request['toernooidatum'];
        $toernooi->toernooieinddatum = $request['toernooieinddatum'];
        $toernooi->save();
        return redirect()->route('toernooiindex');
    }
}
