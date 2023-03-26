@extends('layouts.app')

@section('title', 'user index')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/user_index.css')  }}" >
@endsection

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
                <div>id: {{ $user->id }}</div>
                <div>user name</div>
                <div class="user_name_group">
                    <div>=></div>
                    <div>
                        <a href="{{ route('users.show', $user->id) }}" class="user_name">
                            {{ $user->name }}
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div>user email</div>
                <div class="user_email_group">
                    <div>=></div>
                    <div class="user_email">{{ $user->name }}</div>
                </div>
            </div>
        </div>
        <hr>
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
