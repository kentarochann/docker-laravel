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
            <div>
                {{ Form::label('name', '氏名：') }}
            </div>
            <div>
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => '氏名'])}}
            </div>
        </div>
        <div>
            <div>
                {{ Form::label('email', 'メールアドレス：') }}
            </div>
            <div>
                {{ Form::text('email', null)}}
            </div>
            <div>
                @error('email')
                    <div>
                        <div>入力内容に誤りがあります。</div>
                        <ul>
                            {{-- todo エラーメッセージの表示、日本語化 --}}
                            @foreach($errors->get('email') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @enderror
            </div>
        </div>
        <div>
            <div>
                {{ Form::label('password', 'パスワード：') }}
            </div>
            <div>
                {{ Form::password('password')}}
            </div>
            <div>
                @error('password')
                    <div>
                        <div>入力内容に誤りがあります。</div>
                        <ul>
                            @foreach($errors->get('password') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @enderror
            </div>
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
