@extends('layouts.master')


@section('title')
    The Web Developer's Friend
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Choose your adventure</h1>
    <a href="/lorem"><button class="btn btn-primary">Give Me Some Lorem Ipsum</button></a>
    <a href="/user"><button class="btn btn-warning">Give Me A Fake User</button></a>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop