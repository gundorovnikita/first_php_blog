@extends('general')

@section('content')
<h1>get</h1>
	<form>
		<input type="text" name="title"  maxlength="50">
		<input type="text" name="description" maxlength="4000">
		<button type="submit">submit</button>
	</form>
@endsection