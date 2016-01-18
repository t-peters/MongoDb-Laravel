<!DOCTYPE html>
<html>
<head>
	<title>Showing</title>
</head>
<body>

@if(Session::has('report'))
	<p>
		{!! Session::get('report') !!}
	</p>

@endif
<table>
	<th colspan="2">Name</th>
	<th colspan="2">Email</th>
	<th>Phone</th>
	<th>Username</th>
	<th>Edit</th>

	
		<tr>
			<td>{{$person->name}}</td>
			<td></td>
			<td>{{$person->email}}</td>
			<td></td>
			<td>{{$person->phone}}</td>
			<td>{{$person->username}}</td>
			<td><a {{ 'href='.url('t/'.$person->_id.'/edit')}}>Edit</a></td>
		</tr>

	
</table>
</body>
</html>