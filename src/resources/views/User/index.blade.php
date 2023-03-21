@extends('layouts.app')

@section('title', 'user index')

@section('content')

<h1 class="">user index</h1>
    @if (session('flash_message'))
        <div>
            <div class="flash-message">{{ session('flash_message') }}</div>
        </div>
    @endif
    @forelse($users as $user)
        <div class="user_list">
            <div>
                <div>user name</div>
                <a href="{{ route('users.show', $user->id) }}" class="user_name">
                    {{ $user->name }}
                </a>
            </div>
            <div>{{ $user->email }}</div>
            <div>
                {{ $user->password }}
                ※パスワードなので、この欄は消す
            </div>
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

@endsection
