<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>惑星情報登録</h1>
    <form action="/planets" method="POST">
        @csrf
        <p>名前 <input type="text" name="name_ja" value="{{ old('name_ja') }}"></p>
        <p>名前(英語) <input type="text" name="name" value="{{ old('planet->name') }}"></p>
        <p>半径 <input type="number" name="radius" value="{{ old('planet->radius') }}"></p>
        <p>重量 <input type="number" name="weight" value="{{ old('planet->weight') }}"></p>
        <input type="submit" value="登録">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>