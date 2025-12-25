<?php get_header(); ?>

<main class="main">
    <!-- FV -->
    <section class="fv">
        <div class="swiper fv__swiper">
            <div class="swiper-wrapper fv__swiper-wrapper">
                <div class="swiper-slide fv__swiper-slide">
                    <img src="./assets/images/fv-1.png" alt="" class="fv__image" fetchpriority="high">
                </div>
                <div class="swiper-slide fv__swiper-slide">
                    <img src="./assets/images/fv-2.png" alt="" class="fv__image" fetchpriority="high">
                </div>
                <div class="swiper-slide fv__swiper-slide">
                    <img src="./assets/images/fv-3.png" alt="" class="fv__image" fetchpriority="high">
                </div>
            </div><!-- /.swiper-wrapper -->
            <!-- ページネーション -->
            <div class="swiper-pagination"></div>
            <!-- 矢印 -->
            <button class="fv__swiper-arrow swiper-button-prev"></button>
            <button class="fv__swiper-arrow swiper-button-next"></button>
        </div><!-- /.fv__swiper -->
        <!-- コンテンツ -->
        <div class="fv__content">
            <h2 lang="en" class="fv__title">Welcome to My Portfolio</h2>
            <span class="fv__my-name">自分の名前</span>
            <p class="fv__catchcopy">キャッチコピーが入ります。</p>
        </div><!-- /.fv__content -->
    </section><!-- /.fv -->

    <!-- 制作実績 works -->
    <section id="works" class="works">
        <div class="l-section__inner works__inner">
            <h2 class="l-section__title">制作実績</h2>
            <div class="works__content">
                <div class="c-tabs">
                    <ul class="c-tabs__list">
                        <li class="c-tabs__item active" tabindex="0">
                            <span class="c-tabs__item-title">静的サイト</span>
                        </li>
                        <li class="c-tabs__item" tabindex="0">
                            <span class="c-tabs__item-title">動的サイト</span>
                        </li>
                    </ul>
                    <div class="c-tabs__content">
                        <!-- 静的サイト -->
                        <div class="c-tabs__panel active">
                            <h3 class="sr-only">静的サイト制作実績</h3>
                            <ul class="works__list">
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="静的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">静的サイト1</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="静的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">静的サイト2</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="静的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">静的サイト3</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="静的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">静的サイト4</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                            </ul>
                        </div><!-- /.c-tabs__panel -->
                        <!-- 動的サイト -->
                        <div class="c-tabs__panel">
                            <h3 class="sr-only">動的サイト制作実績</h3>
                            <ul class="works__list">
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="動的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">動的サイト1</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="動的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">動的サイト2</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="動的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">動的サイト3</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                                <li class="works__item">
                                    <!-- 制作実績アイテム -->
                                    <article class="works__card">
                                        <a href="#" class="works__card-link">
                                            <div class="works__card-image">
                                                <img src="./assets/images/image-works.jpg" alt="動的サイト" class="works__card-img">
                                            </div><!-- /.works__card-image -->
                                            <h4 class="works__card-tile">動的サイト4</h4>
                                            <p class="works__card-keywords">キーワード、キーワード、キーワード</p>
                                        </a>
                                    </article><!-- /.works__item -->
                                </li><!-- /.works__items -->
                            </ul>
                        </div><!-- /.c-tabs__panel -->
                    </div><!-- /.c-tabs__content -->
                </div><!-- /.c-tabs -->
            </div><!-- /.works__content -->
        </div><!-- /.l-section__inner works__inner -->
    </section><!-- /.works -->

    <!-- スキル skills  -->
    <section id="skills" class="skills">
        <div class="l-section__inner skills__inner">
            <h2 class="l-section__title">スキル</h2>
            <div class="skills__content">
                <ul class="skills__list">
                    <!-- HTML5 -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-html.png" width="80" height="80" alt="HTML5" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">HTML5</h3>
                            <p class="skills__item-desc">
                                セマンティックコード、構造化マークアップ、デザイナーの意図を汲み取ってマークアップする、内部SEO対策、アクセシビリティ、ことが可能です。
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- CSS3 -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-css.png" width="80" height="80" alt="CSS3" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">CSS3</h3>
                            <p class="skills__item-desc">
                                デザインを忠実に、BEMを使った設計思想でスタイルアップ
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- jQuery -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-jquery.png" width="80" height="80" alt="jQuery" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">jQuery</h3>
                            <p class="skills__item-desc">
                                CSSアニメーションとjQueryを組み合わせることで、ブラウザの読み込み負荷が最小限のUI/UXを実装することが出来ます。
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- XD -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-wordpress.png" width="80" height="80" alt="WordPress" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">WordPress</h3>
                            <p class="skills__item-desc">
                                既存テーマの編集だけでなく、自作テーマでウェブサイトを構築することが出来ます。また、カスタムタクソノミーやカスタムフィールドを応用して、クライアントが更新しやすいウェブサイトを構築することが可能です。
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- XD -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-xd.png" width="80" height="80" alt="XD" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">XD</h3>
                            <p class="skills__item-desc">
                                デザインカンプからマークアップするのはもちろん、ワイヤーフレームやプロトタイプを作成できます。画像の書き出し、
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- Figma -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-figma.png" width="80" height="80" alt="Figma" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">Figma</h3>
                            <p class="skills__item-desc">
                                デザインカンプからマークアップするのはもちろん、ワイヤーフレームやプロトタイプを作成できます。画像の書き出し、
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- Sourcetree -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-sourcetree.png" width="80" height="80" alt="Sourcetree" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">Sourcetree</h3>
                            <p class="skills__item-desc">
                                バージョン管理システムを使って、複数人でのウェブサイト構築を行うことが可能です。
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                    <!-- Photoshop -->
                    <li class="skills__item">
                        <div class="skills__item-image">
                            <img src="./assets/images/logo-photoshop.png" width="80" height="80" alt="Photoshop" class="skills__item-logo">
                        </div>
                        <div class="skills__item-text">
                            <h3 lang="en" class="skills__item-label">Photoshop</h3>
                            <p class="skills__item-desc">
                                写真の編集やデザインの作成、イラストの作成などができます。
                            </p>
                        </div><!-- /.skills__item-text -->
                    </li>
                </ul>
            </div><!-- /.skills__content -->
        </div><!-- /.l-section__inner skills__inner -->
    </section><!-- /.skills -->

    <!-- 自己紹介 introduction -->
    <section id="introduction" class="introduction">
        <div class="l-section__inner introduction__inner">
            <h2 class="l-section__title">自己紹介</h2>
            <div class="introduction__content">
                <div class="introduction__images">
                    <img src="./assets/images/photo-intoroduction.png" width="256" height="256" alt="自分の名前" class="introduction__profile-image">
                    <ul class="introduction__social-list">
                        <li class="introduction__social-item">
                            <a href="#" class="introduction__social-link">
                                <img src="./assets/images/icon-facebook.svg" width="32" height="32" alt="Facebook" class="introduction__social-icon">
                            </a>
                        </li>
                        <li class="introduction__social-item sp-only">
                            <a href="#" class="introduction__social-link">
                                <img src="./assets/images/icon-twitter.svg" width="32" height="32" alt="Twitter" class="introduction__social-icon">
                            </a>
                        </li>
                        <li class="introduction__social-item pc-only">
                            <a href="#" class="introduction__social-link">
                                <img src="./assets/images/icon-instagram.png" width="32" height="32" alt="Instagram" class="introduction__social-icon">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="introduction__text">
                    <p class="introduction__desc">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                    <p class="introduction__desc">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                    <p class="introduction__desc">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
            </div><!-- /.introduction__content -->
        </div><!-- /.l-section__inner introduction__inner -->
    </section><!-- /.introduction -->

    <!-- よくある質問 FAQ -->
    <section id="faq" class="faq">
        <div class="l-section__inner faq__inner">
            <h2 class="l-section__title">よくある質問</h2>
            <div class="faq__content">
                <ul class="faq__list">
                    <li class="faq__item">
                        <details class="faq__item-details">
                            <summary class="faq__item-summary">連絡する際の対応可能ツールはありますか</summary>
                            <p class="faq__item-content">
                                メール、チャットツール（Slack、Chatwork、Teamsなど）、ビデオ会議ツール（Zoom、Google Meetなど）に対応しております。
                            </p>
                        </details>
                    </li>
                    <li class="faq__item">
                        <details class="faq__item-details">
                            <summary class="faq__item-summary">対応可能な時間帯はいつですか？</summary>
                            <p class="faq__item-content">
                                平日9:00〜18:00が対応可能な時間帯となっております。上記以外の時間帯をご希望の場合は、ご相談ください。
                            </p>
                        </details>
                    </li>
                </ul><!-- /.faq__list -->
            </div><!-- /.faq__content -->
        </div><!-- /.l-section__inner faq__inner -->
    </section><!-- /.faq -->

    <!-- お問い合わせ contact -->
    <section id="contact" class="contact">
        <div class="l-section__inner contact__inner">
            <h2 class="l-section__title">お問い合わせ</h2>
            <div class="contact__content">
                <form action="#" method="post" class="contact__form">
                    <div class="contact__form-content">
                        <!-- お問合せ種別 -->
                        <fieldset class="contact__form-group">
                            <legend class="contact__form-label">
                                <span class="c-required-label">必須</span>
                                <span class="contact__form-label-text">お問い合わせ種別</span>
                            </legend>
                            <div class="contact__form-radiobuttons">
                                <div class="contact__form-radiobutton">
                                    <input type="radio" id="inquiry-work" name="inquiry-type" class="contact__form-radiobutton-input" checked>
                                    <span class="contact__form-radiobutton-custom"></span>
                                    <label for="inquiry-work" class="contact__form-radiobutton-label">
                                        お仕事のご依頼・ご相談
                                    </label>
                                </div><!-- contact__form-radiobutton -->
                                <div class="contact__form-radiobutton">
                                    <input type="radio" id="inquiry-estimate" name="inquiry-type" class="contact__form-radiobutton-input">
                                    <span class="contact__form-radiobutton-custom"></span>
                                    <label for="inquiry-estimate" class="contact__form-radiobutton-label">
                                        お見積りのご依頼
                                    </label>
                                </div><!-- contact__form-radiobutton -->
                                <div class="contact__form-radiobutton">
                                    <input type="radio" id="inquiry-other" name="inquiry-type" class="contact__form-radiobutton-input">
                                    <span class="contact__form-radiobutton-custom"></span>
                                    <label for="inquiry-other" class="contact__form-radiobutton-label">
                                        その他
                                    </label>
                                </div><!-- contact__form-radiobutton -->
                            </div><!-- contact__form-radiobuttons -->
                        </fieldset>
                        <div class="contact__form-column">
                            <!-- お名前 -->
                            <div class="contact__form-group">
                                <label for="name" class="contact__form-label">
                                    <span class="c-required-label">必須</span>
                                    <span class="contact__form-label-text">お名前</span>
                                </label>
                                <input type="text" id="name" name="name" class="contact__form-input" required>
                            </div><!-- /.contact__form-group -->
                            <!-- 貴社名 -->
                            <div class="contact__form-group">
                                <label for="company-name" class="contact__form-label">
                                    <span class="c-required-label">必須</span>
                                    <span class="contact__form-label-text">貴社名</span>
                                </label>
                                <input type="text" id="company-name" name="company-name" class="contact__form-input" required>
                            </div><!-- /.contact__form-group -->
                            <!-- メールアドレス -->
                            <div class="contact__form-group">
                                <label for="email" class="contact__form-label">
                                    <span class="c-required-label">必須</span>
                                    <span class="contact__form-label-text">メールアドレス</span>
                                </label>
                                <input type="email" id="email" name="email" class="contact__form-input" required>
                            </div>
                            <!-- 本サイトを知ったきっかけ -->
                            <div class="contact__form-group">
                                <label for="how-found" class="contact__form-label">
                                    <span class="contact__form-label-text">本サイトを知ったきっかけ</span>
                                </label>
                                <div class="contact__form-select-wrapper">
                                    <select name="how-found" id="how-found" class="contact__form-select">
                                        <option value="">選択してください</option>
                                        <option value="search">検索エンジン（Google など）</option>
                                        <option value="sns">SNS（Twitter、Instagram など）</option>
                                        <option value="recommendation">知人の紹介</option>
                                        <option value="ad">Web 広告</option>
                                        <option value="portfolio-site">ポートフォリオサイト</option>
                                        <option value="business-site">事業サイト</option>
                                        <option value="direct">直接訪問</option>
                                        <option value="other">その他</option>
                                    </select>
                                </div><!-- /.contact__form-select-wrapper -->
                            </div>
                            <!-- お問い合わせ件名 -->
                            <div class="contact__form-group">
                                <label for="inquiry-title" class="contact__form-label">
                                    <span class="contact__form-label-text">お問い合わせ件名</span>
                                </label>
                                <input type="text" id="inquiry-title" name="inquiry-title" class="contact__form-input">
                            </div>
                        </div><!-- /.contact__form-column -->
                        <!-- お問い合わせ本文 -->
                        <div class="contact__form-group">
                            <label for="inquiry-content" class="contact__form-label">
                                <span class="contact__form-label-text">お問い合わせ本文</span>
                            </label>
                            <textarea id="inquiry-content" name="inquiry-content" class="contact__form-input contact__form-input--textarea"></textarea>
                        </div>
                        <div class="contact__form-group">
                            <button type="submit" class="contact__form-submit">送信</button>
                        </div>
                    </div><!-- /.contact__form-content -->
                </form>
            </div><!-- /.contact__content -->
        </div><!-- /.l-section__inner contact__inner -->
    </section>
</main>

<?php get_footer(); ?>
