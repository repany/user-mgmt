<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function index() {
        $users = User::with('role')->paginate(10);
        return  view('users.list', ['users' => $users]);
    }


    function create() {
        $roles = Role::all();
        return view('users.create',['roles' => $roles ]);
    }

    function store( Request $request ) {

        $user = $request->all();
        $user['auth_token'] = md5( uniqid( str_random()) );
        User::create( $user );

        return redirect()->route('userList');

    }

    function edit( User $user ){
        return view('users.edit',['user'=>$user]);

    }

    function update(Request $request, $id){
    $users = User::find($id);
    $users->update($request->all());
        return redirect()->route('userList');
    }

    function delete($id){

        $user = User::find($id);
        $user->delete();
        return ["status" => "success", "message" => "User Successfully Deleted"];
    }

    function login(){

        return view('users.login');
    }

    function postLogin(Request $request){

        if( Auth::attempt($request->only('email','password'))){

            return redirect()->intended(route('userList'));
        }

        return redirect()->route('login')->with('message','<div class="alert alert-danger">Login Failed</div>');
    }

    function logout(){

        Auth::logout();
        return redirect()->route('login');
    }

}
