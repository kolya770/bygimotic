@extends('layout.site')

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 categories center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>Категории товаров</h2>
                        </div>
                    </div>
                    <div class="col-xs-12 image-click">
                        <div class="col-xs-12 col-sm-6 padding background-1">
                            <img src="img/game.png">
                            <div class="centred">
                                <p class="font-sz">Игрушки</p>
                                <hr class="center-block">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 padding background-1">
                            <img src="img/dress.png">
                            <div class="centred">
                                <p>Одежда</p>
                                <hr class="center-block width">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 padding background-1">
                            <img src="img/kids.png">
                            <div class="centred">
                                <p>Для малышей</p>
                                <hr class="center-block width">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 padding background-2">
                            <img src="img/stationery.png">
                            <div class="centred stationery-block">
                                <p>Канцтовары</p>
                                <hr class="center-block width">
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                <button class="btn btn-danger stationery-btn">Читать все</button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 padding background-1">
                            <img src="img/shoes.png">
                            <div class="centred">
                                <p>Обувь</p>
                                <hr class="center-block width">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop