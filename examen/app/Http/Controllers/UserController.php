<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view("Backend.AdminUserManage",
            [
                "users" => $users
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aanmaken :)
        return view('Backend.createKantine');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $users)
    {
        return view('edit',['users'=> $users]);

    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::where('id', $id)->update(['name' => $data['name'],'email' => $data['email']]);

        return redirect('userindex');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\users
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('userindex');
    }
}
