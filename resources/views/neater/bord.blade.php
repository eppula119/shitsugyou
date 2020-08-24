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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<!------------------------------------- ヘッダー ----------------------------------------------->
<header class="l-header p-header">
  <div class="p-headerItem">
    <div class="p-headerItem__logo">
      <a href="" class="p-topLink">
        <img src="images/panda.png" style="width: 80px;" alt="" class="p-topLink__img">
      </a>
    </div>
    <div class="p-headerItem__menu">
      <button class="p-menuBtn">メニュー</button>
      <div class="p-headerMenu"> 
        <ul class="p-menuList">
          <li class="p-menuList__item">マイページ</li>
          <li class="p-menuList__item">アイディ投稿</li>
          <li class="p-menuList__item">気になるリスト</li>
          <li class="p-menuList__item">
            <form action="" method="POST">
              @csrf
              <button type="submit" class="c-logout c-btn" >ログアウト</button>
            </form>
          </li>
        </ul>
      </div>
      
    </div>
    <p class="p-categorySearch"><i class="far fa-list-alt"></i>カテゴリーから探す</p>
      <div class="p-categoryMenu"> 
          <ul class="p-menuList">
            <li class="p-menuList__item">失業給付</li>
            <li class="p-menuList__item">お金</li>
            <li class="p-menuList__item">ハローワーク</li>
            <li class="p-menuList__item">手続方法</li>
            <li class="p-menuList__item">持ち物</li>
          </ul>      
      </div>
  </div>
</header>

<!------------------------------------- メイン画面 ----------------------------------------------->

<main class="l-main">
  <div class="p-bordWrap">
    
      <div class="p-bordItem">
        <span class="p-bordItem__category c-category">失業手当</span>
        <span class="p-bordItem__text">なんでお金は減ってくの？</span>
        <span class="p-bordItem__name">あゆ</span><i class="far fa-comment p-bordItem__icon"><span class="p-bordTotal">5</span></i>
      </div>

      <div class="p-bordItem">
        <span class="p-bordItem__category c-category">失業手当</span>
        <span class="p-bordItem__text">なんでお金は減ってくの？</span>
        <span class="p-bordItem__name">あゆ</span><i class="far fa-comment p-bordItem__icon"><span class="p-bordTotal">5</span></i>
      </div>

      <div class="p-bordItem">
        <span class="p-bordItem__category c-category">失業手当</span>
        <span class="p-bordItem__text">なんでお金は減ってくの？</span>
        <span class="p-bordItem__name">あゆ</span><i class="far fa-comment p-bordItem__icon"><span class="p-bordTotal">5</span></i>
      </div>
　<!--ーーーーーーーーーーーーーーーーーー ページネーション ーーーーーーーーーーーーーーーーーー-->
      <ul class="c-pagenation p-bordPage">
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" ><</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >1</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >2</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >3</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >4</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >5</a>
        </li>
        <li class="c-pagenation__item">
          <a class="c-pageLink" href="#" >></a>
        </li>
      </ul>

    
  </div>
</main>