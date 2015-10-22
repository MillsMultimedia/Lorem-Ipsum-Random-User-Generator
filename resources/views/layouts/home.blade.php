@extends('layouts.master')


@section('title')
    The Superhero Starter Kit
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
 <style>
    body { 
	  background: url('img/bkg.jpg') no-repeat center center fixed; /*images from wallpaperup.com & blog.storplaceselfstorage.com */
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
</style>
@stop


@section('content')
	<div class='container text-center' id='main'>
	    <h1 id='intro-header'>Become a superhero</h1>
	    <a href='/lorem'><button class='btn btn-primary pull-left'>I Need A Fake Backstory</button></a>
	    <a href='/user'><button class='btn btn-success pull-right'>I Need A Secret Identity (or 12)</button></a>
	</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop