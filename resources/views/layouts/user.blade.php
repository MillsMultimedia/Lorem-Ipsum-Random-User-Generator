@extends('layouts.master')


@section('title')
    The Web Developer's Friend | User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Fake User Generator</h1>
    
    <form method='POST' action='/user'>
    	<lable>How many users? (max 20) </lable>
    	<input type='text' name='users'><br>

    	<h4>Options</h4>

    	<lable>Birthday: </lable>
    	<input type='checkbox' name='birthday'><br>

    	<lable>Email: </lable>
    	<input type='checkbox' name='email'><br>

    	<lable>Password: </lable>
    	<input type='checkbox' name='password'><br>


    </form>

    <p>GENERATED TEXT GOES HERE</p>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop