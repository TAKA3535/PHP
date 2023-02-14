<!-- 6-32 -->
@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
@parent
ボード・ページ
@endsection

@section('content')
<table>
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Message</th>
        <th>Person_id	</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->getData()}}</td>
        <td>{{$item->message}}</td>
        <td>{{$item->person_id	}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
