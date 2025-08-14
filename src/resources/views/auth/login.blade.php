@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('button')
<div class="register-button">
    <a class="register-button_submit" href="/register">Register</a>
</div>
@endsection

@section('content')
<div class="login-body">
    <div class="content-header">
        <div class="content-header_title">
            <h2 class="content-header_title-text">Login</h2>
        </div>
    </div>
    <form action="/login" class="login-inner" method="post">
        @csrf
        <div class="login-group">
            <div class="login-content_name">
                <p class="login-content_name-text">メールアドレス</p>
            </div>
            <div class="login-content">
                <input type="text" class="login-content_input" name="email" value="{{old('email')}}" placeholder="　例: test@example.com">
            </div>
            <div class="error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login-group">
            <div class="login-content_name">
                <p class="login-content_name-text">パスワード</p>
            </div>
            <div class="login-content">
                <input type="password" class="login-content_input" name="password" placeholder="　例: coachtech1106">
            </div>
            <div class="error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login-content_button">
            <button class="login-content_button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection