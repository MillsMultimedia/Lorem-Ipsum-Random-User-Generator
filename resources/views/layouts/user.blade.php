@extends('layouts.master')


@section('title')
    The Superhero Starter Kit  |  Secret Identity Creator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    
@stop


@section('content')
    <div class='col-xs-12 col-sm-6 pull-right'><img src='img/heroes.jpg' style='width:100%;'/></div>

    <div class='col-xs-12 col-sm-6' id='main'>
        <h1>Secret Identity Generator</h1>
        
        <form method='POST' action='/user'>
        	<input type='hidden' name='_token' value='{{ csrf_token() }}'>

            <div class='form-group'>
            	<label>How many users? (max 12) </label>
            	<input type='text' name='users' class='form-control' id='users'>

                <!-- Display validation errors -->
                @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <small style='color:#f00;'>{{$error}}</small><br>
                    @endforeach
                @endif
            </div>

        	<h4>Options</h4>

            <div class='form-group'>
            	<label class='options'>Birthday: 
            	<input type='checkbox' name='birthday'>
                </label>

            	<label class='options'>Email:
            	<input type='checkbox' name='email'>
                </label>

            	<label class='options'>Secret Password: 
            	<input type='checkbox' name='password'>
                </label>

            	<label class='options'>Avatar: 
            	<input type='checkbox' name='avatar'>
                </label>
            </div>

            <input type='submit' value='User Me' class='btn btn-primary'>
        </form>
    </div>
    <div class='clearfix'></div>

    <div class='row'>
        <div class='container'>
            @if(isset($users))
                @foreach($users as $user)
                    <div class='col-md-5 col-xs-12 user-card'>
                        @if(isset($request['avatar']))
                            <img src='{{ $user['avatar'] }}' class='col-xs-6 pull-left'>
                        @endif
                        
                        <div class='col-xs-6'>
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

                        </div>
                    </div>

                @endforeach
            @endif
        </div>
    </div>

    <footer class='container' id='footer'>
        &copy; {{ date('Y') }}  |   <a href='/'>Back to main</a>
    </footer>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop