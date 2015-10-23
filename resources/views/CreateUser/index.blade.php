@extends('layouts.master')


@section('title')
    Random User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')

@if(isset($users)) {{-- If $users is passed to the view, show the generated password --}}

@foreach ($users as $user)
<p>
  @foreach ($user as $key => $value)
    @if($key == 'name')
      <h4>Name: {{$value}}</h4>
    @elseif($key == 'email')
      <p>Email: <a href="mailto:{{$value}}">{{$value}}</a><br>
    @elseif($key == 'profile')
      <p>Profile: {{$value}}</p>
    @endif
	@endforeach
  <br>
@endforeach

@endif

<div class="row text-center">
<h1> Generate Random User </h1>
<form role="form" method='GET' action='/createuser'>
  How many? <input type='text' name='numUsers' size=4><br><br>
  Extras:<br>
  Birthdate: <input type='checkbox' name='bday'><br>
  Email Address: <input type='checkbox' name='email'><br>
  Mailing Address: <input type='checkbox' name='address'><br>
  Phone Number: <input type='checkbox' name='phone'><br>
  <button type='submit' class="btn btn-primary">Generate Users</button>

  @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
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
