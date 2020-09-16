@extends('auth/login')

@section('title', 'ユーザー登録')

    @section('SNS登録')
      <div class="p-authSns">
        <button class="p-authSns__Btn"><i class="fab fa-twitter"></i> Twitterで登録</button>
      </div>
    @endsection
    @section('フォーム')
      <form method="post" class="c-form">
        @csrf
    @endsection

    @section('名前') 
        <span class="c-form__heading">ニックネーム</span>
        <input type="text" name="name" class="c-form__input is-invalid" value="" required autocomplete="name" autofocus placeholder="例：ニーター">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
    @endsection
      
    @section('パスワード確認')
        <span class="c-form__heading">パスワード再入力</span>
        <input type="password" name="password" class="c-form__input is-invalid"　required autocomplete="current-password" placeholder="※7文字以上半角英数字">
        <span class="c-invalid" role="alert">
          <strong></strong>
        </span>
    @endsection
    @section('パスワード忘れリンク')
    @endsection
   
    
       
    @section('認証ボタン')
       <input type="submit" class="c-btnRegister c-btn" value="ユーザー登録">
    @endsection
     
    @section('リンク')
      <span class="p-formRule">登録することで、利用規約とプライバシーポリシーに同意したものとみなされます。</span>
    @endsection
