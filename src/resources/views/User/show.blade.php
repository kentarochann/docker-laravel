@extends('layouts.app')

@section('title', 'user show')

@section('content')

    <h3>user show/edit</h3>

    @if (session('flash_message'))
        <div>
            <div class="flash_message">{{ session('flash_message') }}</div>
        </div>
    @endif

    {{ Form::open(['route' => ['users.update', 'id' => $user->id]]) }}
    <div>
        <div>
            {{ Form::label('name', '氏名：') }}
        </div>
        <div>
            {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '氏名']) }}
        </div>
    </div>
    <div>
        <div>
            {{ Form::label('email', 'メールアドレス：') }}
        </div>
        <div>
            {{ Form::text('email', $user->email) }}
        </div>
        <div>
            @error('email')
                <div>
                    <div>入力内容に誤りがあります。</div>
                    <ul>
                        @foreach ($errors->get('email') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @enderror
        </div>
    </div>
    <div>
        {{ Form::button('更新', ['type' => 'submit']) }}
    </div>
    {{ Form::close() }}

    {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
    {{ Form::submit('このuserを削除', ['onclick' => 'return confirm("本当に削除しますか？")']) }}
    {{ Form::close() }}

    <div>
        <a href="{{ route('users.index') }}">user indexへ</a>
    </div>

@endsection
