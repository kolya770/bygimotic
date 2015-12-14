@extends('layout.site')

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 contact center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>Контакты</h2>
                            <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                                <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                                <p class="info">ООО “Йцукен”, г. Киев,<br />
                                    ул. Ленина 1а, оф. 405<br /><br />
                                    +3 (097) 097 97 97<br />
                                    +3 (097) 097 97 97<br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 map-content">
                        <button class="btn btn-default write-btn center-block">Написать нам</button>
                        {{--<div id="map_canvas"></div>--}}
                        {{--<img src="img/map.png">--}}
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop