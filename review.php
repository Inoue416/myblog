<?php
$save_cont = "";
$fp = fopen("./review_save/save.txt", "a");
$save_cont = str_replace(array("\r\n", "\r", "\n"), '\n', $_POST["review_cont"]);
fwrite($fp, $save_cont . PHP_EOL);
fclose($fp);
?>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <title>レビュー  だらだらライフ</title>
    <meta name="description" content="色々な情報を発信">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header class="page-header">
      <h1><a href=index.html><img class="logo" src="./images/logo.png" alt="だらだらライフ"></a></h1>
      <nav>
        <ul class=main-nav>
          <li><a href="index.html">ホーム</a></li>
          <li><a href="contact.html">レビュー</a></li>
        </ul>
      </nav>
    </header>
    <hr></hr>
    <div class="wrapper">
    <div class="main-cont">
    <div class=cont-title><h1>ご意見ありがとうございます。</h1></div>
    <p>
      &emsp;レビューありがとうございます。<br>
      励みになります。サイトの改善に日々努めていきますので、<br>
      これからも当サイトをよろしくお願いします。<br>
      この後も、当サイトをお楽しみください。
    </p>
    </div>
    <aside>
      <h3 class="sub-title">コンテンツ</h3>
      <ul class="sub-menu">
        <li><a href="travel.html">旅行</a></li>
        <li><a href="game.html">ゲーム・漫画・アニメ</a></li>
        <li><a href="knowledge.html">雑学</a></li>
      </ul>
    </aside>
    </div>
    <footer>
      <a href="https://twitter.com/daradara_life11?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="en" data-show-count="false">Follow @daradara_life11</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <p><small>&copy; だらだらライフ</small></p>
    </footer>
  </body>
</html>
