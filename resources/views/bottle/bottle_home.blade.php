@extends('layout.BottleApp')

@section('title', 'ホーム画面')

@section('bottle_view')
    <h3>一覧表示</h3>
    @include('layout.Bottle_all')
    {{ $bottles->links() }}

@endsection