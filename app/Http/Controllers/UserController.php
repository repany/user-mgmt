<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{


    function index() {

        $users = User::paginate(8);
        return  view('users.list', ['users' => $users]);
    }


    function create() {
        return view('users.create');
    }

    function store( Request $request ) {

        User::create( $request->all() );
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


}
