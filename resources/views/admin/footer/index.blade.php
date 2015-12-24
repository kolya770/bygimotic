@extends('layouts.admin')

@section('content')
    @foreach($footers as $footer)
        {{ $footer -> tel1 }}
    @endforeach

@stop
