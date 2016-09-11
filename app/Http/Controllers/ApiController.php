<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    function index() {

        return User::all();
    }

    function show( User $user ) {

        return $user;
    }


    function update( Request $request ) {

        User::create( $request->all() );
        return [
            'status' => 'success',
            'message' => 'User Successfully created'
        ];
    }

    function me() {

        return Auth::user();
    }
}
