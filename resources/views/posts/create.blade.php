<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>
<body>
    <a href="{{route('posts.index')}}">Back Index</a>


    <form action="{{route('posts.store')}}" method="post">
        @csrf
        T: <input type="text" name="title"> <br>
        C: <textarea name="content" cols="20" rows="10"></textarea>
        <button type="submit">Go</button>
    </form>
</body>

</html>