<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="utf-8">

  <title>ニーター</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <script src="https://kit.fontawesome.com/39ab84bfc8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap" rel="stylesheet">
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body>
<!------------------------------------- ヘッダー ----------------------------------------------->
<header class="l-header">
  <div class="p-headerItem">
    <div class="p-headerItem__logo">
      <a href="" class="p-topLink">
        <img src="#" alt="" class="p-topLink__img">
      </a>
    </div>
    <div class="p-headerItem__menu">
      <button class="p-menuBtn">メニュー</button>
      <div class="p-headerMenu"> 
        <ul>
          <li class="p-headerMenu__list">
            <i class="fas fa-user p-userIcon"></i>
            <ul class="p-menuList">
              <li class="p-menuList__item">マイページ</li>
              <li class="p-menuList__item">アイディ投稿</li>
              <li class="p-menuList__item">気になるリスト</li>
              <li class="p-menuList__item">
                <form action="" method="POST">
                  @csrf
                  <button type="submit" class="p-logout c-btn"></button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>  
    </div>
  </div>
</header>

<!------------------------------------- メイン画面 ----------------------------------------------->

<main class="l-main">
  <div class="p-authForm">
    <div class="p-authForm__sns">
      <button class="p-snsBtn"><i class="fab fa-twitter"></i> Twitterで登録</button>
    </div>
    
    <div class="p-authForm__container">
      <form method="post" class="c-form">
        <span class="c-form__heading">ニックネーム</span>
        <input type="text" name="name" class="c-form__input is-invalid" value="" required autocomplete="name" autofocus placeholder="例：ニーター">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
        <span class="c-form__heading">メールアドレス</span>
        <input type="email" name="email" class="c-form__input is-invalid" value="" required autocomplete="email" autofocus placeholder="例：hogehoge@gmail.com">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
        <span class="c-form__heading">パスワード</span>
        <input type="password" name="password" class="c-form__input is-invalid"　required autocomplete="current-password" placeholder="※7文字以上半角英数字">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
        <span class="c-form__heading">パスワード再入力</span>
        <input type="password" name="password" class="c-form__input is-invalid"　required autocomplete="current-password" placeholder="※7文字以上半角英数字">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
        <label for="c-formCheck" class="c-form__label"><input type="checkbox" name="remember" id="c-formCheck">次回から自動でログインする</label>
        <input type="submit" class="c-btnRegister c-btn" value="ユーザー登録">
      </form>
      <span class="p-formRule">登録することで、利用規約とプライバシーポリシーに同意したものとみなされます。</span>
    </div>
  </div>
</main>
