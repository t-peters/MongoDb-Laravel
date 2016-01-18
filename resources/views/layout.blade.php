<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') | Mongo Testing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}" }}>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
@if(Session::has('report'))
<p> 
{{ Session::get('report') }}
</p>

@endif

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="mainNav">
				<ul class="navbar nav-pills">
					<li> <a href="t">Home</a> </li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xm-12">
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
</div>


<button class="btn btn-large btn-primary">Button</button>
</body>
</html>