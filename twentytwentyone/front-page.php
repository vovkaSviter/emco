<?php

/**************************************Loop**************************************/

$args_loop = array(
  'cat'         => '2'
);

$q = new WP_Query($args_loop);

if ( $q->have_posts() ) : 
    while ( $q->have_posts() ) : $q->the_post();
        the_title();
		the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	
	wp_reset_postdata();
	
endif;

/**************************************Loop**************************************/

/**************************************MainNav**************************************/

$args_mainNav = array(
	'name' => 'mainNav'
);

wp_nav_menu($args_mainNav);


/**************************************MainNav**************************************


?>