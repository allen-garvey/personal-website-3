@extends('layouts.page')
@section('content')
	<header class="jumbotron">
		<div class="container clearfix">
			<hgroup>
				<h1 class="site_title">Allen Garvey</h1>
				<h2 class="site_subtitle">Front-end web developer for the 21<sup>st</sup> century</h2>
			</hgroup>
			<div class="image_comparison_parent" id="comparison">
				<figure>
					<div class="image_comparison_container">
						{!!HTML::image('images/portraits/allen-garvey-art-portrait.png', 'Portrait of Allen Garvey')!!}
					</div>
					<div class="image_comparison_container divisor" id="divisor">
						{!!HTML::image('images/portraits/allen-garvey-code-portrait.png', 'Portrait of Allen Garvey')!!}
					</div>
				</figure>
				<input type="range" min="0" max="100" value="50" id="slider">
			</div>
			<div class="lead">
				<p>Hi, I'm Allen. I do blank and blank.</p>
			</div>
		</div>
	</header>
	<section class='container categories'>
		<article class="category">
			<a href="{{URL::route('code.index')}}">
				<div>
					<h2>Code</h2>
					<p>Apps I've made.</p>
				</div>
			</a>
		</article>
		
		<article class="category">
			<a href="{{URL::route('design.index')}}">
				<div>
					<h2>Design</h2>
					<p>Things I've designed.</p>
				</div>
			</a>
		</article>
	</section>
@stop