@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection
<!-- 4-5 P112 -->
@section('content')
<p>ここが本文のコンテンツです。</p>
<!-- <table>
    @foreach($data as $item)
    <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
</table> -->

<!-- 4-7 上の4-5部分を消さないとエラー表示-->
<p>これは、<middleware>google.com</middleware>へのリンクです。</p>
<p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection