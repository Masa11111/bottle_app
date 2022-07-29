<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>ログイン画面</title>
</head>
<body>

    @if(!empty($error))
        <p>{{ $error }}</p>
    @endif

    <!-- HTMLコード -->
    <form name="login_form" action="/login" method="POST">
        @csrf
            <div class="login_form_top">
            <h1>LOGIN</h1>
            <p>ユーザ名、パスワードをご入力の上、「ログイン」ボタンをクリックしてください。</p>
            </div>
            <div class="login_form_btm">
            <input type="text" name="input_name" placeholder="UserName">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="botton" value="ログイン">
            </div>
    </form>
</body>
</html>