<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
</head>
<body>  
    <div class="head">
        <div class="container">
            <a href="{{url('/')}}">Lists</a>
            <a href="{{url('create')}}">Create</a>
            <a href="{{url('get')}}">get</a>
            <a href="{{url('category')}}">Category</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>