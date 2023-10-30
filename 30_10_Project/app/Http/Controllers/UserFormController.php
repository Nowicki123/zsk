<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $request){
        $request->validate([
            'firstname' => 'required | min:2 | max:15',
            'lastname' => 'required | min:2 | max:30',
            'email' => 'required | min:5 | max:40 | email'
        ]) ;
        // return $request->input('email');

        $user = [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email')
        ];

        return view('user', ['user'=> $user]);
    }
}
