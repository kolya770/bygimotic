<?php

?>
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bygimotic | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">BG</h1>
        </div>

        <h3>REGISTER NEW ADMIN</h3>

        <form class="m-t" role="form"  method="POST" action="/admin/register">
            {!! csrf_field() !!}

            <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="">
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Password confirmation" required="">
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
        </form>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });
    });
</script>

</body>

</html>