@extends('general')

@section('content')
<div class="string">
	@foreach ($category as $category)
		<a href="cat/{{$category->id}}" class="string_link">{{$category->id}}</a>
	@endforeach
</div>
    @foreach ($post as $post) 
        <div class="post">
            <div class="article"><a href="{{ $post->id }}" class="black_link">{{ $post->title }}</a></div> 
            <form action="{{$post->id}}" method="post">
            	{{ csrf_field() }}
            	<button type="submit" class="more">delete</button>
            </form>
            
        </div>
        @endforeach
@endsection
