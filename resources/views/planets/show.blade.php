<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <b>名前：{{ $planet->name }}</b><br>
    <b>名前(英名)：{{ $planet->english }}</b><br>
    <b>半径：{{ $planet->radius }}</b><br>
    <b>重量：{{ $planet->weight }}</b><br>

    {{-- 戻るボタン --}}
    <a href="/planets">戻る</a>
</body>

</html>
