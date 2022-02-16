<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.login');
    }

    public function checkLogin(Request $request)
    {
        $response = User::checkLogin($request->email, $request->password);
        if ($response == "Login") {
            $id = User::getIdByEmail($request->email);
            session(['id' => $id]);
            return redirect()->route('home');
        }
        else {
            return Redirect::to("/login?email=".$request->email."&response=".$response);
        }
    }

    public function check(Request $request)
    {
        return User::getIdByEmail($request->email);
    }
}
