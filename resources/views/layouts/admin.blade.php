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
    {!! Html::style('admin/css/plugins/dropzone/dropzone.css') !!}
    {!! Html::style('admin/css/animate.css') !!}
    {!! Html::style('admin/css/style.css') !!}
    {!! Html::style('admin/css/slick.css') !!}
    {!! Html::style('admin/css/slick-theme.css') !!}
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

<script>
    $(document).ready(function(){

        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,

            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                        myDropzone.processQueue.bind(myDropzone)
                );
            }
        };

    });
</script>

        <!-- SUMMERNOTE -->
{!! HTML::script('admin/js/plugins/summernote/summernote.min.js') !!}
{!! HTML::script('admin/js/admin.js') !!}
{!! HTML::script('admin/js/plugins/slick/slick.min.js') !!}

</body>
</html>