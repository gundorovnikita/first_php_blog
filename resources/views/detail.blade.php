@extends('general')

@section('content')
	<div class="post">
		@if($post->image != 'get')
			<img src="{{url('images/'.$post->image)}}">
		@else
			<img src="{{url('media/1.svg.png')}}" alt="">
		@endif
		<div class="article">{{ $post->title }}</div> 
	  	<div class="text">{{ $post->description }}</div>
	  	<hr>
	  	Относится к категории: <a href="/cat/{{$post->category->id}}" class="category_link">{{ $post->category->name }}</a>
	</div>
@endsection