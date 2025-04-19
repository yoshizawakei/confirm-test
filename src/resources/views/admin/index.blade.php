@extends("layouts.auth")

@section("css")
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section("content")
<header class="header">
    <div class="header__inner">
        <a href="#" class="logo">FashionablyLate</a>
    </div>
    <div class="header__link">
        <a href="#" class="logout">logout</a>
    </div>
</header>
<div class="container">
    <h2 class="admin-header">Admin</h2>
    <div class="header-actions">
        <div class="search-fields">
            <input class="item" type="text" placeholder="名前やメールアドレスを入力してください">
            <select class="sex">
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
            <select class="inquiry">
                <option value="">お問い合わせの種類</option>
                <option value="product">商品の交換について</option>
                <option value="other">その他</option>
            </select>
            <input class="date" type="date">
            <button class="search-button">検索</button>
            <button class="reset-button">リセット</button>
        </div>
    </div>
    <div class="table-actions">
        <div class="export">
            <button class="export-button">エクスポート</button>
        </div>
        <div class="pagination">
            <a href="#">&lt;</a>
            <a href="#" class="current">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&gt;</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>山田 太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td><button class="details-button">詳細</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection