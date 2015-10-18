@extends('layouts.master')


@section('title')
    The Web Developer's Friend | Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Lorem Ipsum Generator</h1>
    
    <form method='POST' action='/lorem'>
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>

    	<lable>Number of Paragraphs:</lable> 
    	<input type='text' name='paragraphs'><br>

        <!-- Display validation errors -->
    	@if(count($errors) > 0)
    		@foreach ($errors->all() as $error)
	    		<small style="color:#f00;">{{$error}}</small><br>
	    	@endforeach
	    @endif

    	<input type='submit' name='submit' value='Ipsum Me'>
    </form>

    <!-- Display lorem ipsum output -->
    <!-- wrapped in div for use with copy to clipboard javascript -->
    <div id='output'>
    @if(isset($paragraphs))
        @foreach($paragraphs as $paragraph)
            <p>
                {{$paragraph}}
            </p>
        @endforeach
    @endif
    </div>

    @if(isset($paragraphs))
        <button id='copyText' class='btn btn-primary'><span class='glyphicon glyphicon-copy' aria-hidden='true' style='font-size: 2em;'></span></button> Copy to Clipboard (&lt;p&gt; tags included)
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
<input type='hidden' id='toCopy'>
<script>

    /*******************************************************************************************
     *   Copy to Clipboard Function
     *   derived from explaination at: 
     *   http://stackoverflow.com/questions/400212/how-do-i-copy-to-the-clipboard-in-javascript
    *******************************************************************************************/
    $('#copyText').click(function() {
        
        //add a text area
        var textArea = document.createElement('textarea');
        document.body.appendChild(textArea);

        //add text to new textarea
        $('textarea').val( $('#output').html() );

        //select and copy textarea
        textArea.select();
        document.execCommand('copy');

        //delete textarea
        document.body.removeChild(textArea);

    });
</script>
@stop