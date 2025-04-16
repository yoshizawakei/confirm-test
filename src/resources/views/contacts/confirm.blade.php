@extends('layouts.app')

@section("css")
<link rel="stylesheet" href="{{ asset("css/confirm.css") }}">
@endsection


@section("content")
    <h2 class="confirm-title">Confirm</h2>
    <div class="confirm-form-wrapper">
        <form class="confirm-form">
            <table class="confirm-table">
                <tr class="form-item">
                    <th>お名前</th>
                    <td>山田 太郎</td>
                </tr>
                <tr class="form-item">
                    <th>性別</th>
                    <td>男性</td>
                </tr>
                <tr class="form-item">
                    <th>メールアドレス</th>
                    <td>test@example.com</td>
                </tr>
                <tr class="form-item">
                    <th>電話番号</th>
                    <td>08012345678</td>
                </tr>
                <tr class="form-item">
                    <th>住所</th>
                    <td>東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr class="form-item">
                    <th>建物名</th>
                    <td>千駄ヶ谷マンション101</td>
                </tr>
                <tr class="form-item">
                    <th>お問い合わせの種類</th>
                    <td>商品の交換について</td>
                </tr>
                <tr class="form-item inquiry-content">
                    <th>お問い合わせ内容</th>
                    <td>届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。</td>
                </tr>
            </table>
            <div class="button-group">
                <button type="submit" class="submit-button">送信</button>
                <button type="button" class="edit-button">修正</button>
            </div>
        </form>
    </div>
@endsection