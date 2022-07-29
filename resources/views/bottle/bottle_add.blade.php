@extends('layout.BottleApp')

@section('title', 'ボトルを追加する')


@section('bottle_add')

    @if(!empty($errors))
    <div>
        <ul>
            @foreach($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(!empty($error))
        <p>{{ $error }}</p>
    @endif

    <form action="/bottle/add" method="post">
        <div class="form-group">
            @csrf
            <h3>ボトル名を選択</h3>
            <select name="bottle_name" class="form-control">
                <option value="黒霧島">黒霧島</option>
                <option value="白霧島">白霧島</option>
                <option value="木挽">木挽blue</option>
                <option value="薩摩美人">薩摩美人</option>
                <option value="茜霧島">茜霧島</option>
                <option value="いいちこ">いいちこ</option>
                <option value="しろ">しろ</option>
                <option value="残波">残波</option>
            </select>
            <h3>顧客名を入力</h3>
            <input type="text" name="customer_name" class="form-control"><br>
        </div>
        <input style="margin-top: 10px;" type="submit" value="登録する">
    </form>

@endsection