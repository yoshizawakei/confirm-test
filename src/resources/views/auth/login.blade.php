@extends("layouts.auth")

@section("css")
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section("content")
<header class="header">
    <div class="header__inner">
        <a href="#" class="logo">FashionablyLate</a>
    </div>
    <div class="header__link">
        <a href="#" class="register">register</a>
    </div>
</header>
<main>
<h2 class="login-header">Login</h2>
<div class="login">
    <form class="login-form">
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" placeholder="例：mail@example.com">
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" placeholder="半角英数字で入力">
        </div>
        <div class="button">
            <button type="submit" class="login-button">ログイン</button>
        </div>
    </form>
</div>
</main>
@endsection