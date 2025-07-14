<?php
if ( locate_template('_inc/page/page__' . $pageSlug . '.php') ):
    include locate_template('_inc/page/page__' . $pageSlug . '.php');

else:
    include locate_template('_inc/block/flexibleContent.php');

endif;
