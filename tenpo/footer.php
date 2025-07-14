
<?php if(!is_home()): get_template_part('_inc/block/parts', 'inquiry'); endif; ?>

</main><!-- siteContent -->
<!-- //////////////////// CONTENT END //////////////////// -->




<!-- //////////////////// FOOTER START //////////////////// -->
<a class="backToTop js-toTop u-pcDb" href="#">
    <div class="backToTop__inner">
        <div class="backToTop__arrow"></div>
        <p class="backToTop__label">TOP</p>
    </div>
</a>
<footer class="siteFooter">
    <div class="siteFooter__innerArea wow animate__animated animate__fadeInUp">
        <div class="siteFooter__clmArea">
            <div class="siteFooter__leftArea">
                <h2 class="siteFooter__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/logo.png" alt="店舗アプリ">
                </h2>
                <span class="siteFooter__caption">ソリューション型<br class="u-spDb">アプリプラットフォーム</span>
            </div>

            <div class="siteFooter__rightArea">
                <nav class="siteFooter__nav">
                    <ul class="siteFooter__pageList">
                        <li class="siteFooter__pageItem">
                            <span class="siteFooter__pageTtl">サービス</span>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="<?php echo home_url()?>/function" class="siteFooter__pageLink">機能一覧</a>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="<?php echo home_url()?>/tips" class="siteFooter__pageLink">アプリ活用のヒント</a>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="<?php echo home_url()?>/voice" class="siteFooter__pageLink">お客様の声</a>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="<?php echo home_url()?>/case" class="siteFooter__pageLink">導入事例</a>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="<?php echo home_url()?>/faq" class="siteFooter__pageLink">よくある質問</a>
                        </li>
                    </ul>
                    <ul class="siteFooter__pageList">
                        <li class="siteFooter__pageItem">
                            <span class="siteFooter__pageTtl">会社情報</span>
                        </li>
                        <li class="siteFooter__pageItem">
                            <a href="https://www.trance-media.co.jp/" class="siteFooter__pageLink" target="_blank">会社概要</a>
                        </li>
                    </ul>
                    <div class="siteFooter__btn">
                        <a href="<?php echo home_url()?>/contact" class="btnOrange siteFooter__btnLink">お問い合わせ</a>
                        <a href="<?php echo home_url()?>/consult" class="btnOrange siteFooter__btnLink">オンライン相談</a>
                        <span class="siteFooter__tel">0800-888-2794</span>
                        <span class="siteFooter__hr">営業時間：平10:00〜19:00</span>
                    </div>
                </nav>
            </div>
        </div>

        <p class="siteFooter__copy">COPYRIGHT &copy; trance media GP. All Rights Reserved.</p>
    </div>
</footer>
<!-- //////////////////// FOOTER END //////////////////// -->



<?php wp_footer(); ?>
</body>
</html>
