@extends('layouts.page')
@section('content')
	<main class="container">
		<h1>{{$data['title']}}</h1>
	    <ul>
	    	@foreach($data['items'] as $id => $item)
	    		<li><a href="{{URL::route($data['uri'] .'.show', $id)}}">{{$item['title']}}</a></li>
	    	@endforeach
	    </ul>
	</main>
@stop