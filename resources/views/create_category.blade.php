@extends('general')

@section('content')
	<form action="/category" method="post">
		{{ csrf_field() }}
		{{ method_field('POST') }}
		<br>
		name - <input name="name" type="text" maxlength="50">
		<br>
		<br>	
		<button type="submit">submit</button>
	</form>
@endsection