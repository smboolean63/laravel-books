<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <h1>I nostri libri</h1>
    <ul>
        @foreach ($books as $book)
        <li><a href="{{route('show', $book->id)}}">{{$book->title}}</a> - {{$book['author']}}</li>
        @endforeach
    </ul>
</body>
</html>