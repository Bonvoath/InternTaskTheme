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
     // update
     public function edit($id)
     {
        $user = User::find($id);
        $this->setData($user);
        return response()->json($this->result);
     }

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
            $this->setData($user);
            $user->save();
        }
        return response()->json($this->result); 
    }
    // update data
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), User::validateUsers());
        if ($validator->fails()){
            $this->invalid($validator);
        }else{
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $this->setData($user);
            $user->save();
        }
        return response()->json($this->result); 
    }
    // delete
    public function destroy($id)
    {
        $user = User::find($id);
        $this->setData($user);
        $user->delete();
        return response()->json($this->result);
    }

}
