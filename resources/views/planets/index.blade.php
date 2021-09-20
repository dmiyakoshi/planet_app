<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>index</title>
</head>
<body>
    <h1>惑星一覧</h1>
    <table>
        <colgroup span="7"></colgroup>
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
        <tr>
            <th>{{ $planet->name_ja }}</th>
            <th>{{ $planet->name }}</th>
            <th>{{ $planet->radius }}</th>
            <th>{{ $planet->weight }}</th>
            <th><a href="/planets/{{ $planet->id }}">詳細</a></th>
            <th><a href="/planets/{{ $planet->id }}/edit">編集</a></th>
            <th>
                {{-- <form action="/planets/{{ $planet->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                </form> --}}
                <form action="/planets/{{ $planet->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                </form>
            </th>
        </tr>
        @endforeach
    </table>

    <a href="/planets/create">新規登録</a>
</body>
</html>