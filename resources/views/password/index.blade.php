@extends('layouts.master')


@section('title')
  xkcd Password Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
  <link href="/css/xkcd.css" type='text/css' rel='stylesheet'>
@stop


@section('content')

{{-- This file is one view for both the form and the generated password. The @if below controls what is seen.--}}

@if(isset($password)) {{-- If $password is passed to the view, show the generated password --}}

<div class="row text-center">
  <p class="password">
    <?php
		  // Prints out the xkcd style password with the requested parameters. NOTE: Used php syntax rather than blade to remove extra whitespace.
      foreach ($password as $word)
		  {
			     echo $word;
		  }
    ?>
	</p>

{{-- BLADE syntax.
<div class="row text-center">
  <p class="password">
		@foreach ($password as $word)
  		{{$word}}
      @endforeach
  </p>
--}}
@endif

<div class="row text-center">
  <h1> Generate xkcd style password </h1>
  <form method='GET' action='/password'>
      			<p>

      				<label for='number_of_words'># of Words</label>
      				<input maxlength=1 size="5" type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
      				<br>

      				<input type='checkbox' name='add_number' id='add_number' >
      				<label for='add_number'>Add a number</label>
      				<br>
      				<input type='checkbox' name='add_symbol' id='add_symbol' >
      				<label for='add_symbol'>Add a symbol</label>
      			</p>
      <input type='submit' class='btn btn-primary' value='Generate'>
    </form>

  @if(count($errors) > 0)
    <div style="padding-bottom:20px;">
        @foreach ($errors->all() as $error)
            <br><strong>{{ $error }}</strong>
        @endforeach
    </div>
  @endif

</div>


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
