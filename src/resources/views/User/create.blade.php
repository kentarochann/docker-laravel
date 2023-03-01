<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザーcreate</title>
</head>
<body>
    <p>User create</p>
    {{ Form::open([route('users.store')]) }}
        <div>
            {{ Form::label('name', '氏名：') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => '氏名'])}}
        </div>
        <div>
            {{ Form::label('email', 'メールアドレス：') }}
            {{ Form::text('email', null)}}
        </div>
        <div>
            {{ Form::label('password', 'パスワード：') }}
            {{ Form::password('password')}}
        </div>
        <div>
            {{ Form::submit('送信') }}
        </div>
    {{ Form::close() }}
    <div>
        <a href="{{ route('users.index') }}">
            users index
        </a>
    </div>
</body>
</html>
