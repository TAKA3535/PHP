<!-- 3-27  P88-->
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです。</p>
<p>必要なだけ記述できます。</p>
<!-- 3-29 コンポーネントの組込み-->
<!-- @component('components.message')
@slot('msg_title')
CAUTION!
@endslot

@slot('msg_content')
これはメッセージの表示です。
@endslot
@endcomponent -->
<!-- 3-30 サブビューの設定 P94 -->
<!-- @include('components.message', ['msg_title'=>'OK',
'msg_content'=>'サブビューです。']) -->
<!-- 3-32 eachによるコレクションビューP95～ -->
<!-- <ul>
    @each('components.item', $data, 'item')
</ul> -->
<!-- 3-37 ビューコンポーザー利用 29行目を消せばブラウザ表示OK P103 -->
<p>Controller value<br>'message' = {{$message}}</p>
<p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection