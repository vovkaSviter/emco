<?php

$args = array(
  'cat'         => '2',
);

$q = new WP_Query($args);

/*if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();
  } else {
	//no post found
  }
  
  wp_reset_postdata();
  
}*/

if ( $q->have_posts() ) : 
    while ( $q->have_posts() ) : $q->the_post();
        the_title();
		the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	
	wp_reset_postdata();
	
endif;


?>