<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
    <h1>惑星情報編集</h1>
    <body><form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>名前 <input type="text" name="name_ja" value="{{ old('name_ja', $planet->name_ja) }}"></p>
        <p>名前(英語) <input type="text" name="name" value="{{ old('name', $planet->name) }}"></p>
        <p>半径 <input type="number" name="radius" value="{{ old('radius', $planet->radius) }}"></p>
        <p>重量 <input type="number" name="weight" value="{{ old('weight', $planet->weight) }}"></p>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>