<?php
if ( locate_template('_inc/page/' . $parentPage_slug . '/page__' . $pageSlug . '.php') ):
    include locate_template('_inc/page/' . $parentPage_slug . '/page__' . $pageSlug . '.php');

else:
    include locate_template('_inc/block/flexibleContent.php');

endif;
