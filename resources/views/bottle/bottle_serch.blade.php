@extends('layout.BottleApp')

@section('title', 'ボトル検索画面')

@section('bottle_serch')
    <form action="/bottle/serch" method="POST">
        <div class="form-group">
            @csrf
            <h3>ボトル名を検索</h3>
            <select name="bottle_name">
                <option value="">未設定</option>
                <option value="黒霧島">黒霧島</option>
                <option value="白霧島">白霧島</option>
                <option value="木挽">木挽</option>
                <option value="薩摩美人">薩摩美人</option>
                <option value="茜霧島">茜霧島</option>
                <option value="いいちこ">いいちこ</option>
                <option value="しろ">しろ</option>
                <option value="残波">残波</option>
            </select>
            <input type="submit" value="検索">
            <h3>顧客名で検索</h3>
            <input type="text" name="customer_name">
            <input type="submit" value="検索">
        </div>
    </form>

    @if(!empty($error))
        <p>{{ $error }}</p>
    @endif

@endsection