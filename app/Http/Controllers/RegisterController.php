<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $register = new register;
        if ($request->has('retypePassword')) {
            if (request('retypePassword') == request('password')) {


                $register->firstname = request('firstname');
                $register->lastname = request('lastname');
                $register->email = request('email');
                $register->birthday = request('birthday');
                $register->password = bcrypt($request->input('password_new'));
                $register->save();
            }
        }
    }
}
