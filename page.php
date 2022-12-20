<?php
/* print page content in word-press */ 

get_header();
?>

<div id="private" class="content-area">
    <main id="man" class="site-main">
<?php
while(have_posts()) :

the_post();
get_template_part( 'template-parts/page/content', 'page' ); //content-page.php

endwhile;

?>

    </main>

</div>

<?php
 

get_footer();
?>
