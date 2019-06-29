<?php
error_reporting(E_ALL);
ini_set('display_errors','on');

if(!empty($_POST)){
    $to = $_POST['email'];
    $comment = $_POST['comment'];
    $msg = '';

    include('php/mail.php');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIP</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>

    <header class="header">
        <div class="header-logo">
            <a href="https://wip.tokyo">
                <img src="img/logo.png" class="logo">
            </a>
        </div>
        <div class="menu-trigger js-toggle-sp-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="nav-menu js-toggle-sp-menu-target">
            <ul class="menu">
                <li class="menu-item"><a href="#skill" class="menu-link">SKILLS</a></li>
                <li class="menu-item"><a href="#history" class="menu-link">HISTORY</a></li>
                <li class="menu-item"><a href="#portfolio" class="menu-link">PORTFOLIO</a></li>
                <li class="menu-item"><a href="#contact" class="menu-link">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1 class="hero-title">[Work_In_Progress...<span class="blink-hero-title">|</span>]</h1>
        </section>

        <section class="container js-fadein" id="skill">
            <h2 class="container-title">SKILLS</h2>
            <div class="container-body">
                <div class="panel-group">
                    <div class="panel"><img src="img/html5-logo.svg" class="panel-item"></div>
                    <div class="panel"><img src="img/css3-logo.svg" class="panel-item"></div>
                    <div class="panel"><img src="img/javascript-logo.svg" class="panel-item"></div>
                    <div class="panel"><img src="img/jquery-logo.svg" class="panel-item"></div>
                    <div class="panel"><img src="img/php-logo.svg" class="panel-item"></div>
                </div>
            </div>
        </section>

        <section class="container js-fadein" id="history">
            <h2 class="container-title">HISTORY</h2>
            <div class="history-container-body">
                <ul class="timeline">
                    <li class="timeline-list">
                        <p class="timeline-date">2015年</p>
                        <div class="timeline-content">
                            <h3>会社設立</h3>
                            <p>WordPressでホームページ制作、メディア運営等</p>
                        </div>
                    </li>
                    <li class="timeline-list">
                        <p class="timeline-date">2017年</p>
                        <div class="timeline-content">
                            <h3>退職後、農業へ</h3>
                            <p>温湿度・気圧を自動測定するためラズパイを導入。<br>測定結果のグラフ化、Blynkでリアルタイムモニタリング、1時間毎にツイート。</p>
                        </div>
                    </li>
                    <li class="timeline-list">
                        <p class="timeline-date">2019年</p>
                        <div class="timeline-content">
                            <h3>退職後、エンジニア志望</h3>
                            <p>フロントエンド：<a href="https://webukatu.com/">ウェブカツ</a>、バックエンド：<a href="https://bcts369dojo.github.io/">bcts369dojo</a>にて学習中。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="container js-fadein" id="portfolio">
            <h2 class="container-title">PORTFOLIO</h2>
            <div class="portfolio-container-body">
                <div class="panel-group">
                    <div class="portfolio-panel">
                        <div class="panel-body">
                        <img src="img/WIP.png">
                        </div>
                        <div class="panelCover panelCover-a">
                            <a href="https://wip.tokyo"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <div class="panel-foot">Work In Progress</div>
                    </div>
                    <div class="portfolio-panel">
                        <div class="panel-body">
                        <img src="img/BIG3-WorkoutLog.png">
                        </div>
                        <div class="panelCover panelCover-a">
                                <a href="https://big3.wip.tokyo"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <div class="panel-foot">BIG3 WorkoutLog</div>
                    </div>
                    <div class="portfolio-panel">
                        <div class="panel-body">
                        <img src="img/comingsoon.png">
                        </div>
                        <div class="panelCover panelCover-a">
                                <i class="fas fa-external-link-alt"></i>
                        </div>
                        <div class="panel-foot"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container js-fadein" id="contact">
            <h2 class="container-title">CONTACT</h2>
            <div class="contact-container-body">
                <form method="post">
                <p><?php if(!empty($msg)) echo $msg; ?></p>

                    <div class="form-group">
                        <label>メールアドレス<span class="help-block"></span>
                        <input type="text" class= "valid-email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">
                        </label>
                    </div>

                    <div class="form-group">
                        <label>内容<span class="help-block"></span>
                        <textarea name="comment" id="count-text" class="valid-textarea"><?php if(!empty($_POST['comment'])) echo $_POST['comment'];?></textarea>
                        </label>
                    </div>
                    <div class="counter-container">
                        <span class="show-count-text">0</span>/250
                    </div>

                    <input type="submit" name="submit" value="送信">
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="footer-logo"><img src="img/logo.png"></div>
            <ul class="social-items">
                <li class="social-item"><a href="https://twitter.com/Take_jpn1"><i class="fab fa-twitter"></i></a></li>
                <li class="social-item"><a href="https://qiita.com/Take_jpn"><img src="img/qiita-favicon.png" alt=""></a></li>
                <li class="social-item"><a href="https://github.com/Take90"><i class="fab fa-github"></i></a></li>
                <li class="social-item"><a href="https://www.wantedly.com/users/26192390"><img src="img/wantedly_mark.png" alt="wantedly"></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
                <p>Copyright <a href="https://wip.tokyo">wip.tokyo</a>. All Rights Reserved</p>
        </div>
    </footer>
    <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>