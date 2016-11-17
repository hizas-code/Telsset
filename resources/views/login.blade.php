<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Telsset Login</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>

<div class="wrapper">
    <div class="container">
        <h1>Telsset</h1>

        <form class="form" action="{{url('login/')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<script src="{{url('js/index.js')}}"></script>
<script
</body>
</html>
