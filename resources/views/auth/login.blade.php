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
      <h1>Login here</h1>
    <form action="{{route('login-user')}}" method="post">
    @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp">
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="password">
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<h6>If you don't have an account <a href="registration">Sign up</a></h6>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>