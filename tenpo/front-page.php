<?php
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページを教える
?>

<section class="secKv">
    <div class="secKv__inner">
        <div class="secKv__content">
            <span class="secKv__contentSpan">専任サポート</span>
            <span class="secKv__contentSpanX">x</span>
            <div class="secKv__contentFlex">
                <span class="secKv__contentSpan">多機能</span>
                <span class="secKv__contentSpan02">で、</span>
            </div>
            <span class="secKv__contentSpan03">あなたの理想のアプリを</span>
            <div class="secKv__contentFlex">
                <span class="secKv__contentSpan04">ノーコード</span>
                <span class="secKv__contentSpan03">で。</span>
            </div>
            <ul class="secKv__list">
                <li class="secKv__listItem">ビジネス課題に最適化した機能をカスタマイズ</li>
                <li class="secKv__listItem">低コストで≈導入から運用まで対応</li>
                <li class="secKv__listItem">成功までのプロセスを万全サポート</li>
            </ul>
            <div class="secKv__btn">
                <a href="<?php echo home_url() ?>/contact" class="btnOrange secKv__btnItem">お問い合わせ</a>
                <a href="<?php echo home_url() ?>/download" class="btnOrange02 secKv__btnItem">資料ダウンロード</a>
            </div>

        </div>
        <div class="secKv__content02">
            <figure class="secKv__fgr01">
                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secKv_img-01.png"
                    alt="店舗アプリ">
            </figure>
            <div class="secKv__txtBnr">
                <div class="secKv__txtBnrFlex">
                    <div class="secKv__txtBnrFlex01">
                        <span class="secKv__txtBnrFlex01Txt u-mr">導入社数</span>
                        <span class="secKv__txtBnrFlex01Txt">累計</span>
                        <span class="secKv__txtBnrFlex01Num">1,000</span>
                        <span class="secKv__txtBnrFlex01Txt">社</span>
                    </div>
                    <div class="secKv__txtBnrFlex01">
                        <span class="secKv__txtBnrFlex01Txt">店舗数</span>
                        <span class="secKv__txtBnrFlex01Num">10,000</span>
                        <span class="secKv__txtBnrFlex01Txt">店舗</span>
                    </div>
                </div>
                <span class="secKv__txtBnrSpan">※ 社数・店舗数は、アプリ開発の運営元・株式会社トランスメディアGPの累計導入数</span>
            </div>
        </div>
    </div>
</section>


<?php $companies = get_field('top_companies', 'option');
?>
<?php if ($companies): ?>
<section class="secCompanies wow animate__animated animate__fadeInUp">
    <div class="secCompanies__inner">
        <div class="secCompanies__slider swiper">
            <div class="swiper-wrapper secCompanies__sliderWrapper">
                <?php foreach ($companies as $company): ?>
                    <div class="secCompanies__sliderItem swiper-slide">
                        <img src="<?php echo $company['img']['url']; ?>" alt="<?php echo $company['img']['alt']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>
<?php endif; ?>

<section class="secAbout">
    <div class="secAbout__inner">
        <h2 class="secAbout__header wow animate__animated animate__fadeInUp">
            <span class="secAbout__headerTxt">店舗アプリ</span>
            <span class="secAbout__headerSpan">とは？</span>
        </h2>
        <p class="secAbout__headerCap wow animate__animated animate__fadeInUp">店舗アプリは店舗運営に必要な機能を網羅し、<br class="u-spDb">あなたのビジネスの成長をサポートします。</p>
        <div class="secAbout__content">
            <div class="secAbout__desc wow animate__animated animate__fadeInUp">
                <span class="secAbout__descTtl">直感的な操作性で誰でも簡単に使えます</span>
                <ul class="secAbout__descList">
                    <li class="secAbout__descListItem">クラウド型で場所を選ばず利用可能</li>
                    <li class="secAbout__descListItem">複数店舗の一元管理に対応</li>
                    <li class="secAbout__descListItem">充実したサポート体制</li>
                    <li class="secAbout__descListItem">定期的な機能アップデート</li>
                    <li class="secAbout__descListItem">セキュリティ対策も万全</li>
                </ul>
            </div>
            <figure class="secAbout__fgr wow animate__animated animate__fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secAbout_img-01.png"
                    alt="店舗アプリ">
            </figure>
        </div>
    </div>
</section>

<section class="secProblems">
    <div class="secProblems__inner">
        <h2 class="secProblems__header wow animate__animated animate__fadeInUp">
            <span class="secProblems__headerBl">店舗経営・マーケティング</span><span
                class="secProblems__headerSpan">に関する</span><br><span class="secProblems__headerSpan">こんな</span><span
                class="secProblems__headerBl">課題</span><span class="secProblems__headerSpan">ありませんか？</span>
        </h2>
        <div class="secProblems__list">
            <div class="secProblems__listItem wow animate__animated animate__fadeInUp">
                <h3 class="secProblems__listItemTtl">お客さまの来店が<br>”一度きり”で終わってしまう</h3>
                <figure class="secProblems__listItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secProblems_img-01.png"
                        alt="お客さまの来店が”一度きり”で終わってしまう">
                </figure>
                <p class="secProblems__listItemTxt">費用をかけて新規集客に力を入れても<br>リピーターになってもらえない。</p>
            </div>
            <div class="secProblems__listItem wow animate__animated animate__fadeInUp">
                <h3 class="secProblems__listItemTtl">独自性の打ち出しが弱く<br>競合との差別化ができていない</h3>
                <figure class="secProblems__listItemFgr figure02">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secProblems_img-02.png"
                        alt="独自性の打ち出しが弱く競合との差別化ができていない">
                </figure>
                <p class="secProblems__listItemTxt">サービスや見せ方に独自性がなく、<br>自店ならではの魅力が伝えられていない。</p>
            </div>
            <div class="secProblems__listItem wow animate__animated animate__fadeInUp">
                <h3 class="secProblems__listItemTtl">知識のあるスタッフがおらず<br>アプリを使いこなせない</h3>
                <figure class="secProblems__listItemFgr figure03">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secProblems_img-03.png"
                        alt="知識のあるスタッフがおらずアプリを使いこなせない">
                </figure>
                <p class="secProblems__listItemTxt">アプリを導入したものの、うまく活用できず効果を実感できていない。</p>
            </div>
        </div>
    </div>
</section>

<section class="secSolution">
    <div class="secSolution__inner">
        <h2 class="secSolution__header wow animate__animated animate__fadeInUp"><span class="secSolution__headerYl">店舗アプリ</span><span
                class="secSolution__headerSpan">で</span>解決できます！</h2>

        <div class="secSolution__list u-pcDb wow animate__animated animate__fadeInUp">
            <div class="secSolution__listItem u-sol01">
                <h3 class="secSolution__listItemTtl">リピーター獲得につながる<br>強力な機能を多数備えています</h3>
                <figure class="secSolution__listItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-01.png"
                        alt="リピーター獲得につながる強力な機能を多数備えています">
                </figure>
                <p class="secSolution__listItemTxt">お得なクーポン配信やスタンプ付与、プッシュ通知によるリマインドなど、顧客との接点を継続的に築ける機能が多数。</p>
            </div>
            <div class="secSolution__listItem u-sol02">
                <h3 class="secSolution__listItemTtl">ブランディング強化に繋がる<br>オリジナルデザインが構築可能</h3>
                <figure class="secSolution__listItemFgr figure02">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-02.png"
                        alt="ブランディング強化に繋がるオリジナルデザインが構築可能">
                </figure>
                <p class="secSolution__listItemTxt">お店の世界観を反映したデザインで、統一感あるブランディングが可能に。他店との差別化にもつながります。</p>
            </div>
            <div class="secSolution__listItem u-sol03">
                <h3 class="secSolution__listItemTtl">企画から導入から運用まで<br>アプリのプロがしっかりサポート</h3>
                <figure class="secSolution__listItemFgr figure03">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-03.png"
                        alt="企画から導入から運用までアプリのプロがしっかりサポート">
                </figure>
                <p class="secSolution__listItemTxt">経験豊富な専任スタッフが集客成功までしっかりサポートします。リプレイス案件も多数対応しています。</p>
            </div>
            <div class="secSolution__listItem u-full is-visible">
                <span class="secSolution__listItemFullTtl">来店促進に強力な機能が多数あります</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <ul class="secSolution__listItemFullDescList">
                            <li class="secSolution__listItemFullDescListItem">プッシュ通知</li>
                            <li class="secSolution__listItemFullDescListItem">デジタルスタンプカード</li>
                            <li class="secSolution__listItemFullDescListItem">クーポン</li>
                            <li class="secSolution__listItemFullDescListItem">誕生日クーポン</li>
                            <li class="secSolution__listItemFullDescListItem">会員証</li>
                            <li class="secSolution__listItemFullDescListItem">スコア/ステージ</li>
                            <li class="secSolution__listItemFullDescListItem">デジタルキャンペーン</li>
                            <li class="secSolution__listItemFullDescListItem">多言語</li>
                        </ul>
                        <p class="secSolution__listItemFullTxt">集客やリピーター獲得を強化する機能が満載。<br>ポイント機能や会員特典などオプション機能<br
                                class="u-pcDb">も豊富。</p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-04.png"
                            alt="来店促進に強力な機能が多数あります">
                    </figure>
                </div>
            </div>
            <div class="secSolution__listItem u-full">
                <span class="secSolution__listItemFullTtl">自由度が高くオリジナルデザインが可能</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <ul class="secSolution__listItemFullDescList">
                            <li class="secSolution__listItemFullDescListItem">フリーレイアウト</li>
                            <li class="secSolution__listItemFullDescListItem">フリーページ</li>
                            <li class="secSolution__listItemFullDescListItem">フォント選択</li>
                            <li class="secSolution__listItemFullDescListItem">ホームタブ</li>
                            <li class="secSolution__listItemFullDescListItem">会員証フリーデザイン</li>
                            <li class="secSolution__listItemFullDescListItem">Googleビジネスプロフィール</li>
                            <li class="secSolution__listItemFullDescListItem">RSS</li>
                            <li class="secSolution__listItemFullDescListItem">アプリ内webビュー</li>
                        </ul>
                        <p class="secSolution__listItemFullTxt">
                            様々なレイアウト設定を自由自在に行い、<br>自社のオリジナル性を反映したアプリを<br>制作することができます。​</p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-05.png"
                            alt="自由度が高くオリジナルデザインが可能">
                    </figure>
                </div>
            </div>
            <div class="secSolution__listItem u-full">
                <span class="secSolution__listItemFullTtl">専任スタッフの手厚いサポート</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <p class="secSolution__listItemFullTxt">
                            アプリ構築、運用に精通した担当チームがア<br>プリの企画・デザイン・構築からストア申請<br>まで全てをサポートします。<br><br>他社アプリサービスからのリプレイス案件も<br>多数対応しています。<br><br>今アプリを導入した成果を感じられてない方<br>は是非お問い合わせ下さい。
                        </p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-06.png"
                            alt="専任スタッフの手厚いサポート">
                    </figure>
                </div>
            </div>
        </div>

        <div class="secSolution__list u-spDb">
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-sol01">
                <h3 class="secSolution__listItemTtl">リピーター獲得につながる<br>強力な機能を多数備えています</h3>
                <figure class="secSolution__listItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-01.png"
                        alt="リピーター獲得につながる強力な機能を多数備えています">
                </figure>
                <p class="secSolution__listItemTxt">お得なクーポン配信やスタンプ付与、プッシュ通知によるリマインドなど、顧客との接点を継続的に築ける機能が多数。</p>
                <div class="secSolution__btnCont">
                    <button class="secSolution__button">
                        <span class="secSolution__buttonLineVer"></span>
                        <span class="secSolution__buttonLineHor"></span>
                    </button>
                </div>

            </div>
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-full is-visible modal01">
                <span class="secSolution__listItemFullTtl">来店促進に強力な機能が多数あります</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <ul class="secSolution__listItemFullDescList">
                            <li class="secSolution__listItemFullDescListItem">プッシュ通知</li>
                            <li class="secSolution__listItemFullDescListItem">デジタルスタンプカード</li>
                            <li class="secSolution__listItemFullDescListItem">クーポン</li>
                            <li class="secSolution__listItemFullDescListItem">誕生日クーポン</li>
                            <li class="secSolution__listItemFullDescListItem">会員証</li>
                            <li class="secSolution__listItemFullDescListItem">スコア/ステージ</li>
                            <li class="secSolution__listItemFullDescListItem">デジタルキャンペーン</li>
                            <li class="secSolution__listItemFullDescListItem">多言語</li>
                        </ul>
                        <p class="secSolution__listItemFullTxt">集客やリピーター獲得を強化する機能が満載。<br>ポイント機能や会員特典などオプション機能<br
                                class="u-pcDb">も豊富。</p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-04.png"
                            alt="来店促進に強力な機能が多数あります">
                    </figure>
                </div>
            </div>
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-sol02">
                <h3 class="secSolution__listItemTtl">ブランディング強化に繋がる<br>オリジナルデザインが構築可能</h3>
                <figure class="secSolution__listItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-02.png"
                        alt="ブランディング強化に繋がるオリジナルデザインが構築可能">
                </figure>
                <p class="secSolution__listItemTxt">お店の世界観を反映したデザインで、統一感あるブランディングが可能に。他店との差別化にもつながります。</p>
                <div class="secSolution__btnCont">
                    <button class="secSolution__button">
                        <span class="secSolution__buttonLineVer"></span>
                        <span class="secSolution__buttonLineHor"></span>
                    </button>
                </div>

            </div>
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-full modal02">
                <span class="secSolution__listItemFullTtl">自由度が高くオリジナルデザインが可能</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <ul class="secSolution__listItemFullDescList">
                            <li class="secSolution__listItemFullDescListItem">フリーレイアウト</li>
                            <li class="secSolution__listItemFullDescListItem">フリーページ</li>
                            <li class="secSolution__listItemFullDescListItem">フォント選択</li>
                            <li class="secSolution__listItemFullDescListItem">ホームタブ</li>
                            <li class="secSolution__listItemFullDescListItem">会員証フリーデザイン</li>
                            <li class="secSolution__listItemFullDescListItem">Googleビジネスプロフィール</li>
                            <li class="secSolution__listItemFullDescListItem">RSS</li>
                            <li class="secSolution__listItemFullDescListItem">アプリ内webビュー</li>
                        </ul>
                        <p class="secSolution__listItemFullTxt">
                            様々なレイアウト設定を自由自在に行い、<br>自社のオリジナル性を反映したアプリを<br>制作することができます。​</p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-05.png"
                            alt="自由度が高くオリジナルデザインが可能">
                    </figure>
                </div>
            </div>
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-sol03">
                <h3 class="secSolution__listItemTtl">企画から導入から運用まで<br>アプリのプロがしっかりサポート</h3>
                <figure class="secSolution__listItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-03.png"
                        alt="企画から導入から運用までアプリのプロがしっかりサポート">
                </figure>
                <p class="secSolution__listItemTxt">経験豊富な専任スタッフが集客成功までしっかりサポートします。リプレイス案件も多数対応しています。</p>
                <div class="secSolution__btnCont">
                    <button class="secSolution__button">
                        <span class="secSolution__buttonLineVer"></span>
                        <span class="secSolution__buttonLineHor"></span>
                    </button>
                </div>

            </div>
            <div class="secSolution__listItem listItemSp wow animate__animated animate__fadeInUp u-full modal03">
                <span class="secSolution__listItemFullTtl">専任スタッフの手厚いサポート</span>
                <div class="secSolution__listItemFullFlex">
                    <div class="secSolution__listItemFullDesc">
                        <p class="secSolution__listItemFullTxt">
                            アプリ構築、運用に精通した担当チームがアプリの企画・デザイン・構築からストア申請まで全てをサポートします。<br><br>他社アプリサービスからのリプレイス案件も多数対応しています。<br><br>今アプリを導入した成果を感じられてない方は是非お問い合わせ下さい。
                        </p>
                    </div>
                    <figure class="secSolution__listItemFullFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secSolution_img-06.png"
                            alt="専任スタッフの手厚いサポート">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secFunc">
    <div class="secFunc__inner">
        <h2 class="secFunc__header wow animate__animated animate__fadeInUp">充実の機能<span class="secFunc__headerBlk">で店舗運営をサポート</span></h2>
        <p class="secFunc__txt wow animate__animated animate__fadeInUp">お客様との繋がりを深め、売上アップを実現する多彩な機能をご用意しております。</p>
        <ul class="secFunc__list">
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-01.png"
                            alt="プッシュ通知">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">プッシュ通知</h3>
                        <p class="secFunc__listItemTxt">
                            多彩なプッシュ通知配信が可能。スマートフォンのTOP画面、アイコンバッチ通知、端末ステータスバー通知、ポップアップ通知などすべてに対応し開封率を高めています。</p>
                    </div>
                </div>
            </li>
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-02.png"
                            alt="会員証">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">会員証</h3>
                        <p class="secFunc__listItemTxt">
                            ポイントカードや会員証・カルテ番号など番号登録・バーコード読み取りが可能。顧客情報とアプリをつなぐDX（デジタルトランスフォーメーション）に必須機能。</p>
                    </div>
                </div>
            </li>
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-03.png"
                            alt="スタンプ機能">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">スタンプ機能</h3>
                        <p class="secFunc__listItemTxt">
                            常連化のロイヤルカスタマー育成に。アプリから二次元コードを読み取りるとスタンプが付与されます。スタンプカード印刷費と店舗オペレーションの削減にもつながります。</p>
                    </div>
                </div>
            </li>
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-04.png"
                            alt="クーポン管理">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">クーポン管理</h3>
                        <p class="secFunc__listItemTxt">いつでもクーポンをかんたん配信。全配信・対象店舗別・個別ユーザー別の設定から表示時間設定。様々な種類のクーポンを発行。</p>
                    </div>
                </div>
            </li>
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-05.png"
                            alt="会員管理">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">会員管理</h3>
                        <p class="secFunc__listItemTxt">会員システムと連動可能。会員システムの情報を元にプッシュ通知やお知らせ配信ができ、パーソナライズドマーケティングが可能に。
                        </p>
                    </div>
                </div>
            </li>
            <li class="secFunc__listItem wow animate__animated animate__fadeInUp">
                <div class="secFunc__listItemLink">
                    <figure class="secFunc__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secFunc_img-06.png"
                            alt="RSSフィード機能">
                    </figure>
                    <div class="secFunc__listItemDesc">
                        <h3 class="secFunc__listItemTtl">RSSフィード機能</h3>
                        <p class="secFunc__listItemTxt">
                            RSSに登録されている情報をアプリ上に表示することが可能。WEBサイトとアプリで２重登録する必要がなくなり常に最新情報を発信することができます。</p>
                    </div>
                </div>
            </li>
        </ul>
        <a href="<?php echo home_url(); ?>/function/" class="btnBlue secFunc__btn wow animate__animated animate__fadeInUp">機能一覧をみる</a>
    </div>
</section>

<?php
$tipsQuery = [
    'post_type' => 'tips',
    'posts_per_page' => 3,
    'orderby' => [
        'date' => 'DESC',
    ],
];


$tipsPost = new WP_Query($tipsQuery);
?>

<?php if ($tipsPost->have_posts()): ?>

<section class="secTips">
    <div class="secTips__inner">
        <h2 class="secTips__header wow animate__animated animate__fadeInUp">アプリ活用<span class="secTips__headerBlk">のヒント</span></h2>
        <p class="secTips__txt wow animate__animated animate__fadeInUp">アプリをもっと便利に使うためのコツやサービス追加された機能をご紹介します。</p>
        <ul class="secTips__list u-pcDb wow animate__animated animate__fadeInUp">
            <?php while ($tipsPost->have_posts()): $tipsPost->the_post(); ?>
            <li class="secTips__listItem">
                <a href="<?php echo get_the_permalink(); ?>" class="secTips__listItemLink">
                    <figure class="secTips__listItemFgr">
                        <?php if (has_post_thumbnail()): ?>
                            <?php
                            $thumb_id = get_post_thumbnail_id(get_the_ID());

                            // Get alt text
                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                            // Get src (image URL)
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                            $src = $thumb_src[0]; ?>
                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secTips__listItemFgrImg">'; ?>
                        <?php else: ?>
                            <div class="secTips__listItemFgrImg"></div>
                        <?php endif; ?>
                    </figure>
                    <div class="secTips__listItemDesc">
                        <div class="secTips__listItemDescFlex">
                            <?php
                            $tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
                            $tipsPostTerm_obj = $tipsPostTerms_objArray[0];
                            $tipsPostTerm_name = $tipsPostTerm_obj->name;
                            ?>
                            <?php if ($tipsPostTerm_name != ''): ?>
                            <span class="secTips__listItemDescCat"><?php echo $tipsPostTerm_name; ?></span>
                            <?php endif; ?>
                            <span class="secTips__listItemDescDate"><?php echo get_the_date('Y.m.d'); ?></span>
                        </div>
                        <p class="secTips__listItemDescTxt"><?php echo get_the_title(); ?></p>
                    </div>
                </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <div class="secTips__swiperContainer wow animate__animated animate__fadeInUp common-swiper u-spDb">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-wrapper">
            
            <?php while ($tipsPost->have_posts()): $tipsPost->the_post(); ?>
                <div class="swiper-slide">
                    <div class="secTips__listItem">
                        <a href="<?php echo get_the_permalink(); ?>" class="secTips__listItemLink">
                            <figure class="secTips__listItemFgr">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php
                                    $thumb_id = get_post_thumbnail_id(get_the_ID());

                                    // Get alt text
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                                    // Get src (image URL)
                                    $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                                    $src = $thumb_src[0]; ?>
                                    <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secTips__listItemFgrImg">'; ?>
                                <?php else: ?>
                                    <div class="secTips__listItemFgrImg"></div>
                                <?php endif; ?>
                            </figure>
                            <div class="secTips__listItemDesc">
                                <div class="secTips__listItemDescFlex">
                                    <?php
                                    $tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
                                    $tipsPostTerm_obj = $tipsPostTerms_objArray[0];
                                    $tipsPostTerm_name = $tipsPostTerm_obj->name;
                                    ?>
                                    <?php if ($tipsPostTerm_name != ''): ?>
                                    <span class="secTips__listItemDescCat"><?php echo $tipsPostTerm_name; ?></span>
                                    <?php endif; ?>
                                    <span class="secTips__listItemDescDate"><?php echo get_the_date('Y.m.d'); ?></span>
                                </div>
                                <p class="secTips__listItemDescTxt"><?php echo get_the_title(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <a href="<?php echo home_url() ?>/tips" class="btnBlue secTips__btn wow animate__animated animate__fadeInUp">もっとみる</a>
    </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php
$voiceQuery = [
    'post_type' => 'voice',
    'paged' => $paged,
    'posts_per_page' => 3,
    'orderby' => [
        'date' => 'DESC',
    ],
];


$voicePost = new WP_Query($voiceQuery);
?>

<?php if ($voicePost->have_posts()): ?>
    <section class="secCustomer">
        <div class="secCustomer__inner">
            <h2 class="secCustomer__header wow animate__animated animate__fadeInUp">お客様<span class="secCustomer__headerBlk">の声</span></h2>
            <p class="secCustomer__txt wow animate__animated animate__fadeInUp">多くのお客様から効果を実感・高い評価をいただいています。</p>
            <ul class="secCustomer__list u-pcDb">
                <?php while ($voicePost->have_posts()):
                    $voicePost->the_post(); ?>
                    <li class="secCustomer__listItem wow animate__animated animate__fadeInUp">
                        <a href="<?php echo get_the_permalink(); ?>" class="secCustomer__listItemLink">
                            <figure class="secCustomer__listItemFgr">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php
                                    $thumb_id = get_post_thumbnail_id(get_the_ID());

                                    // Get alt text
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                                    // Get src (image URL)
                                    $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                                    $src = $thumb_src[0]; ?>
                                    <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secCustomer__listItemFgrImg">'; ?>
                                <?php else: ?>
                                    <div class="secCustomer__listItemFgrImg"></div>
                                <?php endif; ?>
                            </figure>
                            <?php
                            $voicePostTerms_objArray = get_the_terms(get_the_ID(), 'voice_cat');
                            $voicePostTerm_obj = $voicePostTerms_objArray[0];
                            $voicePostTerm_name = $voicePostTerm_obj->name;
                            ?>
                            <div class="secCustomer__listItemDesc">
                                <div class="secCustomer__listItemDescFlex">
                                    <?php if ($voicePostTerm_name != ''): ?><span
                                            class="secCustomer__listItemDescCat"><?php echo $voicePostTerm_name; ?></span><?php endif; ?>
                                    <h3 class="secCustomer__listItemDescTtl"><?php echo get_the_title(); ?><span
                                            class="secCustomer__listItemDescTtlSpan">様</span></h3>
                                </div>
                                <?php if (get_field('voice_desc') != ''): ?>
                                    <p class="secCustomer__listItemDescTxt"><?php echo get_field('voice_desc'); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
            <div class="secCustomer__swiperContainer wow animate__animated animate__fadeInUp common-swiper u-spDb">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    <?php while ($voicePost->have_posts()):
                        $voicePost->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="secCustomer__listItem">
                                <a href="<?php echo get_the_permalink(); ?>" class="secCustomer__listItemLink">
                                    <figure class="secCustomer__listItemFgr">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php
                                            $thumb_id = get_post_thumbnail_id(get_the_ID());

                                            // Get alt text
                                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                                            // Get src (image URL)
                                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                                            $src = $thumb_src[0]; ?>
                                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secCustomer__listItemFgrImg">'; ?>
                                        <?php else: ?>
                                            <div class="secCustomer__listItemFgrImg"></div>
                                        <?php endif; ?>
                                    </figure>
                                    <?php
                                    $voicePostTerms_objArray = get_the_terms(get_the_ID(), 'voice_cat');
                                    $voicePostTerm_obj = $voicePostTerms_objArray[0];
                                    $voicePostTerm_name = $voicePostTerm_obj->name;
                                    ?>
                                    <div class="secCustomer__listItemDesc">
                                        <div class="secCustomer__listItemDescFlex">
                                            <?php if ($voicePostTerm_name != ''): ?><span
                                                    class="secCustomer__listItemDescCat"><?php echo $voicePostTerm_name; ?></span><?php endif; ?>
                                            <h3 class="secCustomer__listItemDescTtl"><?php echo get_the_title(); ?><span
                                                    class="secCustomer__listItemDescTtlSpan">様</span></h3>
                                        </div>
                                        <?php if (get_field('voice_desc') != ''): ?>
                                            <p class="secCustomer__listItemDescTxt"><?php echo get_field('voice_desc'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a href="<?php echo home_url() ?>/voice" class="btnBlue secCustomer__btn wow animate__animated animate__fadeInUp">もっとみる</a>
        </div>
    </section>
<?php endif; ?>

<?php $mobileScreen = get_field('top_mobilescreen', 'option');
?>
<?php if ($mobileScreen): ?>
    <section class="secMobile wow animate__animated animate__fadeInUp">
        <div class="secMobile__inner">
            <div class="secMobile__slider swiper">
                <div class="swiper-wrapper secMobile__sliderWrapper">
                    <?php foreach ($mobileScreen as $screen): ?>
                        <div class="secMobile__sliderItem swiper-slide">
                            <img src="<?php echo $screen['img']['url']; ?>" alt="<?php echo $screen['img']['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="secPlans">
    <div class="secPlans__inner">
        <h2 class="secPlans__header wow animate__animated animate__fadeInUp">料金<span class="secPlans__headerBlk">プラン</span></h2>
        <p class="secPlans__txt wow animate__animated animate__fadeInUp">機能やサポート内容に応じた3つのプランからお選びいただけます。<br>経験豊富なアプリ専門スタッフが適切なプランをご提案致します。</p>
        <div class="secPlans__list u-pcDb">
            <div class="secPlans__listItem wow animate__animated animate__fadeInUp">
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">LIGHT</span>
                    <span class="secPlans__listItemJp">ライトプラン</span>
                    <p class="secPlans__listItemTxt">アプリ開発に必要な基本機能の利用が可能です。店舗数やダウンロード数が少ないお客様におすすめのリーズナブルなプランです。</p>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        50,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <table class="secPlans__listItemTbl">
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">登録店舗数上限</td>
                            <td class="secPlans__listItemTblData">最大10店舗</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">ダウンロード数増加による<br>追加課金</td>
                            <td class="secPlans__listItemTblData">30,000 DLまで無料<br>10,000 DLにつき10,000円</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">オプション</td>
                            <td class="secPlans__listItemTblData">有 償</td>
                        </tr>
                    </table>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        150,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" id="btn-light" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
            <div class="secPlans__listItem is-active wow animate__animated animate__fadeInUp">
                <span class="secPlans__listItemBnr">人気</span>
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">STANDARD</span>
                    <span class="secPlans__listItemJp">スタンダードプラン</span>
                    <p class="secPlans__listItemTxt">会員登録、ポイントカード、インスタウィンなどオプション機能が含まれた標準的なプランです。</p>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        200,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <table class="secPlans__listItemTbl">
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">登録店舗数上限</td>
                            <td class="secPlans__listItemTblData">上限なし</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">ダウンロード数増加による<br>追加課金</td>
                            <td class="secPlans__listItemTblData">100,000 DLまで無料<br>50,000 DLにつき50,000円</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">オプション</td>
                            <td class="secPlans__listItemTblData">一部有償</td>
                        </tr>
                    </table>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        300,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" id="btn-standard" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
            <div class="secPlans__listItem wow animate__animated animate__fadeInUp">
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">PREMIUM</span>
                    <span class="secPlans__listItemJp">プレミアムプラン</span>
                    <p class="secPlans__listItemTxt">オプション機能に加えて、外部システムとのAPI連携も含めたフルパッケージとなります。</p>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        500,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <table class="secPlans__listItemTbl">
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">登録店舗数上限</td>
                            <td class="secPlans__listItemTblData">上限なし</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">ダウンロード数増加による<br>追加課金</td>
                            <td class="secPlans__listItemTblData">300,000 DLまで無料<br>50,000 DLにつき50,000円</td>
                        </tr>
                        <tr class="secPlans__listItemTblRow">
                            <td class="secPlans__listItemTblData">オプション</td>
                            <td class="secPlans__listItemTblData">無 償</td>
                        </tr>
                    </table>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        1,000,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" id="btn-premium" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
        </div>
        <div class="secPlans__list u-spDb">
            <div class="secPlans__listItem is-active">
                <span class="secPlans__listItemBnr">人気</span>
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">STANDARD</span>
                    <span class="secPlans__listItemJp">スタンダードプラン</span>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        200,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        300,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
            <div class="secPlans__listItem wow animate__animated animate__fadeInUp">
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">LIGHT</span>
                    <span class="secPlans__listItemJp">ライトプラン</span>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        50,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        150,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
            <div class="secPlans__listItem wow animate__animated animate__fadeInUp">
                <div class="secPlans__listItemInner">
                    <span class="secPlans__listItemEn">PREMIUM</span>
                    <span class="secPlans__listItemJp">プレミアムプラン</span>
                    <span class="secPlans__listItemMTxt">月額システム利用料</span>
                    <span class="secPlans__listItemMNum">
                        500,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <div class="secPlans__listItemPlus"></div>
                    <span class="secPlans__listItemMTxt">初期制作費用（一式）</span>
                    <span class="secPlans__listItemMNum">
                        1,000,000
                        <span class="secPlans__listItemMNumSpan">円</span>
                    </span>
                    <a href="<?php echo home_url() ?>/contact" class="btnOrange secPlans__listItemBtn">お問い合わせ</a>
                </div>
            </div>
        </div>
        <span class="secPlans__caption wow animate__animated animate__fadeInUp">※料金は税抜価格となります。</span>
    </div>
</section>

<section class="secUse">
    <div class="secUse__inner">
        <h2 class="secUse__header wow animate__animated animate__fadeInUp">ご利用<span class="secUse__headerBlk">の流れ</span></h2>
        <p class="secUse__headerCap wow animate__animated animate__fadeInUp">アプリ構築、運用に精通した担当チームが、企画・デザインから開発、ストア申請<br>さらに運用サポートまでトータルで支援しビジネスの成長を加速させます。</p>
        <div class="secUse__step">
            <div class="secUse__stepItem wow animate__animated animate__fadeInUp">
                <span class="secUse__stepItemSpan">STEP 01</span>
                <figure class="secUse__stepItemFgr">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secUse_img-01.png"
                        alt="お問い合わせ">
                </figure>
                <h3 class="secUse__stepItemTtl">お問い合わせ</h3>
                <p class="secUse__stepItemTxt">フォームまたはお電話で<br>お気軽にご連絡ください。</p>
            </div>
            <div class="secUse__stepItem wow animate__animated animate__fadeInUp">
                <span class="secUse__stepItemSpan">STEP 02</span>
                <figure class="secUse__stepItemFgr figure02">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secUse_img-02.png"
                        alt="ご提案・お見積り">
                </figure>
                <h3 class="secUse__stepItemTtl">ご提案・お見積り</h3>
                <p class="secUse__stepItemTxt">課題に応じたアプリのご提案と<br>お見積りを行います。</p>
            </div>
            <div class="secUse__stepItem wow animate__animated animate__fadeInUp">
                <span class="secUse__stepItemSpan">STEP 03</span>
                <figure class="secUse__stepItemFgr figure03">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secUse_img-03.png"
                        alt="アプリ設計">
                </figure>
                <h3 class="secUse__stepItemTtl">アプリ設計</h3>
                <p class="secUse__stepItemTxt">ご契約後、要件を整理と<br>デザイン・機能の設計を進めます。</p>
            </div>
            <div class="secUse__stepItem wow animate__animated animate__fadeInUp">
                <span class="secUse__stepItemSpan">STEP 04</span>
                <figure class="secUse__stepItemFgr figure04">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/topPage/secUse_img-04.png"
                        alt="リリース・運用サポート">
                </figure>
                <h3 class="secUse__stepItemTtl">リリース・運用サポート</h3>
                <p class="secUse__stepItemTxt">アプリ公開後も、運用や改善を<br>継続してサポートします。</p>
            </div>
        </div>
    </div>
</section>


<section class="secContact wow animate__animated animate__fadeInUp">
    <div class="secContact__inner">
        <h2 class="secContact__header">お問い合わせ</h2>
        <span class="secContact__headerCap">店舗アプリについてのご質問やご相談は、以下のフォームからお気軽にお問い合わせください。</span>
        <div class="secContact__form">
            <?php echo do_shortcode('[contact-form-7 id="44f90d3" title="contact"]'); ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>