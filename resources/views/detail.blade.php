@extends('general')

@section('content')
	<div class="post">
		@if($post->image != 'get')
			<img src="{{url('images/'.$post->image)}}" width="200px">
		@else
			<img src="{{url('media/1.svg.png')}}" alt="" width="200px">
		@endif
		<div class="article">{{ $post->title }}</div> 
		<div class="article">{{ $post->category->name }}</div>
	  	<div class="text">{{ $post->description }}</div>
	</div>
@endsection