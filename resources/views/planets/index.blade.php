<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>惑星一覧</h1>
    <ul>
        @foreach ($planets as $planet)
            <a href="/planets/{{ $planet->id }}">
                <li>{{ $planet->name }}</li>
            </a>
        @endforeach
    </ul>
    <a href="/planets/create">出品する</a>
</body>

</html>
