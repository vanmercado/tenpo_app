<?php
  $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  $is_contact_thanks = ($current_path === 'contact/thanks');
?>

<section class="secInquiry<?php if ($is_contact_thanks) echo ' is-thanks-page'; ?>">
  <div class="secInquiry__inner" <?php if ($is_contact_thanks) echo 'style="display: none;"'; ?>>
    <div class="secInquiry__intro ">
      <h2 class="secInquiry__introHeading">まずはお気軽にご相談ください</h2>
      <p class="secInquiry__introSubheading">
        店舗アプリについてのご不明点やご相談がある方はお気軽にお問い合わせください。
      </p>
    </div>
    <div class="secInquiry__card ">
      <?php
      $inquiry_cards = [
        [
          'img' => 'secInquiry__img-01.png',
          'alt' => 'サービス資料ダウンロード',
          'title' => 'サービス資料ダウンロード',
          'text' => '導入事例など店舗アプリサービスを網羅した詳しい資料はこちら！',
          'btn' => '資料をダウンロード',
          'link' => 'doc-download',
        ],
        [
          'img' => 'secInquiry__img-02.png',
          'alt' => 'ご相談・お問い合わせ',
          'title' => 'ご相談・お問い合わせ',
          'text' => '機能の確認や見積もりなど何でもお気軽にお問い合わせください。',
          'btn' => 'お問い合わせ',
          'link' => 'contact',
        ],
        [
          'img' => 'secInquiry__img-03.png',
          'alt' => 'オンライン相談',
          'title' => 'オンライン相談',
          'text' => 'オンラインで導入検討の方やサービス詳細のご相談を受け付けております。',
          'btn' => 'ご予約はこちら',
          'link' => 'consult',
        ],
      ];

      foreach ($inquiry_cards as $card) :
      ?>
        <div class="secInquiry__cardItem">
          <div class="secInquiry__cardItemImg">
            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/testimonies/<?php echo $card['img']; ?>" alt="<?php echo esc_attr($card['alt']); ?>" />
          </div>
          <div class="secInquiry__cardItemCont">
            <h3 class="secInquiry__cardItemTtl"><?php echo $card['title']; ?></h3>
            <p class="secInquiry__cardItemTxt"><?php echo $card['text']; ?></p>
            <a class="secInquiry__cardItemBtn" href="<?php echo home_url() . '/' . $card['link']; ?>"><?php echo $card['btn']; ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
