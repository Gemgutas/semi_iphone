@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">

    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <h1 class="text-center">Login</h1>

    <form action="{{'/'}}" method="POST">
    {{csrf_field()}}

    <div class="form-group mb-3">
        <label for="emai-*l">Email</label>
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
    <div class="d-flex">
        <div class="flex-grow-1">
            <a href="{{'/register'}}">Sign up for an account</a>
        </div>
        <button class="btn btn-secondary px-5" type="submit">Login</button>
    </div>
    </form>



</div>

@endsection
<style>
    html {
  height: 100%;
}
body {
  background-size: cover;
  background-image:url('{{asset('/images/bc.jpeg')}}');
}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background-image:url('{{asset('/images/bc.jpeg')}}');
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
  padding: 10px 0;
  font-size: 16px;
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
