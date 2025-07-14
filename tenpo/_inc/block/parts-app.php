<?php
$app_group = get_field('case_appgroup');

$placeholder_images = [
  get_template_directory_uri() . '/_assets/images/testimoniesDetail/secCaseDetails_img-03.png',
  get_template_directory_uri() . '/_assets/images/testimoniesDetail/secCaseDetails_img-04.png',
  get_template_directory_uri() . '/_assets/images/testimoniesDetail/secCaseDetails_img-05.png',
  get_template_directory_uri() . '/_assets/images/testimoniesDetail/secCaseDetails_img-06.png'
];
?>

<?php if ($app_group): ?>
<div class="secApp">
  <div class="secApp__container">
    <?php 
    $image_count = 0;
    
    if ($app_group['case_appimg']): ?>
      <div class="secApp__image">
        <img
          src="<?php echo esc_url($app_group['case_appimg']['url']); ?>"
          alt="<?php echo esc_attr($app_group['case_appimg']['alt'] ?: 'App Image'); ?>"
        />
      </div>
      <?php $image_count++; ?>
    <?php endif; ?>

    <?php 
    if ($app_group['case_appimggroup']): 
      foreach ($app_group['case_appimggroup'] as $app_img): 
        if ($app_img['case_appimg']): ?>
          <div class="secApp__image">
            <img
              src="<?php echo esc_url($app_img['case_appimg']['url']); ?>"
              alt="<?php echo esc_attr($app_img['case_appimg']['alt'] ?: 'App Image'); ?>"
            />
          </div>
          <?php $image_count++; ?>
        <?php endif;
      endforeach;
    endif; 

    if ($image_count === 0):
      foreach ($placeholder_images as $placeholder_img): ?>
        <div class="secApp__image">
          <img
            src="<?php echo esc_url($placeholder_img); ?>"
            alt="App Image Placeholder"
          />
        </div>
      <?php endforeach;
    endif; ?>
  </div>

  <?php 
  $qr_group = $app_group['case_qrgroup'];
  ?>
  <div class="secApp__container">
    <div class="secApp__qrContainer">
      <p class="secApp__qrHeading">ダウンロードはこちら</p>
      
      <?php if ($qr_group && $qr_group['case_qrcode']): ?>
        <img 
          src="<?php echo esc_url($qr_group['case_qrcode']['url']); ?>" 
          alt="<?php echo esc_attr($qr_group['case_qrcode']['alt'] ?: 'QR Code'); ?>" 
          class="secApp__qrCode"
        >
      <?php else: ?>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/placeholder.png" 
          alt="QR Code" 
          class="secApp__qrCode"
        >
      <?php endif; ?>
      
      <div class="secApp__extLinkWrap">
        <a href="<?php echo ($qr_group && $qr_group['case_googleplay']) ? esc_url($qr_group['case_googleplay']) : '#'; ?>" class="secApp__extLink" target="_blank" rel="noopener">
          <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/googlePlay.png" alt="Google Play" class="secApp__extLinkImg">
        </a>
        
        <a href="<?php echo ($qr_group && $qr_group['case_appstore']) ? esc_url($qr_group['case_appstore']) : '#'; ?>" class="secApp__extLink" target="_blank" rel="noopener">
          <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/appStore.png" alt="App Store" class="secApp__extLinkImg">
        </a>
      </div>
    </div>
  </div>
</div>

<?php else: ?>
<div class="secApp">
  <div class="secApp__container">
    <?php foreach ($placeholder_images as $placeholder_img): ?>
      <div class="secApp__image">
        <img
          src="<?php echo esc_url($placeholder_img); ?>"
          alt="App Image Placeholder"
          class="secApp__imageItem"
        />
      </div>
    <?php endforeach; ?>
  </div>
  <div class="secApp__container">
    <div class="secApp__qrContainer">
      <p class="secApp__qrHeading">ダウンロードはこちら</p>
      <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/qr.png" alt="QR Code" class="secApp__qrCode">
      <div class="secApp__extLinkWrap">
        <a href="#" class="secApp__extLink">
          <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/googlePlay.png" alt="Google Play" class="secApp__extLinkImg">
        </a>
        <a href="#" class="secApp__extLink">
          <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/appStore.png" alt="App Store" class="secApp__extLinkImg">
        </a>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>