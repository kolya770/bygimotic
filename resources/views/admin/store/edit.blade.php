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

                                {!! Form::model($item,['method' => 'PATCH', 'action' => ['Admin\StoreController@update', $item->id],
                                    'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Название товара:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Описание:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'summernote']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('price', 'Цена:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
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
                                    {!! Form::label('title-meta', 'Мета-тег название товара:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('title-meta', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description-meta', 'Мета-тег описания:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('description-meta', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('keywords-meta', 'Мета-тег ключевых слов:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('keywords-meta', null, ['class' => 'form-control',]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        {!! Form::submit('Обновить товар', ['class' => 'btn btn-lg']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                {!! Form::open(['action'=> 'Api\ImageController@dropzoneUploadImages', 'enctype' => 'multipart/form-data','method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                                <div class="dz-message" style="height:200px; text-align: center;">
                                    Нажмите сюда, или положите файлы
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dropzone-previews"></div>
                                <button type="submit" class="btn btn-success" id="submit">Save</button>
                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection