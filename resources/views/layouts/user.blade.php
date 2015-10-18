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
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>

    	<lable>How many users? (max 20) </lable>
    	<input type='text' name='users'><br>

    	<h4>Options</h4>

    	<lable>Birthday: </lable>
    	<input type='checkbox' name='birthday'><br>

    	<lable>Email: </lable>
    	<input type='checkbox' name='email'><br>

    	<lable>Password: </lable>
    	<input type='checkbox' name='password'><br>

    	<lable>Avatar: </lable>
    	<input type='checkbox' name='avatar'><br>

    	<input type='submit' value='User Me'>
    </form>

    @if(isset($users))
        @foreach($users as $user)
            <strong>{{ $user['name'] }}</strong><br>
                
            @if(isset($request['birthday']))
                {{ $user['birthday'] }}<br>
            @endif

            @if(isset($request['email']))
                {{ $user['email'] }}<br>
            @endif

            @if(isset($request['password']))
                {{ $user['password'] }}<br>
            @endif

            <br>

        @endforeach
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop