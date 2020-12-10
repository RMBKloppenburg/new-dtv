<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

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
        return view('Backend.AdminUserCreate');
    }


    /**
     * /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
//        dd($users);
        return view('Backend.edit', compact("users"));

    }

    /**
     * /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        $users->update(request()->validate(
            [
                "name" => 'required',
                'email' => 'required',
                'lid'=>'required',
                'isAdmin'=>'required',

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
        User::where('id', $id)->delete();
        return redirect()->route('userindex');
    }

    /**
     * adds a user to the database
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make(($request['password']));
        $user->lid = $request->lid;
        $user->isAdmin= $request->isAdmin;
        $user->save();
        return redirect()->route('userindex');
    }

}
