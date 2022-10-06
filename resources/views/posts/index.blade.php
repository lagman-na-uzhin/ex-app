<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>index</title>
<body>
    <h1>MMC</h1>
    <a href="{{route('posts.create')}}">GO CREATE</a>



    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->content}}</p>



        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
        @csrf 
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endforeach





</body>

</html>