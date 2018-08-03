<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MstState;
use Validator;
use Auth;

use Response;
class StateController extends Controller
{
    public function index()
    {
        return view('states.index');
    }

    // state Lists
    public function list(Request $request)
    {
        $states = MstState::all();
        $this->setData($states);
        return response()->json($this->result);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), MstState::validateState());
        if ($validator->fails()){
            $this->invalid($validator);
        }else {
            $states = new MstState();
            $states->name = $request->name;
            $states->save();
            $this->setData($states);
        }
        return response()->json($this->result);
    }
    // find id
    public function findId($id){
        $states = MstState::find($id);
        $this->setData($states);

        return response()->json($this->result);
    }
    // update state
    public function update(Request $request)
    {
        $states = MstState::find($request->id);
        $states->name = $request->name;
        $states->save();
        $this->setData($states);

        return response()->json($this->result);
    }
    // delete
    public function destroyState($id)
    {
        $states = MstState::find($id);
        $this->setData($states);
        $states->delete();
        return response()->json($this->result);
    }

}
























































//
//public function store(Request $request)
//{
//    $validator = Validator::make($request->all(), MstState::validateState());
//    if ($validator->fails()){
//        $this->invalid($validator);
//    }else{
//        $states = new MstState;
//        $states->Name = $request->input('Name');
//        $this->setData($states);
//        $states->save();
//    }
//
//    return response()->json($this->result);
//}
//public function edit($id)
//{
//    $states = MstState::find($id);
//    $this->setData($states);
//    return response()->json($this->result);
//}
//// update data
//public function update(Request $request)
//{
//    $states = MstState::find($request->id);
//    $states->Name = $request->Name;
//    $this->setData($states);
//    $states->save();
//
//    return response()->json($this->result);
//}
