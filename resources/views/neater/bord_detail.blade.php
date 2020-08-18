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
  <div class="p-bordDetailWrap">
    <img src="" alt="" class="p-bordDetailWrap__img p-userImg">
    <div class="p-bordDetailWrap__content">
      <p class="p-postMain">
        なんでお金は減ってくの？いくら持ってて良いかわからない。持ち物は皆さん何を持って行っていますか。
      </p>
      <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
      <span class="p-postCategory c-category">失業手当</span>
      <span class="p-postDate c-date">2020/08/18</span>
    </div>

    <p class="p-bordDetailWrap__heading">コメント</p>
    
    <img src="" alt="" class="p-bordDetailWrap__img p-userImg">
    <div class="p-bordDetailWrap__content">
      <p class="p-replyMain">
        ペン・はんこ・雇用保険受給資格者証を持っていけば大丈夫だよ
      </p>
      <span class="p-postDate c-date">2020/08/18</span>
      <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
    </div>

    <img src="" alt="" class="p-bordDetailWrap__img p-userImg">
    <div class="p-bordDetailWrap__content">
      <p class="p-replyName">あゆ</p>
      <p class="p-replyMain">
        ペン・はんこ・雇用保険受給資格者証を持っていけば大丈夫だよ
      </p>
      <span class="p-postDate c-date">2020/08/18</span>
      <button class="p-replyBtn"><i class="fas fa-reply"></i>返信</button>
    </div>


  </div>
  

   

</main>