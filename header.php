<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="ポートフォリオサイト">
    <title>ポートフォリオ</title>
    <!-- Google Fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </noscript>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" media="print" onload="this.media='all'">
</head>

<body>
    <!-- Header -->
    <header class="l-header">
        <div class="l-header__inner">
            <div class="l-header__wrapper">
                <h1 class="l-header__title">
                    <a href="./" class="l-header__link">
                        <span class="pc-only l-header__text">ポートフォリオ</span>
                        <img src="./assets/images/logo.svg" width="256" height="80" alt="ポートフォリオサイト" class="sp-only l-header__logo">
                    </a>
                </h1>
                <!-- ハンバガーメニューアイコン -->
                <button id="hamburgerMenu" class="hamburger-menu" aria-label="メニュー" aria-expanded="false">
                    <span class="hamburger-menu__line"></span>
                </button><!-- /.hamburger-menu -->
            </div><!-- /.l-header__wrapper -->
            <!-- ドロワーメニュー本体 -->
            <div id="drawerMenu" class="drawer-menu">
                <div class="drawer-menu__content">
                    <nav class="g-nav">
                        <ul class="g-nav__list">
                            <li class="g-nav__item">
                                <a href="./" class="g-nav__link">ホーム</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="#introduction" class="g-nav__link">自己紹介</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="#works" class="g-nav__link">制作実績</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="#skills" class="g-nav__link">スキル</a>
                            </li>
                            <li class="g-nav__item">
                                <a href="#faq" class="g-nav__link">よくある質問</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- お問い合わせボタン -->
                    <div class="g-cta">
                        <a href="#contact" class="g-cta__button">お問い合わせ</a>
                    </div>
                </div><!-- /.drawer-menu__content -->
            </div><!-- /#drawerMenu -->
        </div><!-- /.l-header__inner -->
        <?php wp_head(); ?>
    </header>
