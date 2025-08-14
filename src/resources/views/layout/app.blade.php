<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ(確認テスト)</title>
    <link rel="stylesheet" href="{{asset('css/sanitaze.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
    <header>
        <div class="header_inner">
            <div class="header_content">
                <h2 class="header_content-text">FashionablyLate</h2>
            </div>
            @if (Auth::check())
            <form action="/logout" method="post">
                @csrf
                <div class="logout_button">
                    <button class="logout_button-submit" type="submit">Logout</button>
                </div>
            </form>
            @endif
            @yield('button')
        </div>
    </header>
    @yield('content')
</body>

</html>