<section class="secDownload">
  <div class="secDownload__inner">
      <div class="secDownload__headingContainer">
          <h2 class="secDownload__heading">店舗アプリのサービス資料</h2>
          <p class="secDownload__desc">国内最大級 アプリ開発累積900社突破！<br>
          店舗アプリのサービスを網羅した資料をダウンロードいただけます。</p>
      </div>
      <div class="secDownload__content">
          <figure class="secDownload__imgContainer">
              <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/download/secDownload_img.jpg" alt="" class="secDownload__img">
          </figure>
          <?php 
          while (have_posts()) : the_post();
              the_content();
          endwhile;
          ?>
      </div>
  </div>
</section>