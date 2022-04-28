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
    <h1>Welcome to dashboard!</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="logout">Logout</a></td>
            </tr>
        </tbody>
    </table>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>