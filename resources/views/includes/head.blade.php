<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Allen Garvey | Front-End Web Developer and Designer</title>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css' />
        {!!HTML::style('stylesheets/style.css')!!}
        @if(preg_match("/\bhome\b/i", $data['body_class']))
            {!! '<meta property="og:image" content="'. URL::asset('images/allen-garvey-portrait-composite.png') . '" />' !!}
        @endif
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body class="{{$data['body_class']}}">
    	<div class="total">{{-- required to place footer at bottom --}}
            <div class="nav_bar">
        		<nav class='nav container'>
        			<a href="{{URL::route('home', '')}}" class="brand">Allen Garvey</a>
    				<ul>
    					<li><a href="{{URL::route('code.index')}}">Code</a></li>
    					<li><a href="{{URL::route('design.index')}}">Design</a></li>
    				</ul>
        		</nav>
        	</div>