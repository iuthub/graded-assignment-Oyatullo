@extends('app')
@section('content')
    <form action="post">
        <div class="form-group">
            <label for="formGroupExampleInput">User Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
