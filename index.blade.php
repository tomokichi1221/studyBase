<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/setting.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <link href="/css/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="/css/slick.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-left">
        <p class="logo"><img src="{{ asset('image/Study Base.png') }}"></p>
      </div>
      <div class="header-right">
        <p class="menu"><img src="{{ asset('image/menu.png') }}"></p>
      </div>
    </div>
  </header>
  <div class="details">
    <div class="top-wrapper">
      <ul class="slider">
        <li>
          <img src="{{ asset('image/kv01.jpg') }}" alt="image01">
        </li>
        <li>
          <img src="{{ asset('image/kv02.jpg') }}" alt="image02">
        </li>
        <li>
          <img src="{{ asset('image/kv03.jpg') }}" alt="image03">
        </li>
      </ul>
      <h1 class="title">教育の全てはここにある</h1>
      <p class="sub-title">Education × IT</p>
      <div class="button-form">
        <p class="button btn-animation-03" id="login-show"><span>ログイン</span></p>
        <p class="button2 btn-animation-04"><span>新規登録</span></p>
      </div>
      <p class="a"><span></span>Scroll</p>
    </div>
    <div class="imformation" align="center">
      <h2 class="title"><span>I</span>NFORMATION</h2>
      <div class="faq">
        <p class="faq-title"><span class="question">☆講師の皆様へ☆</span><br>どのように生徒の管理をしていますか？<span class="modal-button">+</span></p>
        <div class="answer">
          <p>生徒数が増えると管理が大変ですよね。<br>日々の授業スケジュール、学習管理、自習管理、年間のカリキュラムなど多くの管理が必要です。<br>そんな講師の皆様にうってつけのサービスです。</p>
        </div>
      </div>
      <div class="login-modal" id="login-modal">
        <form class="login">
          <fieldset>
          <legend class="legend">Login</legend>
          <div class="input">
            <input type="email" placeholder="Email" required />
            <span><i class="fa fa-envelope-o"></i></span>
          </div>
          <div class="input">
            <input type="password" placeholder="Password" required />
            <span><i class="fa fa-lock"></i></span>
          </div>
          <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
          </fieldset>
          <div class="feedback">
            login successful <br />
            redirecting...
          </div>
        </form>
      </div>
      <div class="faq">
        <p class="faq-title"><span class="question">☆保護者の皆様へ☆</span><br>生徒の学習状況をどのように確認していますか？<span class="modal-button">+</span></p>
        <div class="answer">
          <p>電話や口頭での確認ではいつ何を行なっているのか正確に把握できません。<br>そんな保護者様にもメリットがあるサービスです。</p>
        </div>
      </div>
    </div>
    <div class="service" align="center">
      <h2 class="title"><span>S</span>ervice</h2>
      <div class="background"></div>
      <div class="koushi">
        <img src="{{ asset('image/koushi.png') }}" alt="image02" class="image">
        <h3 class="sub-title">個人講師の負担を減らして教育に力を入れる</h3>
        <p>生徒の学習管理をシステム化することで<br>本筋である「教育」に注力することができます。<br>StudyBaseは簡易的な入力により生徒の管理を可能にします。</p>
        <a href="#" class="btn-animation-02"><span>MORE<span></a>
      </div>
      <div class="student koushi">
        <img src="{{ asset('image/IMG_2254.png') }}" alt="image" class="image2">
        <h3 class="sub-title">「曖昧な学習」を無くす</h3>
        <p>「曖昧な学習」から「適切な学習」を行うためにも<br>しっかりと学習の記録を取る必要があります。<br>苦手単元を把握することも<br>適切な学習を行うために必要です。</p>
        <a href="#" class="btn-animation-02"><span>MORE<span></a>
      </div>
      <div class="guardian koushi">
        <img src="{{ asset('image/guardian.png') }}">
        <h3 class="sub-title">学習状況を「見える化」する</h3>
        <p>生徒の学習状況の把握は保護者の最大の難関です。<br>StudyBaseでは講師、生徒が記録した学習の記録を閲覧することができます。<br>学習の記録を見える化することで、講師の学習報告とのギャップを無くします。</p>
        <a href="#" class="btn-animation-02"><span>MORE<span></a>
      </div>
    </div>
    <div class="margin">
    </div>
  <footer>
    <div class="top">
      <img class="logo return-top" src="{{ asset('image/Study Base white.png') }}">
    </div>
    <div class="down">
      <p class="list1"><a href="link1">Teacher</a></p>
      <p class="list2"><a href="link2">Student</a></p>
      <p class="list3"><a href="link3">Guardian</a></p>
    </div>
  </footer>
  <script src="/js/script.js"></script>
</body>
</html>
