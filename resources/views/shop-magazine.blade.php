@extends('layouts.shop')

@section('content')
    <div class="content">
        <div class="container content-width">
            <div id="page-wrapper" class="gray-bg">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-4">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-imitation">
                                            [ INFO ]
                                        </div>
                                        <div class="product-desc">
                                        <span class="product-price">
                                            {{ $item->price }}
                                        </span>
                                            <small class="text-muted">{{ $item->category }}</small>
                                            <a href="#" class="product-name"> {{ $item->title }}</a>



                                            <div class="small m-t-xs">
                                                {{ $item->description }}
                                            </div>
                                            <div class="m-t text-righ">

                                                <a href="#" class="btn btn-xs btn-outline btn-primary btn-card-shop">Info <i class="fa fa-long-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection