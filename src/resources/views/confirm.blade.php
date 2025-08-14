@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="content-header">
    <div class="content-header_title">
        <h2 class="content-header_title-text">Confirm</h2>
    </div>
</div>
<form action="/store" method="post">
    @csrf
    <table class="confirm-table">
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">お名前</th>
            <td class="confirm-table_content">
                <input type="hidden" name="first_name" value="{{$contact['first_name']}}">{{$contact['first_name']}}　<input type="hidden" name="last_name" value="{{$contact['last_name']}}">{{$contact['last_name']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">性別</th>
            <td class="confirm-table_content">
                <input type="hidden" name="gender" value="{{$contact['gender']}}">{{$contact['gender']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">メールアドレス</th>
            <td class="confirm-table_content">
                <input type="hidden" name="email" value="{{$contact['email']}}">{{$contact['email']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">電話番号</th>
            <td class="confirm-table_content">
                <input type="hidden" name="tel" value="{{$contact['tel']}}">{{$contact['tel']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">住所</th>
            <td class="confirm-table_content">
                <input type="hidden" name="address" value="{{$contact['address']}}">{{$contact['address']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">建物名</th>
            <td class="confirm-table_content">
                <input type="hidden" name="building" value="{{$contact['building']}}">{{$contact['building']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">お問い合わせの種類</th>
            <td class="confirm-table_content">
                <input type="hidden" name="category_id" value="{{$contact['category_id']}}">{{$contact['category_id']}}
            </td>
        </tr>
        <tr class="confirm-table_inner">
            <th class="confirm-table_content-name">お問い合わせ内容</th>
            <td class="confirm-table_content">
                <input type="hidden" name="datail" value="{{$contact['datail']}}">{{$contact['datail']}}
            </td>
        </tr>
    </table>
    <div class="create-button">
        <button class="create-button_submit" type="submit">送信</button>
    </div>
</form>
<div class="button">
    <form action="/back" class="back-button">
        <buttona class="back-button_submit">修正</buttona>
    </form>
</div>
@endsection