@if(isset($errors) && count($errors->all()) > 0)
<div class="alert alert-error">
	<a class="close" href="#" data-dismiss="alert">x</a>
	<h4 class="alert-heading">Uh Oh!</h4>
	<ul>
		@foreach ($errors->all('<li>:message</li>') as $message)
		{{ $message }}
		@endforeach
	</ul>
</div>
@endif