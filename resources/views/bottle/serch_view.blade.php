@extends('layout.BottleApp')

@section('title', 'ボトル検索画面')

@section('bottle_view')

    @if(!empty($error))
    <div>
        <h2>{{ $error }}</h2>
    </div>
    @endif

    @if(!empty($bottles))

        @include('layout.Bottle_all')

    @endif
@endsection