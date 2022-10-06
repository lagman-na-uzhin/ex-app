<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>
<body>
    <a href="{{route('posts.index')}}">Back Index</a>

    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>

    <a href="{{route('posts.edit', $post->id)}}">Edit</a>

</body>

</html>