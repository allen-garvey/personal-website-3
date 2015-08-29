@extends('layouts.page')
@section('content')
    <h1>Code</h1>
    <ul>
    	@foreach($codes as $id => $item)
    		<li><a href="{{URL::route('code.show', $id)}}">{{$item['title']}}</a></li>
    	@endforeach
    </ul>
@stop