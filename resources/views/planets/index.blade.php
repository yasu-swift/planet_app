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
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英名)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->english }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td>
                    <!-- 詳細へジャンプする -->
                    <a href="/planets/{{ $planet->id }}">詳細</a>
                </td>
                <td>
                    <!-- 惑星のidを元に編集ページへ遷移する -->
                    <a href="/planets/{{ $planet->id }}/edit">編集</a>
                </td>
                <td>
                    <!-- 削除ボタン -->
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する"
                            onclick="if(!confirm('{{ $planet->name }}を本当に削除しますか？')){return false}">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <!-- 新規登録画面へジャンプする -->
    <a href="/planets/create">新規登録</a>
</body>

</html>
