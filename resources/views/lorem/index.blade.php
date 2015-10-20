@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
  <link href="/css/lorem.css" type='text/css' rel='stylesheet'>
@stop


@section('content')

@if(isset($paragraphs)) {{-- If $password is passed to the view, show the generated password --}}
<div class="row text-left">

@foreach ($paragraphs as $paragraph)
  <p>{{$paragraph}}</p><br><br>
@endforeach

</div>
@endif

<div class="row text-center">
  <h2>How many paragraphs?</h2>
    <form role="form" method='GET' action='/lorem'>
        <p>Min:1 | Max:10</p><input type='text' name='numParagraphs' size="2">
        <br><br>
        <button type='submit' class="btn btn-primary">Generate</button>

  @if(count($errors) > 0)
    <div style="padding-bottom:20px;">
        @foreach ($errors->all() as $error)
            <br><strong>{{ $error }}</strong>
        @endforeach
    </div>
  @endif

</form>
</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
