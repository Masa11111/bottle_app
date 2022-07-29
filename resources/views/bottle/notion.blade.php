@extends('layout.BottleApp')

@section('title', 'お知らせ画面')

@section('notion')

    @foreach($bottles as $bottle)
        <p>{{ $bottle->created_at }}</p>
    @endforeach

@endsection