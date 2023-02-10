@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<!-- 5-5  P192-->
@section('content')
<table>
    <tr>
        <th>Name</th>
        <th>Mail</th>
        <th>Age</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection