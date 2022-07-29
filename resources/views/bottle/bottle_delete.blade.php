@extends('layout.BottleApp')

@section('title', 'ボトル削除ページ')

@section('bottle_del')
<div class="text-center">
    <form action="/bottle/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <h3><ボトル名></h3>
        <h2>{{ $form->bottle_name }}</h2>
        <h3><顧客名></h3>
        <h2>{{ $form->customer_name }}</h2>
        <h3><キープ日></h3>
        <h2>{{ $form->created_at }}</h2>
        <input type="submit" value="削除">
    </form>
</div>
@endsection
