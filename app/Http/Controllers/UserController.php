<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');   
    }

    public function list(Request $request)
    {
        $user = User::all();

        $this->setData($user);
        
        return response()->json($this->result);
    }
/*
    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(), User::validateUsers());
        if ($validator->fails()){
            $this->invalid($validator);
        }else{
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
        }
        return Response::json($user);  
    }
    // update
    public function edit($id)
    {
        $user = User::find($id);
        $data['user'] = $user;
        return Response::json($data);
    }
    // delete
    public function destroy($id)
    {
        $data['user'] = $id;
        $user = User::find($id);
        $user->delete();
        return Response::json($data);
    }
    */
}
