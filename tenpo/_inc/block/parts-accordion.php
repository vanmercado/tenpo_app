<?php
$accordion_btnText = $content['accordion_btnText']; // accordion button text
$accordion_contents = $content['accordion_contents']; // accordion contents
$accordionRandomNum = rand(); // for multi accordion
?>
<a href="javascript:void(0)" class="accordionBtn js-btn" data-btn="accordion-<?php echo $accordionRandomNum; ?>" data-animation="slide">
    <p class="accordionBtn__text"><?php echo $accordion_btnText; ?></p>
    <span class="accordionBtn__icon">icon</span>
</a>
<div class="accordionContent" data-target="accordion-<?php echo $accordionRandomNum; ?>">
    <div class="visualEditArea">
        <?php echo $accordion_contents; ?>
    </div>
</div>
