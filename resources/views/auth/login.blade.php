<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="utf-8">

  <title>@yield('title', 'ログイン')</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <script src="https://kit.fontawesome.com/39ab84bfc8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<div id="app">
<!------------------------------------- ヘッダー ----------------------------------------------->
  <header class="l-header">
    <div class="p-headerItem">
      <div class="p-headerItem__logo">
        <a href="" class="p-topLink">
          <img src="/images/panda.png"  alt="" class="p-topLink__img">
        </a>
      </div>
      <div class="p-headerItem__menu">
        <button class="p-menuBtn">メニュー</button>
        <div class="p-headerMenu"> 
          <ul>
            <li class="p-headerMenu__list">
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
      
      
      <div class="p-authForm__container">
      @yield('SNS登録')
      @section('フォーム')
        <form method="post" class="c-form">
        @csrf
      @show

      @yield('名前')

      @section('メールアドレス')
          <span class="c-form__heading">メールアドレス</span>
          <input type="email" name="email" class="c-form__input is-invalid" value="" required autocomplete="email" autofocus placeholder="例：hogehoge@gmail.com">
          @error('email')
            <span class="c-invalid" role="alert">
              <strong></strong>
            </span>
          @enderror
      @show
      @section('パスワード')
          <span class="c-form__heading">パスワード</span>
          <input type="password" name="password" class="c-form__input is-invalid"　required autocomplete="current-password" placeholder="※7文字以上半角英数字">
          @error('password')
            <span class="c-invalid" role="alert">
              <strong></strong>
            </span>
          @enderror
      @show

      @yield('パスワード確認')
      @section('パスワード忘れリンク')
          <p class="c-form__passlink">※パスワードを忘れた方は<a href="#" class="c-passLink">こちら</a></p>  
      @show
          <label for="c-formCheck" class="c-form__label"><input type="checkbox" name="remember" id="c-formCheck">次回から自動でログインする</label>
      @section('認証ボタン')
          <input type="submit" class="c-btnRegister c-btn" value="ログイン">
      @show
        </form>
      @section('リンク')
        <span class="p-registerLink">→<a href="" class="">ユーザー登録</a></span>
      @show
      </div>
    </div>
  </main>
</div>

</body>
</html>