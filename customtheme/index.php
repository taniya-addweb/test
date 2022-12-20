<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 

	get_template_part( 'template-parts/post/content');
	
	?>
	
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;


get_footer();

?> 
 
