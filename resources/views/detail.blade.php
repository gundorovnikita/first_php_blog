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

		<h4>Оставить комментарий:</h4>
		
	  	<form action="/comment/{{$post->id}}" method="post">
		{{ csrf_field() }}
		{{ method_field('POST') }}
		text - <input name="text" type="text"  maxlength="60">
		<br>
		<br>	
		<button type="submit">submit</button>
		</form>

	  	<h3>Comments:</h3>

		@foreach($post->comments as $comment)

			<div class="post">
				<div class="article">{{ $comment->user->name }}</div>
            	<div class="text">{{ $comment->text }}</div>         
    		</div>

		@endforeach

	</div>
@endsection