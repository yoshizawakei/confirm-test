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
                    <td><input type="text" id="name" name="name_first" value="{{ $contact["name_first"] }}" readonly></td>
                    <td><input type="text" name="name_last" value="{{ $contact["name_last"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>性別</th>
                    <td><input type="text" name="gender" value="{{ $contact["gender"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>メールアドレス</th>
                    <td><input type="email" id="email" name="email" value="{{ $contact["email"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>電話番号</th>
                    <td><input type="text" name="phone1" value="{{ $contact["phone1"] }}" readonly></td>
                    <td><input type="text" name="phone2" value="{{ $contact["phone2"] }}" readonly></td>
                    <td><input type="text" name="phone3" value="{{ $contact["phone3"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>住所</th>
                    <td><input type="text" id="address" name="address" value="{{ $contact["address"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>建物名</th>
                    <td><input type="text" id="building" name="building" value="{{ $contact["building"] }}" readonly></td>
                </tr>
                <tr class="form-item">
                    <th>お問い合わせの種類</th>
                    <td><input type="text" name="inquiry_type" value="{{ $contact["inquiry_type"] }}" readonly></td>
                </tr>
                <tr class="form-item inquiry-content">
                    <th>お問い合わせ内容</th>
                    <td><input type="text" name="inquiry_content" value="{{ $contact["inquiry_content"] }}" readonly></td>
                </tr>
            </table>
            <div class="button-group">
                <button type="submit" class="submit-button">送信</button>
                <button type="button" class="edit-button">修正</button>
            </div>
        </form>
    </div>
@endsection