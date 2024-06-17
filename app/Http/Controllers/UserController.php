<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(int $user_id): view
    {
        $user = User::find($user_id);

        return view('welcome', ['user' => $user]);
    }
}
