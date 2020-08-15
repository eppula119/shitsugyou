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
                  <button type="submit" class="p-logout"></button>
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

  <section id="ideas">
  
    <div class="p-category">
      <ul class="p-category__items">
        <li class="p-categoryItem">カテゴリー</li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">マッチング</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">掲示板</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">SNS</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">シェアリング</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">ECサイト</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">情報配信</a></li>
        <li class="p-categoryItem"><a href="#" class="p-categoryLink">その他</a></li>
      </ul>
    </div>

    <div class="p-refine">
      <form method="post" action="#" class="p-refineForm">
        <select name="価格" class="p-refineForm__select">
          <option value="1" class="p-selectItem">価格の高い順</option>
          <option value="2" class="p-selectItem">価格の安い順</option>
        </select>
        <select name="投稿日" class="p-refineForm__select">
          <option value="1" class="p-selectItem">新しい順</option>
          <option value="2" class="p-selectItem">古い順</option>
        </select>
        <input type="submit" class="p-searchBtn" placeholder="検索">
      </form>
    </div>
  
<!--ーーーーーーーーーーーーーーーーーー アイデア複数表示 ーーーーーーーーーーーーーーーーーー-->
    <div class="p-ideas">
    
      <div class="p-idea">
        <img src="" alt="" class="p-idea__img">
        
        <div class="p-itemCover">
          <p class="p-itemCover__outline">
            気温や湿度を入力し、最も目覚めの良いアラームを自動で選択し…
          </p>
          <a href="#" class="p-itemCover__link">詳細を見る<i class="fas fa-search-plus p-itemCover__icon"></i></a>
        </div>
          
        <div class="p-idea__wrap">
          <p class="p-ideaTitle">スッキリ目覚まし！</p>
          <span class="p-ideaCategory c-category">マッチング</span><span class="p-ideaDay c-day">2020/3/15</span><br>
          <i class="fas fa-star p-ideaStar c-star"></i><span class="p-ideaMouth">4.9(48)</span><span class="p-ideaPrice c-price">10,000円</span>
        </div>
      </div>
  

    </div>



  </section>
  
</main>


<div class="l-footer">
    <ul class="p-footerMenu">
      <li class="p-footerMenu__list">特定商取引法</li>
      <li class="p-footerMenu__list">プライバシーポリシー</li>
      <li class="p-footerMenu__list">Inspiration</li>
    </ul>
</div>

</body>
</html>