<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bygimotic | Shop</title>
    {!! Html::style('admin/css/bootstrap.css') !!}
    {!! Html::style('admin/font-awesome/css/font-awesome.css') !!}
            <!-- Morris -->
    {!! Html::style('admin/css/plugins/morris/morris-0.4.3.min.css') !!}
    {!! Html::style('admin/css/animate.css') !!}
    {!! Html::style('admin/css/style.css') !!}
    {!! Html::style('admin/css/slick.css') !!}
    {!! Html::style('admin/css/slick-theme.css') !!}
    {!! Html::style('css/app.css') !!}

</head>

<body>
@include('partials.first-screen')
@include('partials.navbar')
@yield('content')
@include('partials.footer')
<!-- Mainly scripts -->
{!! HTML::script('admin/js/jquery-2.1.1.js') !!}
{!! HTML::script('admin/js/bootstrap.min.js') !!}
{!! HTML::script('admin/js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! HTML::script('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

        <!-- Custom and plugin javascript -->
{!! HTML::script('admin/js/inspinia.js') !!}
{!! HTML::script('admin/js/plugins/pace/pace.min.js') !!}

        <!-- DROPZONE -->
{!! HTML::script('admin/js/plugins/dropzone/dropzone.js') !!}

<script src="../js/main.js"></script>

{!! HTML::script('admin/js/plugins/slick/slick.min.js') !!}

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>



</body>
</html>