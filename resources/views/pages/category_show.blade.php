@extends('layouts.page')
@section('content')
    <h1>{{$item['title']}}</h1>
    <p>{!!$item['description']!!}</p>
@stop