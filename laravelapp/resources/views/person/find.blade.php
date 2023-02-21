@extends('layouts.helloapp')
<!-- 6-7 P244 -->
@section('title', 'Person.find')

@section('menubar')
@parent
検索ページ
@endsection

@section('content')
<form action="/person/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
</form>
<!-- isset()は変数がセット(設定)されているか確かめる、今回はセットされていない(else)場合のコードはなし -->
@if (isset($item))
<table>
    <tr>
        <th>Data</th>
    </tr>
    <tr>
        <!-- {{}}は変数等の埋め込み -->
        <!--  -->
        <!-- getData()はモデルのPerson.phpのクラスメソッドを呼び出す -->
        <td>{{$item->getData()}}</td>
    </tr>
</table>
@endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection