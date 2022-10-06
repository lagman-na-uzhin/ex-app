<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>
<body>
    <a href="{{route('posts.index')}}">Back Index</a>


    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf

        @method('PUT')
        T: <input type="text" name="title" value="{{$post->title}}"> <br>
        C: <textarea name="content" cols="20" rows="10">{{$post->content}}</textarea>
        <button type="submit">Update</button>
    </form>
</body>

</html>