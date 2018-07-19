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
    // get user
    public function post()
    {
        $posts = User::orderBy('title' , 'desc')->paginate(5);
        return view('pages.post')->with('posts', $posts);
    }
    // create
    public function showCreate()
    {
        return view('usersManagements.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|unique:posts|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);
        $post = new User;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->password = $request->input('password');
        $post->save();
        return Response::json($post);   
    }
    // update
    public function update()
    {
        return view('usersManagements.user');
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
