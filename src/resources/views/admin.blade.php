@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('content')
<div class="content-header">
    <div class="content-header_title">
        <h2 class="content-header_title-text">Admin</h2>
    </div>
</div>
<div class="search-form">
    <form action="/search" class="search-group" method="get">
        @csrf
        <div class="search-group_inner">
            <input class="search-group_input-text" type="text" name="keyword">
        </div>
        <div class="search-group_inner">
            <select class="search-group_select-gender" name="gender" id="">
                <option value="">性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
        </div>
        <div class="search-group_inner">
            <select class="search-group_select-category" name="category_id" id="">
                <option value="">選択してください</option>
                @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['content']}}</option>

                @endforeach
            </select>
        </div>
        <div class="search-group_inner">
            <input class="search-group_input-data" type="date" name="date">
        </div>
        <div class="button">
            <div class="search-button">
                <button class="search-button_submit">検索</button>
            </div>
            <div class="reset-button">
                <button class="reset-button_submit">リセット</button>
            </div>
        </div>
    </form>

    <form action="/modal" method="post">
        <table class="search-table">
            <tr class="search-table_title">
                <th class="search-table_title-text">お名前</th>
                <th class="search-table_title-text">性別</th>
                <th class="search-table_title-text">メールアドレス</th>
                <th class="search-table_title-text">お問い合わせの種類</th>
                <th class="search-table_title-text">お問い合わせの内容</th>
            </tr>
            <tr class="seach-table_content">
                @foreach($contents as $content)
                <td class="search-table_content-text">{{$content['name']}}</td>
                <td class="search-table_content-text">{{$content['gender']}}</td>
                <td class="search-table_content-text">{{$content['email']}}</td>
                <td class="search-table_content-text">{{$content['category']}}</td>
                <td class="search-table_content-text">{{$content['datail']}}</td>
                <td>
                    <button wire:click="openModal()" type="button" class="search-table_content-button">詳細</button>
                    <div id="exampleModal">
                        <div id="modal">
                            <div class="back_button">
                                <button wire:click="closeModal()" type="button" class="back_button-submit">×</button>
                                <table class="table">
                                    <tr class="table_inner">
                                        <th class="table_content-name">お名前</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">性別</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">メールアドレス</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">電話番号</th>
                                        <td class="table_content">aaa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">住所</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">建物名</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">お問い合わせの種類</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                    <tr class="table_inner">
                                        <th class="table_content-name">お問い合わせ内容</th>
                                        <td class="table_content">aa</td>
                                    </tr>
                                </table>
                            </div>
                            <form class="delete_button" action="/delete" method="post">
                                @csrf
                                <button class="delete_button-submit">削除</button>
                            </form>
                        </div>
                    </div>
                </td>
                </td>
                @endforeach
            </tr>
        </table>
    </form>
</div>
@endsection