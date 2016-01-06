@extends('layouts.admin')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Товар</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Картинки для товара</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                {!! Form::open(array(
                                    'action' => 'Admin\StoreController@store',
                                    'class' => 'form-horizontal',
                                    'enctype' => 'multipart/form-data',
                                    'id' => 'product-text-data'
                                    ))
                                !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Название товара:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('title', null, ['id' => 'product-name', 'class' => 'form-control', 'placeholder'=>'Медвежонок ТЕДИ']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Описание:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', null, ['id' => 'product-desc', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('price', 'Цена:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('price', null, ['id' => 'product-price', 'class' => 'form-control', 'placeholder'=>'160.00']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category', 'Категория:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::select('category',
                                            array(
                                                'Игрушки' => 'Игрушки',
                                                'Одежда' => 'Одежда',
                                                'Канцтовары' => 'Канцтовары',
                                                'Для малышей' => 'Для малышей',
                                                'Обувь' => 'Обувь'
                                            ),
                                            null,
                                            ['class' => 'form-control'] ) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('title-meta', 'Мета-тег title :', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('title-meta', null, ['id' => 'meta-title', 'class' => 'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description-meta', 'Мета-тег description:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('description-meta', null, ['id' => 'meta-desc', 'class' => 'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('keywords-meta', 'Мета-тег keywords:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('keywords-meta', null, ['id' => 'meta-keywords', 'class' => 'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                    {!! Form::open(['action'=> 'Admin\StoreController@store',
                                        'enctype' => 'multipart/form-data',
                                        'method' => 'POST',
                                        'files'=>'true',
                                        'id' => 'my-dropzone',
                                        'class' => 'dropzone'
                                        ])
                                    !!}

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {!! Form::button('Добавить товар', ['class' => 'btn btn-lg', 'id' => 'add-product']) !!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function(){

            Dropzone.autoDiscover = false;

            var myDropzone = new Dropzone('.dropzone', {
                paramName: "files",
                //maxFilesize: 3.0,
                maxFiles: 3,
                parallelUploads: 10000,
                uploadMultiple: true,
                autoProcessQueue: false,

                sending: function(file, xhr, formData) {

                    $("form#product-text-data :input").each(function() {
                        var input = $(this);

                        formData.append(input.attr('name'), input.val());
                    });
                }
            });

            $('#add-product').on('click', function () {
                myDropzone.processQueue();


            });

        });
    </script>
@endsection