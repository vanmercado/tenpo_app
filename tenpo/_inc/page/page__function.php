<?php
set_query_var('hero_subtitle', ' 多彩な機能でカスタマイズ');
set_query_var('hero_heading', 'アプリの機能');
set_query_var('hero_desc1', 'UI・UXにこだわった洗練されたデザインと豊富な機能を組み合わせて、<br>自社の課題に最適化したアプリを開発。<br>ノーコードだから、はじめての方も安心。');
include locate_template('_inc/block/lowerPageFv.php');
?>

<section class="secFeatCategory">
    <ul class="secFeatCategory__list">
        <li class="secFeatCategory__listItem">
            <a class="secFeatCategory__wrap" href="#marketing-crm">
                <h6 class="secFeatCategory__ttl">来店強化・マーケティング</h6>
            </a>
        </li>
        <li class="secFeatCategory__listItem"><a class="secFeatCategory__wrap" href="#branding">
                <h6 class="secFeatCategory__ttl">ブランディング</h6>
            </a>
        </li>
        <li class="secFeatCategory__listItem"><a class="secFeatCategory__wrap" href="#third-party-links">
                <h6 class="secFeatCategory__ttl">外部サービス連携</h6>
            </a>
        </li>
        <li class="secFeatCategory__listItem"><a class="secFeatCategory__wrap" href="#data-analytics">
                <h6 class="secFeatCategory__ttl">データ分析・活用</h6>
            </a>
        </li>
    </ul>
</section>
<section class="secFeatItems" id="marketing-crm">
    <div class="secFeatItems__innerText">
        <p class="secFeatItems__categoryTtl">来店強化・マーケティング</p>
        <h2 class="secFeatItems__ttl">来店強化、エンゲージメント<br class="u-pcDb">アップにつながる多彩な機能</h2>
        <div class="secFeatItems__content">
            <p class="secFeatItems__txt">クーポンやスタンプ、自動配信のメッセージなど、<br
                    class="u-pcDb">集客やリピーター獲得を強化する機能が満載。<br>ロイヤルカスタマーにうれしい、ポイント機能や会員特典など、<br class="u-pcDb">オプション機能も豊富。
            </p>
        </div>
    </div>
    <div class="secFeatItems__innerImg"><img class="secFeatItems__img"
            src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-01.png"
            alt="来店強化・マーケティング"></div>
</section>
<section class="secNotification">
    <div class="secNotification__innerArea">
        <div class="secNotification__innerText"><span class="secNotification__labelTxt">来店強化・マーケティング</span>
            <div class="secNotification__label">
                <h3 class="secNotification__ttl">プッシュ通知</h3>
                <p class="secNotification__subTtl">スマートフォンにダイレクトにお知らせ</p>
            </div>
            <div class="secNotification__content">
                <p class="secNotification__txt">
                    アプリのプッシュ通知は、最新情報やイベント情報など即時にユーザーのスマートフォンに届けることができます。ユーザーの来店意欲を高め、効果的な集客につながります。</p>
            </div>
        </div>
        <div class="secNotification__innerImg"><img class="secNotification__img"
                src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-02.png"
                alt="プッシュ通知"></div>
    </div>
    <ul class="secNotification__list">
        <li class="secNotification__listItem">
            <div class="secNotification__wrap">
                <figure class="secNotification__listItemFgr"> <img class="secNotification__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-03.png"
                        alt="プッシュ通知"></figure>
                <div class="secNotification__listItemContent">
                    <p class="secNotification__listItemTtl">プッシュ通知</p>
                    <p class="secNotification__listItemTxt">
                        多彩なプッシュ通知配信が可能。バナー、アイコンバッチ、端末ステータスバーなどすべての通知に対応し視認性を高め開封率を高めています。</p>
                </div>
                </a>
        </li>
        <li class="secNotification__listItem">
            <div class="secNotification__wrap">
                <figure class="secNotification__listItemFgr"> <img class="secNotification__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-04.png"
                        alt="オートプッシュ通知"></figure>
                <div class="secNotification__listItemContent">
                    <p class="secNotification__listItemTtl">オートプッシュ通知</p>
                    <p class="secNotification__listItemTxt">配信設定を行っておくと設定した条件時（来店してから～日後や、登録してから～日後）などに自動でプッシュ通知が配信されます。
                    </p>
                </div>
                </a>
        </li>
        <li class="secNotification__listItem">
            <div class="secNotification__wrap">
                <figure class="secNotification__listItemFgr"> <img class="secNotification__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-05.png"
                        alt="ポップアップ通知"></figure>
                <div class="secNotification__listItemContent">
                    <p class="secNotification__listItemTtl">ポップアップ通知</p>
                    <p class="secNotification__listItemTxt">
                        プッシュ通知を見られてないユーザーには、アプリ起動時と同時にポップアップでお知らせの告知を表示。より通知内容の訴求力を高めます。</p>
                </div>
                </a>
        </li>
        <li class="secNotification__listItem">
            <div class="secNotification__wrap">
                <figure class="secNotification__listItemFgr"> <img class="secNotification__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-06.png"
                        alt="notification image"></figure>
                <div class="secNotification__listItemContent">
                    <p class="secNotification__listItemTtl">プッシュ通知リアクション</p>
                    <p class="secNotification__listItemTxt">
                        プッシュ通知画面でユーザーが「いいね」することができます。ユーザーの反応を効果的見ることでき求められている配信内容が把握できます。</p>
                </div>
                </a>
        </li>
    </ul>
</section>
<section class="secPromotion">
    <div class="secPromotion__innerArea">
        <div class="secPromotion__innerImg"><img class="secPromotion__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-07.png" alt="promotion photo"></div>
        <div class="secPromotion__innerText"><span class="secNotification__labelTxt">来店強化・マーケティング</span>
            <div class="secPromotion__label">
                <h3 class="secPromotion__ttl">来店促進</h3>
                <p class="secPromotion__subTtl">リピート獲得に繋がる強力な機能</p>
            </div>
            <div class="secPromotion__content">
                <p class="secNotification__txt">
                    来店促進やリピーター獲得のきっかけをつくる多彩な機能を搭載。クーポンやスタンプ・ポイントカードなどを組み合わせて、お客様一人ひとりに最適なアプローチを。</p>
            </div>
        </div>
    </div>
    <ul class="secPromotion__list">
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-08.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">デジタルクーポン</p>
                    <p class="secPromotion__listItemTxt">
                        管理画面からいつでもクーポンをかんたん作成。全配信・対象店舗別・個別ユーザー別に配信が可能。魅力的なクーポン配信で顧客満足度向上へ。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-09.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">クーポンバーコード</p>
                    <p class="secPromotion__listItemTxt">クーポンのバーコードと二次元コードを表示することができます。レジでのオペレーション簡素化繋がりスムーズなクーポン利用が可能に。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-10.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">クーポンコード</p>
                    <p class="secPromotion__listItemTxt">クーポンのクーポンコードを表示することができます。コードのコピーができるためECサイトやデリバリー注文などの連携に効果的です。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-11.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">クーポンカテゴリ</p>
                    <p class="secPromotion__listItemTxt">
                        クーポンをカテゴリごとに分かりやすく表示することができます。ユーザーは多くの中から欲しいクーポンをスムーズに見つけて利用できます。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-12.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">誕生日クーポン</p>
                    <p class="secPromotion__listItemTxt">プロフィール情報を元に誕生日クーポンが自動付与されます。付与時には自動でプッシュ通知も配信され、ユーザー満足度を向上させます。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-13.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">ダウンロードクーポン</p>
                    <p class="secPromotion__listItemTxt">アプリダウンロード後にダウンロードクーポンが自動付与されます。付与時には自動でプッシュ通知も配信され、見逃しを防ぎます。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-14.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">全員に公開しないクーポン</p>
                    <p class="secPromotion__listItemTxt">
                        発行したクーポン取得リンクを通じて特定のお客様にのみクーポンを配布することが可能。パーソナライズされたアプローチを可能にします。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-15.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">デジタルスタンプカード</p>
                    <p class="secPromotion__listItemTxt">
                        常連化によるロイヤルカスタマーの育成に最適。二次元コード読み取りでスタンプが自動付与され、店舗オペレーションの削減にも繋がります。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-16.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">ステータスUPスタンプ</p>
                    <p class="secPromotion__listItemTxt">スタンプを貯めるほどステータスが上がり、スタンプ獲得数が多いユーザーによりお得なクーポンを配布可能。CRM施策に大きく貢献。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-17.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">ポイントカード・会員証</p>
                    <p class="secPromotion__listItemTxt">ポイントカードや会員証・カルテ番号など番号登録・バーコード読み取りが可能。DX(デジタルトランスフォーメーション)に必須機能。
                    </p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-18.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">ユーザIDバーコード変換</p>
                    <p class="secPromotion__listItemTxt">
                        ユーザーIDが自動的に会員証のバーコードに表示されます。新たな会員システムの準備が必要無くなりコスト削減・迅速な機能提供が可能に。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-19.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">スコア/ステージ</p>
                    <p class="secPromotion__listItemTxt">
                        クーポン利用やスタンプ付与などによりスコアを配布。獲得したスコア数によりステージが確定し、ステージ別に情報発信・分析などが可能。</p>
                </div>
                </a>
        </li>
        <li class="secPromotion__listItem">
            <div class="secPromotion__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-20.png"
                        alt="promotion image"></figure>
                <div class="secPromotion__listItemContent">
                    <p class="secPromotion__listItemTtl">AIBeacon</p>
                    <p class="secPromotion__listItemTxt">
                        AIBeaconでチェックインとスタンプ配布ができます。指定された範囲内のみ配布可能になり来店促進や限定特典の提供に活用できます。</p>
                </div>
                </a>
        </li>
    </ul>
</section>
<section class="secInfoTrans">
    <div class="secInfoTrans__innerArea">
        <div class="secInfoTrans__innerText"><span class="secNotification__labelTxt">来店強化・マーケティング</span>
            <div class="secInfoTrans__label">
                <h3 class="secInfoTrans__ttl">情報発信</h3>
                <p class="secInfoTrans__subTtl">様々な情報を配信・作成</p>
            </div>
            <div class="secInfoTrans__content">
                <p class="secInfoTrans__txt">アプリで店舗情報やイベント情報などを配信することで、ユーザーにタイムリーに情報を届けることができます。認知拡大や来店・参加促進につながります。</p>
            </div>
        </div>
        <div class="secInfoTrans__innerImg">
            <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-21.png"
                        alt="promotion image"></figure></div>
    </div>
    <ul class="secInfoTrans__list">
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-22.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">店舗情報</p>
                    <p class="secInfoTrans__listItemTxt">
                        GPSで近くの店舗を表示し、各店舗の情報を自由に掲載可能。お気に入り機能により自店に興味を持つユーザーへ積極的なアプローチが可能。</p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-23.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">イベント</p>
                    <p class="secInfoTrans__listItemTxt">イベント情報をまとめて表示。開催前から開催中、終了までの期間情報も自動で表示されるため、ユーザーへのわかりやすい告知が可能。
                    </p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-24.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">メニュー</p>
                    <p class="secInfoTrans__listItemTxt">商品紹介からEC決済に遷移。宅配メニュー・テイクアウト・サブスク・チケット購入など自由に作成。複数のメニューも作成可能。
                    </p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-25.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">フォト</p>
                    <p class="secInfoTrans__listItemTxt">アルバムやカタログのような形式で閲覧できるシンプルなフォトギャラリー。PDFを使えば、めくり機能付きのコンテンツも簡単作成。
                    </p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-26.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">プロフィール追加</p>
                    <p class="secInfoTrans__listItemTxt">
                        プロフィール項目を追加することができます。取得したデータはクーポン配布やプッシュ通知・イベント配信などに活用することが可能です。</p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-27.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">2次元コード読み取り</p>
                    <p class="secInfoTrans__listItemTxt">アプリから２次元コードを読み込み。商品やメニュー表、ECページリンク、WEB会員ページなど任意のサイトに遷移することが可能。
                    </p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-28.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">認証機能</p>
                    <p class="secInfoTrans__listItemTxt">
                        アプリ起動時に認証が入りDBに登録されているユーザーのみがアプリを使用することが可能に。社内情報配信アプリなどで活用いただけます。</p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-29.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">多言語</p>
                    <p class="secInfoTrans__listItemTxt">
                        端末の設定言語に応じて自動で言語を切り替えることが可能です。外国人観光客への対応としてインバウンド施策にも高い効果を発揮します。</p>
                </div>
            </div>
        </li>
        <li class="secInfoTrans__listItem">
            <div class="secInfoTrans__wrap">
                <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-30.png"
                        alt="promotion image"></figure>
                <div class="secInfoTrans__listItemContent">
                    <p class="secInfoTrans__listItemTtl">ChatGPT導入</p>
                    <p class="secInfoTrans__listItemTxt">プッシュ通知の配信文をChatGPTを活用して作成することできます。文章作成が不安な方でも簡単に効果的な文章作成が可能です。
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>
<section class="secBrand" id="branding">
    <div class="secBrand__innerText">
        <p class="secBrand__categoryTtl">ブランディング</p>
        <h2 class="secBrand__ttl">情報の収集・到達がしやすい<br class="u-pcDb">多彩なデザイン</h2>
        <div class="secBrand__content">
            <p class="secBrand__txt">様々なレイアウトやアイコンやボタン、表現などを自由自在に行<br
                    class="u-pcDb">い、情報が伝わりやすい設定にできます。<br>組み合わせてによってオリジナル性を高められます。</p>
        </div>
    </div>
    <div class="secBrand__innerImg"><figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-31.png"
                        alt="brand photo"></figure></div>
</section>
<section class="secDesign">
    <div class="secDesign__innerArea">
        <div class="secDesign__innerText"><span class="secDesign__labelTxt">ブランディング</span>
            <div class="secDesign__label">
                <h3 class="secDesign__ttl">デザイン</h3>
                <p class="secDesign__subTtl">オリジナルデザインの構築</p>
            </div>
            <div class="secDesign__content">
                <p class="secDesign__txt">デザインを自由に設定することができ、オリジナルデザインの構築が可能です。世界観やイメージを統一しやすくブランドの認知向上やファンの定着につながります。
                </p>
            </div>
        </div>
        <div class="secDesign__innerImg">
            <figure class="secPromotion__listItemFgr"> <img class="secPromotion__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-32.png"
                        alt="inner image"></figure></div>
    </div>
    <ul class="secDesign__list">
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-33.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">フリーレイアウト</p>
                    <p class="secDesign__listItemTxt">自由度の高いフルデザイン制作により、細部までこだわった構成が可能です。独自性あるデザインでブランド価値の向上にも繋がります。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-34.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">フリーページ</p>
                    <p class="secDesign__listItemTxt">自由度の高いフリーページ作成が複数ページ制作可能。作成したフリーページはトップメニューやドロワー・フッダーなどに設定が可能。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-35.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">フォント選択</p>
                    <p class="secDesign__listItemTxt">ブランドイメージに合わせてフォントを選択可能。フォントは視覚的な印象を左右する重要な要素でありブランド認識の強化にも貢献します。
                    </p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-36.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">PWA / PCサイト</p>
                    <p class="secDesign__listItemTxt">アプリ・スマホサイト（PWA）・PCサイトを同時に構築・運用可能。複数媒体の管理を一本化し、Web運用の負荷を軽減します。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-37.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">スライダー</p>
                    <p class="secDesign__listItemTxt">アプリトップに一番見てほしい情報をスライド式で表示。最大10枚までセット・表示ができます。必要に応じて表示位置の調整も可能。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-38.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">イントロ</p>
                    <p class="secDesign__listItemTxt">初回アプリダウンロード時に、アプリの特長を丁寧紹介。表示するか否かは任意に設定ができます。アプリの使い方としての設定も可能。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-39.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">トップ動画</p>
                    <p class="secDesign__listItemTxt">トップに動画を設定可能。動画は静止画やテキストよりも視覚的に引きつける力が強いため、アプリへの関心や利用意欲を引き出します。</p>
                </div>
            </div>
        </li>
        <li class="secDesign__listItem">
            <div class="secDesign__wrap">
                <figure class="secDesign__listItemFgr"> <img class="secDesign__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-40.png"
                        alt="Design image"></figure>
                <div class="secDesign__listItemContent">
                    <p class="secDesign__listItemTtl">会員証デザイン</p>
                    <p class="secDesign__listItemTxt">アプリホーム画面に表示する会員証のデザインを自由に設定することができます。自社に合った会員証デザインを作成しブランディング強化に。
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>
<section class="secIntelReq">
    <div class="secIntelReq__innerArea">
        <div class="secIntelReq__innerImg"><img class="secPromotion__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-41.png"
                alt="Intelligence requirements photo"></div>
        <div class="secIntelReq__innerText"><span class="secNotification__labelTxt">ブランディング</span>
            <div class="secIntelReq__label">
                <h3 class="secPromotion__ttl">情報訴求強化</h3>
                <p class="secIntelReq__subTtl">様々なレイアウトで配置</p>
            </div>
            <div class="secIntelReq__content">
                <p class="secNotification__txt">
                    タブ切り替えやクーポンスライドなど多彩なレイアウト表現が可能です。視認性や操作性に優れ、ユーザーへの情報訴求やブランディング強化にもつながります。</p>
            </div>
        </div>
    </div>
    <ul class="secIntelReq__list">
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-42.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">ホームタブ</p>
                    <p class="secIntelReq__listItemTxt">タブ切り替えによって複数のホーム画面を表示できます。ブランド別や店舗別などでホーム画面を作成ができ柔軟なアプリデザインが可能に。
                    </p>
                </div>
            </div>
        </li>
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-43.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">ショップタブ</p>
                    <p class="secIntelReq__listItemTxt">
                        お気に入り登録している店舗のホーム画面をタブ切り替えによって表示することができます。ユーザーが求める情報のみを届けることが可能に。</p>
                </div>
            </div>
        </li>
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-44.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">クーポンスライド</p>
                    <p class="secIntelReq__listItemTxt">アプリホーム画面に配信中のクーポン情報をスライド方式で表示することができます。配信中のクーポンを分かりやすくユーザーに届けます。
                    </p>
                </div>
            </div>
        </li>
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-45.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">イベントスライド</p>
                    <p class="secIntelReq__listItemTxt">アプリホーム画面に配信中のイベント情報をスライド方式で表示することができます。配信中のイベントを分かりやすくユーザーに届けます。
                    </p>
                </div>
            </div>
        </li>
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-46.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">ウェブビュー</p>
                    <p class="secIntelReq__listItemTxt">アプリ内でウェブサイトを表示。ECサイトや会員ページ、デリバリー決済などアプリに取り込める便利な機能。CSSでの表示調整も可能。
                    </p>
                </div>
            </div>
        </li>
        <li class="secIntelReq__listItem">
            <div class="secIntelReq__wrap">
                <figure class="secIntelReq__listItemFgr"> <img class="secIntelReq__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-47.png"
                        alt="Intelligence requirements image"></figure>
                <div class="secIntelReq__listItemContent">
                    <p class="secIntelReq__listItemTtl">iframe</p>
                    <p class="secIntelReq__listItemTxt">iframeで自社webサイトをアプリに表示することができます。既存コンテンツの活用で２重管理の軽減と迅速なアプリ提供が可能に。
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>
<section class="secCooperation" id="third-party-links">
    <div class="secCooperation__innerText">
        <p class="secCooperation__categoryTtl">外部サービス連携</p>
        <h2 class="secCooperation__ttl">他社サービスサイトとの連携や<br class="u-pcDb">APIとの連携で高機能を実現</h2>
        <div class="secCooperation__content">
            <p class="secCooperation__txt">来店予約やデリバリー、オーダー決済などの他社サービスと連携<br
                    class="u-pcDb">し、さらに快適な顧客体験を提供。<br>アプリのAPIとWEBシステムを連携しアプリに顧客情報を表示す<br class="u-pcDb">ることもできます。</p>
        </div>
    </div>
    <div class="secCooperation__innerImg"><img class="secCooperation__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-48.png" alt="Cooperation photo"></div>
</section>
<section class="secExternal">
    <div class="secExternal__innerArea">
        <div class="secExternal__innerText"><span class="secExternal__labelTxt">外部サービス連携</span>
            <div class="secExternal__label">
                <h3 class="secExternal__ttl">外部サービス連携</h3>
                <p class="secExternal__subTtl">サービス連携で高機能を実現</p>
            </div>
            <div class="secExternal__content">
                <p class="secExternal__txt">外部システムとAPI連携することで、顧客情報や購買履歴などアプリと自動同期することが可能です。パーソナライズ施策や業務効率化に大きく貢献します。</p>
            </div>
        </div>
        <div class="secExternal__innerImg"><img class="secExternal__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-49.png" alt="inner photo"></div>
    </div>
    <ul class="secExternal__list">
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-50.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">GBP</p>
                    <p class="secExternal__listItemTxt">GoogleビジネスプロフィールAPIと連動させることで、アプリ内にオーナー投稿を表示することが可能。二重投稿作業が不要に。
                    </p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-51.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">RSSフィード</p>
                    <p class="secExternal__listItemTxt">RSSの情報をアプリに表示することができます。WEBサイトとアプリで２重登録する必要がなくなり常に最新情報を発信することが可能。
                    </p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-52.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">ポイントシステム</p>
                    <p class="secExternal__listItemTxt">
                        ポイントシステムと連動可能。現在のポイント数やバーコード、会員番号などを表示することができ、アプリ提示でポイント付与などが可能に。</p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-53.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">予約システム</p>
                    <p class="secExternal__listItemTxt">予約システムと連動可能。美容室の場合予約日前日のリマインドプッシュ通知やカットやカラーなど施術内容に合わせて情報発信が可能に。
                    </p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-54.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">会員システム</p>
                    <p class="secExternal__listItemTxt">会員システムと連動可能。会員システムの情報を元にプッシュ通知やお知らせ配信ができ、パーソナライズドマーケティングが可能に。
                    </p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-55.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">モバイルオーダーシステム</p>
                    <p class="secExternal__listItemTxt">モバイルオーダーシステムと連動可能。アプリから商品の注文を行い、商品が出来上がったらプッシュ通知でユーザーの呼び出しが可能に。
                    </p>
                </div>
            </div>
        </li>
        <li class="secExternal__listItem">
            <div class="secExternal__wrap">
                <figure class="secExternal__listItemFgr"> <img class="secExternal__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-56.png"
                        alt="External image"></figure>
                <div class="secExternal__listItemContent">
                    <p class="secExternal__listItemTtl">アンケートシステム</p>
                    <p class="secExternal__listItemTxt">アンケートシステムと連動可能。アプリユーザーIDが自動で表示され、ユーザーは個人情報入力不要。回答者への情報発信が可能に。
                    </p>
                </div>
            </div>
        </li>
    </ul>
</section>
<section class="secData" id="data-analytics">
    <div class="secData__innerText">
        <p class="secData__categoryTtl">データ分析・活用</p>
        <h2 class="secData__ttl">来店数や顧客属性など<br>データを可視化する分析機能</h2>
        <div class="secData__content">
            <p class="secData__txt">アプリ内の行動データや、クーポンやスタンプの利用状況、顧客<br class="u-pcDb">のデモグラフィック属性など、<br
                    class="u-pcDb">次の施策に活かせる分析機能を搭載。見やすいUIだから直感的に<br class="u-pcDb">分析できます。</p>
        </div>
    </div>
    <div class="secData__innerImg"><img class="secData__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-57.png" alt="Data photo"></div>
</section>
<section class="secAnalysis">
    <div class="secAnalysis__innerArea">
        <div class="secAnalysis__innerText"><span class="secAnalysis__labelTxt">データ分析・活用</span>
            <div class="secAnalysis__label">
                <h3 class="secAnalysis__ttl">データ分析・活用</h3>
                <p class="secAnalysis__subTtl">データを可視化する分析機能</p>
            </div>
            <div class="secAnalysis__content">
                <p class="secAnalysis__txt">GA4などを活用すれば、アプリ内のユーザー行動や利用状況を詳細に把握することができます。効果的な施策の立案や改善に役立つデータドリブンな運用が可能です。
                </p>
            </div>
        </div>
        <div class="secAnalysis__innerImg"><img class="secAnalysis__img" src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-58.png" alt="inner photo"></div>
    </div>
    <ul class="secAnalysis__list">
        <li class="secAnalysis__listItem">
            <div class="secAnalysis__wrap">
                <figure class="secAnalysis__listItemFgr"> <img class="secAnalysis__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-59.png"
                        alt="External image"></figure>
                <div class="secAnalysis__listItemContent">
                    <p class="secAnalysis__listItemTtl">分析機能</p>
                    <p class="secAnalysis__listItemTxt">ユーザーの行動をグラフや時間軸でわかりやすく可視化。ハイライト表示や売上貢献額、詳細な顧客データまで、多角的な分析が可能です。
                    </p>
                </div>
            </div>
        </li>
        <li class="secAnalysis__listItem">
            <div class="secAnalysis__wrap">
                <figure class="secAnalysis__listItemFgr"> <img class="secAnalysis__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-60.png"
                        alt="External image"></figure>
                <div class="secAnalysis__listItemContent">
                    <p class="secAnalysis__listItemTtl">ユーザー情報</p>
                    <p class="secAnalysis__listItemTxt">ユーザーの行動を自動でデータ蓄積。「どんな人がどの店舗でどの頻度で何を利用しているか？」知るべき必要なものすべてが蓄積されます。
                    </p>
                </div>
            </div>
        </li>
        <li class="secAnalysis__listItem">
            <div class="secAnalysis__wrap">
                <figure class="secAnalysis__listItemFgr"> <img class="secAnalysis__img"
                        src="<?php echo get_template_directory_uri(); ?>/_assets/images/functionPage/secFunc_img-61.png"
                        alt="External image"></figure>
                <div class="secAnalysis__listItemContent">
                    <p class="secAnalysis__listItemTtl">GA4</p>
                    <p class="secAnalysis__listItemTxt">GA4 Tracking
                        IDを埋め込み可能。データ分析する上で必要なツールが揃っており、併用して使用することで更なる情報分析が可能。</p>
                </div>
            </div>
        </li>
    </ul>
</section>