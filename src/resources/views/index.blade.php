@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="content-header">
    <div class="content-header_title">
        <h2 class="content-header_title-text">Contact</h2>
    </div>
</div>
<form action="/confirm" method="post">
    @csrf
    <div class="form">
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">お名前</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <div class="form-group_content-name">
                        <input class="form-content_input2" type="text" name="first_name" placeholder="　例:山田" value="{{old('first_name')}}">
                        <div class="form-group_content-error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group_content-name">
                        <input class="form-content_input2" type="text" name="last_name" placeholder="　例:太郎" value="{{old('last_name')}}">
                        <div class="form-group_content-error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">性別</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <input class="form-content_inner-text" type="radio" name="gender" value="1" id="">
                    <p class="text">男性</p>
                    <input class="form-content_inner-text" type="radio" name="gender" value="2" id="">
                    <p class="text">女性</p>
                    <input class="form-content_inner-text" type="radio" name="gender" value="3" id="">
                    <p class="text">その他</p>
                </div>
                <div class="form-group_content-error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">メールアドレス</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <input class="form-content_input" type="text" name="email" placeholder="　例:test@example.com" value="{{old('email')}}">
                </div>
                <div class="form-group_content-error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">電話番号</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <input class="form-content_input3" type="tel" name="tel" maxlength="4" placeholder="　例:080" value="{{old('tel')}}">-
                    <input class="form-content_input3" type="tel" name="tel" maxlength="4" placeholder="　例:1234" value="{{old('tel')}}">-
                    <input class="form-content_input3" type="tel" name="tel" maxlength="4" placeholder="　例:5678" value="{{old('tel')}}">
                </div>
                <div class="form-group_content-error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">住所</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <input class="form-content_input" type="text" name="address" placeholder="　例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}">
                </div>
                <div class="form-group_content-error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">建物名</label>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <input class="form-content_input" type="text" name="building" placeholder="　例:千駄ヶ谷マンション101" value="{{old('building')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">お問い合わせの種類</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <select class="form-content_input1" name="category_id" value="{{old('category_id')}}">
                        <option class="form-content_inner-text" value="">選択してください</option>
                        <option class="form-content_inner-text" value="1">商品のお届けについて</option>
                        <option class="form-content_inner-text" value="2">商品の交換について</option>
                        <option class="form-content_inner-text" value="3">商品トラブル</option>
                        <option class="form-content_inner-text" value="4">ショップへのお問い合わせ</option>
                        <option class="form-content_inner-text" value="5">その他</option>
                    </select>
                </div>
                <div class="form-group_content-error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group_title">
                <label for="" class="form-group_title-label">お問い合わせ内容</label>
                <p class="form-group_title-required">※
                <p>
            </div>
            <div class="form-group_content">
                <div class="form-group_content-inner">
                    <textarea class="form-content_input-text" name="datail" id="" placeholder="　お問い合わせ内容をご記入ください" value="{{old('datail')}}"></textarea>
                </div>
                <div class="form-group_content-error">
                    @error('datail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="confirm-button">
            <button class="confirm-button_submit" type="submit">確認画面</button>
        </div>
    </div>
</form>
@endsection