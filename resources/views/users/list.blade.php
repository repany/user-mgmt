@extends('layouts.default')
@section('title')
    User List
@stop
@section('content')
    <div class="row">
        <div class="col-sm-12">
            {{ csrf_field() }}
            <a class="btn btn-primary" href="{{route('createUser')}}">Add User</a>
            <table class="table table-sm">
                <h2>USER LIST</h2>
                <tr>
                   <!-- <th>First Name</th>
                    <th>Last Name</th>-->
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @foreach( $users as $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><a href="{{ /*url('users/'.$user->id ."/edit")*/ route('editUser',$user->id) }}">Edit</a>&nbsp;
                            <button class="btn btn-danger delete-user" data-id="{{ $user->id }}" data-random="this is a test" title="deletebuttn">Delete</button></td>

                    </tr>
                @endforeach
            </table>
            {!! $users->links() !!}
        </div>
    </div>
@stop

