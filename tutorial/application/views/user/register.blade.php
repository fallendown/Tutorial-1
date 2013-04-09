@layout('master')
@section('content')

<div class="row">
	<div class="span4 offset4">
		<div class="well">
			<legend>Please Register</legend>
			{{ Form::open('register') }}
			{{ Form::text('username', '', array('class' => 'span3', 'placeholder' => 'Username')) }}
			{{ Form::text('email', '', array('class' => 'span3', 'placeholder' => 'Email')) }}
			{{ Form::password('password', array('class' => 'span3', 'placeholder' => 'Password')) }}
			{{ Form::submit('Register', array('class' => 'btn btn-warning')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>

@endsection