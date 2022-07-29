<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ボトル名</th>
            <th scope="col">顧客名</th>
            <th scope="col">キープ日</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tdbody>
        @foreach( $bottles as $bottle)
            <tr>
                <th scope="row">{{ $bottle->id }}</th>
                <td>{{ $bottle->bottle_name }}</td>
                <td>{{ $bottle->customer_name }}</td>
                <td>{{ $bottle->created_at }}</td>
                <td><button><a href="/bottle/delete?id={{ $bottle->id }}">削除</a></button></td>
            </tr>
        @endforeach
    </tdbody>
</table>
