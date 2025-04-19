@extends('layouts.auth')

@section("css")
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section("content")
    <h2 class="register-header">Register</h2>
    <div class="register">
        <form class="register-form">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" placeholder="例：山田 太郎">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例：mail@example.com">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" placeholder="半角英数字で入力">
            </div>
            <div class="button">
                <button type="submit" class="register-button">登録</button>
            </div>
        </form>
    </div>
@endsection