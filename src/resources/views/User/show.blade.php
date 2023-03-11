@extends('layouts.app')

@section('title', 'user show')

@section('content')

<h3>user show</h3>
<div>{{ $user->name }}</div>
{{-- {{ Form::open([route('users.destroy', $user->id), 'method' => 'post']) }} --}}
{{ Form::open(['route' =>['users.destroy', $user->id], 'method' => 'delete']) }}
{{-- <button type="submit">このuserを削除</button> --}}
    {{ Form::submit('このuserを削除') }}
{{ Form::close()}}

<div>
    <a href="{{ route('top') }}">Topへ</a>
</div>

@endsection

