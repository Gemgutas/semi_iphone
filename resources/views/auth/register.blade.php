@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">
    <h1 class="text-center">Register</h1>

    <form action="{{'/register'}}" method="POST">
    {{csrf_field()}}

    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="name" name="name" id="name" class="form-control">
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="d-flex">
        <div class="flex-grow-1">
            <a href="{{'/'}}">Already have an account</a>
        </div>
        <button class="btn btn-primary px-5" type="submit">Register</button>
    </div>
    </form>



</div>

@endsection
<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background-size: cover;
  background-image:url('{{asset('/images/bl.jpg')}}');
}
.login-box {
  position: absolute;
  top: 53%;
  left: 50%;
  width: 500px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background-image:url('{{asset('/images/bl.jpg')}}');
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}
.login-box .user-box {
  position: relative;
}
.login-box .user-box input {
  width: 100%;
  padding: 5px 0;
  font-size: 12px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
</style>
