@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<!-- <table>
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
</table> -->

<!-- 6/6 -->
<!-- <table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table> -->

<!-- 6-36 1対1 -->
<!-- <table>
    <tr>
        <th>Person</th>
        <th>Board</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td>@if ($item->board != null)
            {{$item->board->getData()}}
            @endif
        </td>
    </tr>
    @endforeach
</table> -->

<!-- 6-38 1対多 -->
<table>
    <tr>
        <th>Person</th>
        <th>Board</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td>
            @if ($item->boards != null)
            <table width="100%">
                @foreach ($item->boards as $obj)
                <tr>
                    <td>{{$obj->getData()}}</td>
                </tr>
                @endforeach
            </table>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection