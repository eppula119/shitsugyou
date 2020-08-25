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
  <div class="p-bordDetailWrap">
    <div class="p-bordDetailWrap__content">
      <div class="p-faceicon">
        <img src="/images/panda.png" style="width: 50px;" alt="" class="p-faceicon__img">
      </div>
      <div class="p-says">
        <p class="p-says__main">
          なんでお金は減ってくの？いくら持ってて良いかわからない。持ち物は皆さん何を持って行っていますか。
        </p>
        <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
        <span class="p-postDate c-date">2020/08/18</span>
        <span class="p-postCategory c-category">失業手当</span>
      </div>
    </div>

    <p class="p-bordDetailWrap__heading">コメント</p>

    <div class="p-replyWrap">
      <div class="p-faceicon">
        <img src="/images/panda.png" style="width: 50px;" alt="" class="p-faceicon__img">
        <span class="p-faceicon__name">あゆ</span>
      </div>
      <div class="p-says">
        <p class="p-says__main">
          なんでお金は減ってくの？いくら持ってて良いかわからない。持ち物は皆さん何を持って行っていますか。
        </p>
        <span class="p-postDate c-date">2020/08/18</span>
        <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
      </div>
    </div>

    
    <div class="p-returnWrap">
      <div class="p-faceicon">
        <img src="/images/panda.png" style="width: 50px;" alt="" class="p-faceicon__img">
      </div>
      <div class="p-says">
        <p class="p-says__name">あゆ</p>
        <p class="p-says__main">
          なんでお金は減ってくの？いくら持ってて良いかわからない。持ち物は皆さん何を持って行っていますか。
        </p>
        <span class="p-postDate c-date">2020/08/18</span>
        <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
      </div>
    </div>

   


  </div>
  

   

</main>