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
        <img src="/images/panda.png"  alt="" class="p-topLink__img">
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
  <div class="p-startWrap">
    <img src="/images/panda.png" style="width: 100px" alt="" class="p-startWrap__img p-neaterImg">
    <div class="p-startWrap__content c-comment">
      <p class="p-startComment">
        メンドクセーけど、お前はお金もらえるか俺が教えてやるよ。めんどくさいな。。。
      </p>
      <form action="" class="p-startForm">
        <input type="checkbox" class="p-startForm__check"><span class="p-startForm__rule"><a href="#" class="p-ruleLink">利用規約</a>に同意</span>
        <button class="p-startForm__btn c-btn">始める</button>
      </form>

    </div>
  </div>
</main>




</body>
</html>