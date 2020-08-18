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

  <div class="p-postWrap">
    <img src="" alt="" class="p-postWrap__img p-neaterImg">
    <div class="p-postWrap__content c-comment">
      <p class="p-postComment">
       俺は休む。あとはみんなから情報もらえ。
      </p>
    </div>
    
    <form method="post" class="p-postWrap__form">

      <span class="p-postHeading">内容</span>
      <textarea name="content" class="p-postContent" cols="30" rows="10"></textarea>
      <span class="c-invalid" role="alert">
        <strong></strong>
      </span>
      <span class="p-postHeading">カテゴリー</span>
      <select name="category_id" class="p-postCategory" v-model="category_id">
        <option value="1" class="p-selectCategory">失業給付</option>
        <option value="2" class="p-selectCategory">お金</option>
        <option value="3" class="p-selectCategory">ハローワーク</option>
        <option value="4" class="p-selectCategory">手続方法</option>
        <option value="5" class="p-selectCategory">持ち物</option>
      </select>
      <span class="c-invalid" role="alert">
        <strong></strong>
      </span>
      <input type="submit" class="c-btnPost c-btn" value="投稿する">
    </form>
    
  </div>
</main>
