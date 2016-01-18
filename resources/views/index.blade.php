@extends('layout')

@section('title', 'Home Page') 

@section('content')
<div class="row">
	<div class="jumbotron">
		<h1>This is the Life</h1>
	</div>
</div>
<table class="table table-striped">
	@foreach($all as $each)
		<tr>
		<td> {{$each->_id}} </td>
		<td>{{ $each->name }}</td>
		<td>{{ $each->email }}</td>
		<td>{{ $each->username }}</td>
		<td>{{ $each->phone }}</td>
		<td><a {{ 'href='.url('t/'.$each ->_id)}} >Edit</a></td>
		</tr>

	@endforeach
</table>
	
</div>
<p>
	<a {{ 'href='.url('t/create')}}>Add More</a>
</p>

@endsection
