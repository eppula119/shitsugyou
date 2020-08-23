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
  <div class="p-mypageWrap">
    
    <section class="p-mypageWrap__post">
      <p class="p-heading1 p-heading">投稿した質問</p>
      <div class="p-postItem">
        <span class="p-postItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-postItem__icon"><span class="p-postTotal">5</span></i>
      </div>
      <div class="p-postItem">
        <span class="p-postItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-postItem__icon"><span class="p-postItem__total">5</span></i>
      </div>
      <div class="p-postItem">
        <span class="p-postItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-postItem__icon"><span class="p-postItem__total">5</span></i>
      </div>
      <p class="p-postMore"><i class="fas fa-arrow-right"></i>さらにみる</p>

    </section>
    
    <section class="p-mypageWrap__answer">
      <p class="p-heading2 p-heading">回答した質問</p>
      <div class="p-answerItem">
        <span class="p-answerItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-answerItem__icon"><span class="p-answerItem__total">5</span></i>
      </div>
      <div class="p-answerItem">
        <span class="p-answerItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-answerItem__icon"><span class="p-answerItem__total">5</span></i>
      </div>
      <div class="p-answerItem">
        <span class="p-answerItem__text">なんでお金は減ってくの？</span>
        <i class="far fa-comment p-answerItem__icon"><span class="p-answerItem__total">5</span></i>
      </div>
      <p class="p-answerMore"><i class="fas fa-arrow-right"></i>さらにみる</p>
    </section>

    <section class="p-mypageWrap__prof">
      <p class="p-heading3 p-heading">プロフィール</p>
      <form method="post" action="" class="p-prof">
        <div class="p-profImgContainer">
          <label class="p-profImgContainer__airDrop"><i class="fas fa-user p-userIcon"></i>ドラッグ＆ドロップ
            <input type="file" class="p-profImg" value="ユーザー画像" name="user_img">
          </label>
          <span class="p-profImgContainer__msg">画像の容量は10MB以内に抑えてください。</span>
        </div>

        <p class="p-prof__heading">ニックネーム</p>
        <input type="text" class="p-prof__name">
        <span class="p-prof--err">16文字以内にしてください。</span>
        
        <p class="p-prof__heading">メールアドレス</p>
        <input type="email" class="p-prof__email">
        <span class="p-prof--err">16文字以内にしてください。</span>

        <button class="p-prof__btn c-btn">変更する</button>
      
      </form>
      <p class="p-passChange"><a href="#" class="p-passChange__link">パスワード変更</a></p>
    </section>    
    
  </div>
</main>