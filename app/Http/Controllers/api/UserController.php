<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getFirstName(Request $request)
    {
        return User::getFirstNameById($request->get('user_id'));
    }
}
