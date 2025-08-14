@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('button')
<div class="login-button">
    <a class="login-button_submit" href="/login">Login</a>
</div>
@endsection

@section('content')
<div class="register-body">
    <div class="content-header">
        <div class="content-header_title">
            <h2 class="content-header_title-text">Register</h2>
        </div>
    </div>
    <form action="/register" class="register-inner" method="post">
        @csrf
        <div class="register-group">
            <div class="register-content_name">
                <p class="register-content_name-text">お名前</p>
            </div>
            <div class="register-content">
                <input type="text" class="register-content_input" name="name" value="{{old('name')}}" placeholder="　例: 山田　太郎">
            </div>
            <div class="error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-group">
            <div class="register-content_name">
                <p class="register-content_name-text">メールアドレス</p>
            </div>
            <div class="register-content">
                <input type="text" class="register-content_input" name="email" value="{{old('email')}}" placeholder="　例: test@example.com">
            </div>
            <div class="error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-group">
            <div class="register-content_name">
                <p class="register-content_name-text">パスワード</p>
            </div>
            <div class="register-content">
                <input type="password" class="register-content_input" name="password" placeholder="　例: coachtech1106">
            </div>
            <div class="error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-content_button">
            <button class="register-content_button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection