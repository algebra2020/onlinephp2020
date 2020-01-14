<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
       // return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('user.profile', ['user' => 'Mali Perica','id'=>$id]); // privremeno dok ne napravimo model
    }
}
