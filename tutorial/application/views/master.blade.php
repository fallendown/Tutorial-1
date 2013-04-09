<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/jquery.js') }}
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			{{ HTML::link('/', 'Login Tutorial', array('class' => 'brand')) }}
			<ul class="nav pull-right">
				@if(Auth::user())
					<li>{{ HTML::link('logout', 'Logout') }}</li>
				@else
					<li>{{ HTML::link('login', 'Login')}}</li>
				@endif
			</ul>
		</div>
	</div>
	<div class="container">
		@include('plugins.status')
		@yield('content')
	</div>
	
</body>
</html>