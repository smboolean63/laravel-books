<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('homepage')}}">Torna all'home page</a>
    <h1>{{$book->title}}</h1>
    <h2>{{$book->author}}</h2>
</body>
</html>