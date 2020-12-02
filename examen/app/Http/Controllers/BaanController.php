<?php

namespace App\Http\Controllers;

use App\Models\Baan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaanController extends Controller
{
    public function index()
    {
        $baans = DB::table('baans')->get();
        return view("Backend.AdminBaanManage", ["baans" => $baans]);
    }

    public function indexCreate()
    {
        return view('Backend.AdminBaanCreate');
    }

    public function create(Request $request)
    {
        $baan = new Baan();
        $baan->afmetingen = $request['afmetingen'];
        $baan->vloer = $request['vloer'];
        $baan->checkdatum = $request['checkdatum'];
        $baan->servicedatum = $request['servicedatum'];
        $baan->save();
        return redirect()->route('adminbaans');
    }


    public function edit($id)
    {
        //dd($id);
        $baan = new Baan();
        $baan = $baan->find($id)->first();

        return view('Backend.AdminBaanEdit', ['banen' => $baan]);
    }

    public function update(Request $request)
    {
        $baan = Baan::find($request->id);
        $baan->afmetingen = $request->afmetingen;
        $baan->vloer = $request->vloer;
        $baan->checkdatum = $request->checkdatum;
        $baan->servicedatum = $request->servicedatum;
        $baan->update($request->all());
        return redirect()->route('adminbaans');
    }

    public function destroy($id)
    {
        Baan::where('id', $id)->delete();
        return redirect()->route('adminbaans');
    }


}
