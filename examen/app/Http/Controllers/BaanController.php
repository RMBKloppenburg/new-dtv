<?php

namespace App\Http\Controllers;

use App\Models\Baan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class BaanController
 *
 * @package App\Http\Controllers
 */
class BaanController extends Controller
{
    /**
     * Return's baan manage view
     *
     * @return mixed
     */
    public function index()
    {
        $baans = DB::table('baans')->get();
        return view("Backend.AdminBaanManage", ["baans" => $baans]);
    }
    /**
     * Return's the baan create view
     *
     * @return mixed
     */
    public function indexCreate()
    {
        return view('Backend.AdminBaanCreate');
    }
    /**
     * Create a baan
     *
     * @param Request $request
     * @return mixed
     */
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
    /**
     * Edit baan
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $baan = new Baan();
        $baan = $baan->find($id);

        return view('Backend.AdminBaanEdit', ['banen' => $baan]);
    }

    /**
     * Update baan
     *
     * @param Request $request
     * @return mixed
     */
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
    /**
     * Destroy's a baan
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        Baan::where('id', $id)->delete();
        return redirect()->route('adminbaans');
    }
}
?>
