<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UpdateUserController extends Controller
{
    //
    public function store(Request $request)
    {
        $sessionID = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        $updateUser = new User();
        $updateUser = $updateUser::find($sessionID);
        $updateUser->email = request('email');
        $updateUser->name = request('name');
        $updateUser->save();
    }
}
