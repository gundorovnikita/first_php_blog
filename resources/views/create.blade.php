@extends('general')

@section('content')
	<form action="/" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('POST') }}
		<br>
		name - <input name="title" type="text"  maxlength="50">
		<br>
		<br>	
		image - <input type="file" name="image">
		<br>
		<br>
		category - <input type="text" name="category">
		<br>
		<br>
		text - <input name="description" type="text" maxlength="4000">
		<br>
		<br>
		<button type="submit">submit</button>
	</form>
@endsection