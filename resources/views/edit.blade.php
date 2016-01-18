@extends('layout')

@section('title','Edit Page')


@section('content')
	<form class="form" action= {{ url("/t/".$person->_id) }} method="POST">
		<input type='text' name="name" value='{{$person->name}}'>
		<input type='email' name="email" value='{{$person->email}}'>
		<input type='text' name="phone" value='{{$person->phone}}'>
		<input type='text' name="username" value='{{$person->username}}'>
		<input type='hidden' name="_method" value='put'>
		<input type='submit' name="submit" value='Edit'>
	</form>
@endsection


