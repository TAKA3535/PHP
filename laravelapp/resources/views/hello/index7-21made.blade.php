<!-- 7-21 ペジネーションしたページを表示 P314 -->
@extends('layouts.helloapp')
<style>
    .pagination {
        font-size: 10pt;
    }

    .pagination li {
        display: inline-block
    }
</style>
@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

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
{{ $items->links() }}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection