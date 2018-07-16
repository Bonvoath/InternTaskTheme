<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('usersManagements.userLists');
    }
    // create
    public function create()
    {
        return view('usersManagements.user');
    }
    // update
    public function update()
    {
        return view('usersManagements.user');
    }
}
