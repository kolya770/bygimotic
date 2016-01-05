@extends('layouts.admin')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny footable-loaded tablet breakpoint" data-page-size="15">
                        <thead>
                        <tr>

                            <th data-toggle="true" class="footable-visible footable-sortable footable-first-column">Название продукта<span class="footable-sort-indicator"></span></th>
                            <th data-hide="all" class="footable-sortable">Категория<span class="footable-sort-indicator"></span></th>
                            <th data-hide="phone" class="footable-visible footable-sortable">Цена<span class="footable-sort-indicator"></span></th>
                            <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">Действие</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr class="footable-even" style="display: table-row;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        {{ $item->title }}
                                    </td>

                                    <td class="footable-visible">
                                        {{ $item->category }}
                                    </td>

                                    <td class="footable-visible">
                                        {{ $item->price }}
                                    </td>

                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <a href="{{ url('admin/store/'. $item -> id . '/edit')}}">
                                                <button class="btn-white btn btn-xs">редактировать</button>
                                            </a>
                                            {!! Form::model($item, ['method' => 'DELETE', 'action' => ['Admin\StoreController@destroy', $item->id]]) !!}
                                            {!! Form::submit('удалить', ['class' => 'btn-white btn btn-xs']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" class="footable-visible">
                                <ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection