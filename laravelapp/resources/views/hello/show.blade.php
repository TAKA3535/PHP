@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')

<!-- 5-21 演算記号を指定した検索　P209 -->
@if ($items != null)
@foreach($items as $item)
<table width="400px">
    <tr>
        <th width="50px">id:</th>
        <td width="50px">{{$item->id}}</td>
        <th width="50px">name:</th>
        <td>{{$item->name}}</td>
        <th>age: </th>
        <td>{{$item->age}}</td>
    <tr>
        <th>mail: </th>
        <td>{{$item->mail}}</td>
    </tr>
</table>
@endforeach
@endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection