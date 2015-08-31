@extends('layouts.page')
@section('content')
	<main class="container">
		<h1>{{$data['item']['title']}}</h1>
    	<p>{!!$data['item']['description']!!}</p>
	</main>
@stop