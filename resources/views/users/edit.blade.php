@extends('layouts.default')
@section('title','Update')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h3>Contact Us</h3>
            <form action="{{ Route('updateUser',$user->id) }}"  method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" placeholder="FIRST NAME"><br>
                    <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" placeholder="LAST NAME"><br>
                    <input type="address" class="form-control" name="address" value="{{$user->address}}" placeholder="Address"><br>
                    <input type="number" class="form-control" name="phone" value="{{$user->phone}}" placeholder="PHONE"><br>
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="SUBMIT">
                </div>
            </form>

        </div>
        <div class="col-sm-4">
            <h3>Google Map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7064.267133328277!2d85.3381428!3d27.71316204999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1470067274712" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@stop