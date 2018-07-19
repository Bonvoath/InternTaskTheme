<?php
namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Response;
use App\User;
use Validator;
class UserController extends Controller
{
    public function index()
    {
        return view('usersManagements.userLists');   
    }
    public function getUser()
    {
        $user = User::all();
        $data['users'] = $user;
        return Response::json($data);
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
}
