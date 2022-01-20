@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div><br>   

                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div><br>

                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1">
                </div><br>
            
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection