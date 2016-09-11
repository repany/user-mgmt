@extends('layouts.default')
@section('title','Login')
@section('content')
    <div class="row">
        @if(Session::has('message'))

                {!! Session::get('message') !!}

        @endif
            <h3>Login</h3>
            <form class="form" action="{{ route('postLogin') }}"  method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="">Email</label><input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label><input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for=""></label><button class="btn-info btn">Login</button>
                </div>
            </form>

    </div>
@stop