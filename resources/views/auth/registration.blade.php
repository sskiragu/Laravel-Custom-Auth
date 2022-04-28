<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

<div class="container">
    <div class="center-login">
      <h1>Register here</h1>
    <form action="{{route('register-user')}}" method="post">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" aria-describedby="nameHelp">
    <span class="text-danger">@error('name') {{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" aria-describedby="emailHelp">
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
<h6>If you already have an account <a href="login">Login</a></h6>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>