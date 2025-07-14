<?php get_header(); ?>




<section class="errorPageSec">
    <div class="errorPageSec__innerArea">
        <p class="errorPageSec__text">
            ご指定いただいたページが見つかりませんでした。<br>
            お探しのページは一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。
        </p>

        <form method="get" action="<?php echo home_url( '/' ); ?>" class="errorPageSec__textSearchForm">
            <label class="errorPageSec__textBoxWrap">
                <input class="errorPageSec__textBoxInput" type="text" name="s" value="" placeholder="キーワードを入力してください。"><!-- name="s" とするとWPデフォルトのサイト内検索機能が使えます。 -->
            </label>

            <label class="errorPageSec__searchBtnWrap">
                <span class="errorPageSec__SearchBtnText">検索</span>
                <input class="errorPageSec__SearchBtnInput" type="submit" name="" value="">
            </label>
        </form>

        <div class="errorPageSec__bnrArea">
            <a href="<?php echo home_url(); ?>" class="errorPageSec__bnr">
                <span class="errorPageSec__bnrText">トップページへ戻る</span>
            </a>
        </div>
    </div>
</section>




<?php get_footer(); ?>
