<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
        {{-- todo let's encrypt とかでSSL証明書とって貼る, secure_asset関数に変換 --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <link rel="icon" href="/img/laravel-icon-497x512.png" sizes="32x32" />
    @yield('css')
</head>
<body>
    <header>
        <div class="toppage_title">
            <h1>
                <a href="/">Laravel Page</a>
            </h1>
        </div>
    </header>
@yield('content')

{{-- jquery読み込み --}}
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

@yield('js')

</body>
</html>
