@extends('layouts.default')
@section('title','Form')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h3>Contact Us</h3>
            <form action="{{ url('users') }}"  method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="first_name" placeholder="FIRST NAME"><br>
                    <input type="text" class="form-control" name="last_name" placeholder="LAST NAME"><br>
                    <input type="address" class="form-control" name="address" placeholder="Address"><br>
                    <input type="number" class="form-control" name="phone" placeholder="PHONE"><br>
                    <input type="email" class="form-control" name="email" placeholder="Email"><br>
                    <input type="password" class="form-control" name="password" placeholder="Password"><br>
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