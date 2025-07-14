<?php
if ( locate_template('_inc/page/' . $grandParentPage_slug . '/' . $parentPage_slug . '/page__' . $parentPage_slug . 'Child.php') ):
    include locate_template('_inc/page/' . $grandParentPage_slug . '/' . $parentPage_slug . '/page__' . $parentPage_slug . 'Child.php');

else:
    include locate_template('_inc/block/flexibleContent.php');

endif;
