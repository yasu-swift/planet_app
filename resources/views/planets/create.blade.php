<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
        @csrf
        <p>
            <label for="name">名前<input type="text" name="name" value="{{ old('name') }}"></label>
        </p>
        <p>
            <label for="english">名前(英名)<input type="text" name="english" id="" value="{{ old('english') }}"></label>
        </p>
        <p>
            <label for="radius">半径<input type="text" name="radius" value="{{ old('radius') }}"></label>
            
        </p>
        <p>
            <label for="weight">重量<input type="text" name="weight" value="{{ old('weight') }}"></label>
            
        </p>
        <input type="submit" value="登録">
    </form>
    {{-- 戻るボタン --}}
    <a href="/planets">戻る</a>
</body>

</html>
