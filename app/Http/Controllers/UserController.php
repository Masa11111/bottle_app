<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function user_check(Request $request)
    {
        $password = '1234';
        $user_name = '吉村酒店';

        if($password == $request->password && $user_name == $request->input_name)
        {
            $login = true;
            $request->session()->put('login_check', $login);
            return redirect('bottle');
        }else{
            return view('/login', ['error' => '入力データが正しくありません!']);
        }
    }

    public function user_logout(Request $request)
    {
        $login = false;
        $request->session()->put('login_check', $login);
        return redirect('/login');
    }
}
