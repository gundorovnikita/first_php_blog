@extends('general')

@section('content')


<h1>{{$category->name}}</h1>

@foreach($category->post as $post)

	<div class="post">
            <div class="article"><a href="/{{ $post->id }}" class="black_link">{{ $post->title }}</a></div>         
    </div>

@endforeach

@endsection