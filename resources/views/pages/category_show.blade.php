@extends('layouts.page')
@section('content')
	<main class="container">
		<h1>{{$item['title']}}</h1>
    	<p>{!!$item['description']!!}</p>
	</main>
@stop