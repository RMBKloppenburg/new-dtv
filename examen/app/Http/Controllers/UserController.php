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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
//        dd($users);
        return view('Backend.edit', compact("users"));

    }
    /**
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        $users->update(request()->validate(
            [
                "name" => 'required',
                'email' => 'required',

            ]));
        return redirect()->route('userindex');



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
