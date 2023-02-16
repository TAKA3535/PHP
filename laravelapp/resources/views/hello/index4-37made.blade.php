@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<!--4-14 バリデーションを利用 P122 -->
<p>ここが本文のコンテンツです。</p>
<!-- <p>{{$msg}}</p>
<form action="/hello" method="post">
    <table>
        @csrf
        <tr>
            <th>name: </th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form> -->
<!-- 4-17 エラーメッセージの保持 P127 -->
<!-- <p>{{$msg}}</p>
errorsはlaravelの中に最初から用意されているオブジェクト
もしバリデーションでエラーが発生したら
@if (count($errors) > 0)
<div>
    <ul> -->
<!-- $errors->all() はエラーメッセージを配列にまとめて取り出してる -->
<!-- @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/hello" method="post">
    <table>
        @csrf
        <tr>
            <th>name: </th>
            old()メソッドは前回送信した値を出力
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form> -->

<!-- 4-18 P128 -->
<!-- <p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力して下さい。</p>
@endif
<table>
    <form action="/hello" method="post">
        @csrf
        //--hasはエラーが発生しているかをチェックするメソッド、trueであればエラーが発生している
        //--もしname属性であれば下記(trueブロック)を実装
        @if ($errors->has('name'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @endif
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        @if ($errors->has('mail'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('mail')}}</td>
        </tr>
        @endif
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        @if ($errors->has('age'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @endif
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
</table>
</form> -->

<!-- 4-19  -->
<!-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>name: </th><td><input type="text" 
            name="name" value="{{old('name')}}"></td></tr>
        @error('mail')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>mail: </th><td><input type="text" 
            name="mail" value="{{old('mail')}}"></td></tr>
        @error('age')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>age: </th><td><input type="text" 
            name="age" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send">
        </td></tr>
    </table>
    </form> -->

<!-- 4-37 クッキーを読み書き P164 -->
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力して下さい。</p>
@endif
<form action="/hello" method="post">
    <table>
        @csrf
        @if ($errors->has('msg'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('msg')}}</td>
        </tr>
        @endif
        <tr>
            <th>Message: </th>
            <td><input type="text" name="msg" value="{{old('msg')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection