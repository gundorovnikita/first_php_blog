@extends('general')

@section('content')
<div class="category">
	@foreach ($category as $category)
		<a href="cat/{{$category->id}}" class="category_link">{{$category->id}}</a>
	@endforeach
</div>
<hr>
    @foreach ($post as $post) 
        <div class="post">
            <div class="article"><a href="/post/{{ $post->id }}" class="black_link">{{ $post->title }}</a></div> 
            <form action="/post/{{$post->id}}" method="post">
            	{{ csrf_field() }}
            	<button type="submit" class="more">delete</button>
            </form>
            
        </div>
        @endforeach
@endsection
