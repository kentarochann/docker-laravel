@extends('layouts.app')

@section('title', 'play ground')

@section('content')

<h2>play ground</h2>

<div>
    <a href="{{ route('top') }}">Top</a>
</div>


{{-- 要素の追加 --}}
<button type='button' class="appendTest">
    追加テスト
</button>
<ul>
    <li>list</li>
</ul>

{{-- セレクタの指定 --}}
<ul class="sample">
    <li class="under">リスト1-1</li>
    <li>リスト1-2</li>
    <li>リスト1-3</li>
    <ul>
        <li>リスト2-1</li>
        <li>リスト2-2</li>
        <li>リスト2-3</li>
    </ul>
</ul>

{{-- 表示・非表示 --}}
<p>テキスト1</p>
<p style="display: none;">テキスト2</p>

{{-- api取得、人物名 --}}
<button class="name_list_button">人物名取得 コンソールで確認</button>


@endsection


{{-- jQurey --}}
@section('js')
<script>

// 要素の追加
$('.appendTest').click(function(){
    console.log("aaa");
    $('ul').append('<li>test');
});

//　セレクタの指定
$(function(){
    // 直下
    $('.sample > li').css('color', 'red');
    $('.sample').children('li').css('color', 'green');

});


// api叩くテスト、人物名取得
$('.name_list_button').click(function(){
    console.log('人物名取得するよー');
    async function callApi(){
        const res = await fetch("https://jsonplaceholder.typicode.com/users");
        const users = await res.json();
        return users;
    }

    async function main(){
        const user_list = await callApi();

        $.each(user_list, function(index, users){
            console.log('index:' + index + " --- user email: " + users.name);
        });

    }

    main();

});





// const users = callApi();
// console.log(users);



</script>
@endsection


