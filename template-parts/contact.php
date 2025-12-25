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
