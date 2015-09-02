@extends('layouts.page')
@section('content')
	<header class="jumbotron">
		<div class="container clearfix">
			<hgroup>
				<h1 class="site_title">Allen Garvey</h1>
				<h2 class="site_subtitle">Front-end web developer for the 21<sup>st</sup> century</h2>
			</hgroup>
			{!!HTML::image('images/allen-garvey-portrait-composite.png', 'Portrait of Allen Garvey')!!}
			<div class="lead">
				<p>Hi, I'm Allen. I do blank and blank.</p>
			</div>
		</div>
	</header>
		<?php //could also use URL::asset('images/allen-garvey-portrait-composite.png') to get path ?>
	<section class='container categories'>
		<article>
			<a href="{{URL::route('code.index')}}">
				<div>
					<h2>Code</h2>
					<p>Apps I've made.</p>
				</div>
			</a>
		</article>
		
		<article>
			<a href="{{URL::route('design.index')}}">
				<div>
					<h2>Design</h2>
					<p>Things I've designed.</p>
				</div>
			</a>
		</article>
	</section>
@stop