@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @if(null!==$title)
        <h1 class="m-0 text-dark">{{$title}}</h1>
    @endif
@stop

@section('content')
    {{$slot}}
@stop
