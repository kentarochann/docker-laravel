@extends('layouts.app')

@section('title', 'top page')

@section('content')

<h2>top page</h2>
<a href="{{ route('users.index') }}">
    user index
</a>

<div>
    <a href="{{ route('pg.index') }}">play ground</a>
</div>

@endsection

@section('js')

<script>

console.log('Hello :)');

// $(function(){ // if document is ready
//   alert('jQuery is ready.')
// });

</script>

@endsection
