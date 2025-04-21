@extends('layouts.app')

@section("css")
<link rel="stylesheet" href="{{ asset("css/index.css") }}">
@endsection

@section("content")
    <h2 class="contact-title">Contact</h2>
    <div class="contact-form-wrapper">
        <form class="contact-form" action="/confirm" method="POST">
            @csrf
            <div class="form-group required">
                <label for="name">お名前</label>
                <div class="name-inputs">
                    <input type="text" id="name" name="name_first" placeholder="例：山田">
                    <input type="text" name="name_last" placeholder="例：太郎">
                </div>
            </div>
            <div class="form-group required">
                <label>性別</label>
                <div class="gender-inputs">
                    <div class="gender-option">
                        <input type="radio" name="gender" value="男" checked>
                        <div>男性</div>
                    </div>
                    <div class="gender-option">
                        <input type="radio" name="gender" value="女">
                        <div>女性</div>
                    </div>
                    <div class="gender-option">
                        <input type="radio" name="gender" value="その他">
                        <div>その他</div>
                    </div>
                </div>
            </div>
            <div class="form-group required">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例：mail@example.com">
            </div>
            <div class="form-group required">
                <label for="phone">電話番号</label>
                <div class="phone-inputs">
                    <input type="text" name="phone1" placeholder="(例) 090"> 
                    <span class="hyphen">-</span>
                    <input type="text" name="phone2" placeholder="(例) 1234">
                    <span class="hyphen">-</span>
                    <input type="text" name="phone3" placeholder="(例) 5678">
                </div>
            </div>
            <div class="form-group required">
                <label for="address">住所</label>
                <input type="text" id="address" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form-group">
                <div for="building">建物名</div>
                <input type="text" id="building" name="building" placeholder="例：〇〇マンション101">
            </div>
            <div class="form-group required">
                <label for="inquiry_type">お問い合わせの種類</label>
                <select id="inquiry_type" name="inquiry_type">
                    <option value="" disabled selected>選択してください</option>
                    <option value="商品の交換について">商品の交換について</option>
                </select>
            </div>
            <div class="form-group required">
                <label for="inquiry_content">お問い合わせ内容</label>
                <textarea id="inquiry_content" name="detail" placeholder="お問い合わせ内容をご記入ください"></textarea>
            </div>
            <div class="form__button">
                <button type="submit" class="confirm-button">確認画面</button>
            </div>
        </form>
    </div>
@endsection