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
<header class="l-header">
  <div class="p-headerItem">
    <div class="p-headerItem__logo">
      <a href="" class="p-topLink">
        <img src="/images/panda.png" alt="" class="p-topLink__img">
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
  <div class="p-resultWrap">
    <img src="/images/panda.png" style="width: 80px;" alt="" class="p-resultWrap__img p-neaterImg">
    <div class="p-resultWrap__content c-comment">
      <p class="p-resultComment">
        ん？お前12~13万円もらえる可能性あるぞ
      </p>
    </div>
    <section class="p-resultWrap__property">
      <p class="p-resultHeading">1.持ち物</p>
      <div class="p-propertyImg">
        <img src="/images/hannko.png" alt="" class="p-propertyImg__img">
        <img src="/images/memo.png" alt="" class="p-propertyImg__img">
        <img src="/images/pen.png" alt="" class="p-propertyImg__img">
      </div>
      
    </section>
    <section class="p-resultWrap__flow">
      <p class="p-resultHeading">2.流れ</p>
      <p class="p-flowList">(1)書類に書く</p>
      <span class="p-flowText">
        会社からもらった書類を書く。
      </span>
      <p class="p-flowList">(2)面接をする</p>
      <span class="p-flowText">
        会社からもらった書類を書く。
      </span>
      <p class="p-flowList">(3)2時間講義を聞く</p>
      <span class="p-flowText">
        会社からもらった書類を書く。
      </span>
      <p class="p-flowList">(4)月に2回行く</p>
      <span class="p-flowText">
        会社からもらった書類を書く。
      </span>
    </section>
    <section class="p-resultWrap__last">
      <p class="p-resultHeading">3.振り込まれる</p>
    </section>

    <img src="/images/panda.png" style="width: 50px;" alt="" class="p-resultWrap__img2 p-neaterImg">
    <div class="p-resultWrap__content2 c-comment">
      <p class="p-resultComment2">
        左ふきだし文
      </p>
    </div>

    <div class="p-resultWrap__share">
      <span class="p-shareText"><i class="fab fa-twitter"></i>TWEET</span>
    </div>

    <p class="p-resultWrap__again"><a href="#" class="p-againLink">もう一度試してみる</a></p>
    

    
  </div>
</main>