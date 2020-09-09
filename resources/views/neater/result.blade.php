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

<main class="l-main l-main2">
  <div class="p-resultWrap">
    <img src="/images/panda.png" style="width: 80px;" alt="" class="p-resultWrap__img p-neaterImg">
    <div class="p-resultWrap__content c-comment">
      <p class="p-resultComment">
        ん？お前12~13万円もらえる可能性あるぞ
      </p>
    </div>
    <section class="p-resultWrap__property">
      <p class="p-resultHeading">1.持ち物</p>
      <div class="p-property">
        <div class="p-property__container">
          <img src="/images/syashin.png" alt="" class="p-propertyImg">
          <span class="p-propertyName">証明写真2枚<br />(縦3cm✖️横2.5cm)</span>
        </div>
        <div class="p-property__container">
          <img src="/images/inkan.png" alt="" class="p-propertyImg">
          <span class="p-propertyName">はんこ</span>
        </div>
        <div class="p-property__container">
          <img src="/images/tsutyou.png" alt="" class="p-propertyImg">
          <span class="p-propertyName">通帳orキャッシュカード</span>
        </div>
        <div class="p-property__container">
          <img src="/images/mynumber.png" alt="" class="p-propertyImg">
          <span class="p-propertyName">マイナンバーカード</span>
          <span class="p-propertyExe">※マイナンバーカードない場合は、免許証など他の身分証明書が必要です。</span>
        </div>
        <div class="p-property__container">
          <img src="/images/risyokuhyou.png" alt="" class="p-propertyImg">
          <span class="p-propertyName">雇用保険被保険者離職票</span>
        </div>
      </div>
      
    </section>
    <section class="p-resultWrap__flow">
      <p class="p-resultHeading">2.流れ</p>
      <p class="p-flowList">①離職</p>
      <span class="p-flowText">
        離職後、離職票が自宅に届きます。
      </span>
      <p class="p-flowList">②ハローワークへ行く</p>
      <span class="p-flowText">
        上記の持ち物を忘れず、<br/>ハローワークへ行く。
      </span>
      <img src="/images/hellowwork.png" alt="" class="p-flowImg">
      <p class="p-flowList">③説明会へ行く</p>
      <span class="p-flowText">
        約2時間、係員の話を聞いたり、ビデオを見る。
      </span>
      <img src="/images/setumei.png" alt="" class="p-flowImg">

      <img src="/images/panda.png" style="width: 50px;" alt="" class="p-flowIcon p-neaterImg">
      <div class="p-flowContent c-comment">
        <p class="p-flowComment">
          左ふきだし文
        </p>
      </div>

       <span class="p-flowText">
        その後、「雇用保険受給資格者証」と<br/>「失業認定申告書」がもらえる。
      </span>
      <div class="p-flowImgWrap">
        <div class="p-flowImgWrap__item">
          <img src="/images/hihokensyasyou.png" alt="" class="p-flowTwoImg">
          <span class="p-flowImgName">
            雇用保険被保険者証
          </span>
        </div>
        <div class="p-flowImgWrap__item">
          <img src="/images/sitsugyouninteisyo.png" alt="" class="p-flowTwoImg">
          <span class="p-flowImgName">
            雇用保険被保険者証
          </span>
        </div>
      
      </div>
      

      <p class="p-flowList">④月に2回、仕事に就こうと努力する</p>
      <span class="p-flowText">
        ※例：求人への応募<br/>
        ※不合格でも1回のカウント
      </span>
      <img src="/images/oubo.png" alt="" class="p-flowImg">

      <img src="/images/panda.png" style="width: 50px;" alt="" class="p-flowIcon p-neaterImg">
      <div class="p-flowContent c-comment">
        <p class="p-flowComment">
          倍率20倍の求人に奇跡を信じて<br/>ポチッと応募したけど返事来なかったな。。。
        </p>
      </div>

      <p class="p-flowList">⑤4週間に1度ハローワークへ行く</p>
      <span class="p-flowText">
        「失業認定報告書」に求職活動をしたことを記入。
      </span>

      <span class="p-flowExe">※書き方の例</span>
      <img src="/images/shinkokusyo.png" alt="" class="p-flowHoukokuImg">


      <p class="p-flowList">⑥入金！</p>
      <span class="p-flowText">
        ④でハローワークへ行った日から<br />約１週間ほどでお金が振り込まれる。
      </span>
      <img src="/images/tyokin.png" alt="" class="p-flowImg">
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