<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザーindex</title>
</head>
<body>
    <h1>user index</h1>
    @forelse($users as $user)
        <div>{{ $user->name }}</div>
        <div>{{ $user->email }}</div>
        <div>
            {{ $user->password }}
            ※パスワードなので、この欄は消す
        </div>
    @empty
        <div>ユーザーは存在しません</div>
    @endforelse
    <div>
        <a href="{{ route('users.create') }}">
            create user
        </a>
    </div>
    <div>
        <a href="{{ route('top') }}">Topへ</a>
    </div>
</body>
</html>
