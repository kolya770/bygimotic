<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bygimotic | Dashboard</title>
    {!! Html::style('admin/css/bootstrap.css') !!}
    {!! Html::style('admin/font-awesome/css/font-awesome.css') !!}
            <!-- Morris -->
    {!! Html::style('admin/css/plugins/morris/morris-0.4.3.min.css') !!}
    {!! Html::style('admin/css/plugins/summernote/summernote.css') !!}
    {!! Html::style('admin/css/plugins/summernote/summernote-bs3.css') !!}
    {!! Html::style('admin/css/animate.css') !!}
    {!! Html::style('admin/css/style.css') !!}
    {!! Html::style('admin/css/app.css') !!}

</head>

<body>
@include('layouts.sidebar')
<div id="page-wrapper" class="gray-bg">
    @include('layouts.sidebar-top')
    @yield('content')
</div>
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

        <!-- SUMMERNOTE -->
{!! HTML::script('admin/js/plugins/summernote/summernote.min.js') !!}
{!! HTML::script('admin/js/admin.js') !!}

</body>
</html>