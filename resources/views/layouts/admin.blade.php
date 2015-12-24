<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Dashboard v.4</title>
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
@include('admin.sidebar')
<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>

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

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            onkeyup: function(e) {
                $('#lawsContent').val($('#summernote').code());
            }
        });
        $('.note-editable').addClass('style-editor');
    });

</script>

</body>
</html>