<!-- 3-27  P88-->
<!-- テンプレートの継承に使用するディレクティブ
    @extends('フォルダ名.テンプレート名')   -->
@extends('layouts.helloapp')

<!-- @sestion('セクション名','セクションに入れる値') -->
@section('title', 'Index')
<!-- @sestion('menubar')～@endsectionまでをまとめて
    menubarというセクション名をつけて、１つのまとまりとして管理します -->
@section('menubar')
<!-- 親レイアウトの中のセクションをここに埋め込み -->
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです。</p>
<p>必要なだけ記述できます。</p>
<!-- 3-29 コンポーネントの組込み-->
<!-- @component('フォルダ名.コンポーネント名') -->
<!-- @component('components.message')

@slot → {{ }} 内の変数に値を渡す
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