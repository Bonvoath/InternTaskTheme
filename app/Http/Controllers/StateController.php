<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\State;
class StateController extends Controller
{
    public function index()
    {
        return view('states.index');
    }

    // state Lists
    public function list(Request $request)
    {
        $user = State::all();
        $this->setData($user);
        return response()->json($this->result);
    }
}
