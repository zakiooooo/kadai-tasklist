<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('tasks.index', [
            'users' => $users,
        ]);
    }
}