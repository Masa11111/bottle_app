<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <title>ボトル君</title>
</head>
<body>
    <div class="container">
    <header>
        <h1>ボトル君</h1>
        <a href="/login">ログイン</a>
        <a href="/logout">ログアウト</a>
        <hr>
        <hr>
        <div>
            <p>@yield('title')</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <button  class="btn btn-primary">
                        <a href="/bottle" style="color: white;">ホーム画面</a>
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-primary">
                        <a href="/bottle/serch" style="color: white;">ボトルを検索</a>
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-primary">
                        <a href="/bottle/add" style="color: white;">ボトルを追加</a>
                    </button>
                </div>
                <div class="col">
                <button type="button" class="btn btn-primary position-relative">
                    <a href="/bottle/notion" style="color: white;">
                        お知らせ
                    </a>
                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2" style="color: white;">2<span class="visually-hidden">unread messages</span></span>
                </button>
                </div>
            </div>
        </div>
    </header>
    <hr>
            @yield('bottle_view')
            @yield('bottle_add')
            @yield('bottle_del')
            @yield('bottle_serch')
            @yield('notion')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>