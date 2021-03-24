<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $_request){
        echo $_request->username.'<br>';
        echo $_request->password;
    }
}
