@extends('layout.site')

@section('content')
    <div class="content">

        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 first-block center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arc
                                itecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                            <button class="btn btn-default read-all-btn center-block">Читать все</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 second-block">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                            <div class="col-xs-12 col-sm-5">
                                <
                                {{--<video class="video center-block" src="https://www.youtube.com/embed/DzRTKNM0meU"  controls autobuffer>--}}
                                    {{--<p> Try this page in Safari  4! Or you can <a  href="https://www.youtube.com/embed/DzRTKNM0meU">download the  video</a> instead.</p>--}}
                                {{--</video>--}}
                                <iframe  class="video center-block" src="https://www.youtube.com/embed/aQ-2JkcdbQA" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arc
                                    itecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                    sit aspernatur aut odit aut fugit,</p>
                            </div>

                                <button class="btn btn-default read-all-btn center-block">Читать все</button>


                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 third-block">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
                            <div class="col-xs-12 col-sm-4 center-image">
                                <img src="img/image.png">
                            </div>
                            <div class="col-xs-12 col-sm-4 center-image">
                                <img src="img/image.png">
                            </div>
                            <div class="col-xs-12 col-sm-4 center-image">
                                <img src="img/image.png">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn btn-default read-all-btn center-block">Читать все</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop