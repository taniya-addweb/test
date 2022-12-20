<?php

get_header(); //-> get header of website

get_footer(); //-> get footer of website

language_attributes();//-> set lang attribute in website

bloginfo( 'charset' ) //->set  the neta-charset version in website

wp_head() // -> wordpress hook ,which will bring all required wordpress attribute ,which will be required to handle in wordpress

body_class() //-> add default class in body_class

wp_footer() //-> wordpress hook which will include admin bar and  will bring all required wordpress attribute ,which will be required to handle in wordpress

have_posts() // -> which will check the wordpress have post or not

the_ID()  //-> print out the id of current post

the_title() //-> print out the post title along some link if available  ,And also having two parameter // 
// by clicking it will redirect to single.php page
      //Example : 
      the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );

esc_url(  ); //-> print link ,escaping  url funtion in wordpress

get_permalink() //-> print current loop post url . 
has_post_thumbnail() // ->has post tumbnail attached to it Check condition 
 //usage 
 the_post_thumbnail( $string ) : // print post thumnail with size parameter

 if ( has_post_thumbnail() ) :
    the_post_thumbnail( 'large' ); // full, large, medium, custom size
endif;


the_excerpt() : // this will print the portion of post 

add_theme_support( 'post-thumbnails' ); // activate feature image in custom theme  (add this code  function.php)

/* Loop in Wordpress: */


if ( have_posts() ) :
endif;

while ( have_posts() ) : the_post(); 
endwhile;

?>
locate_template()
wp-includes/template.php
Retrieves the name of the highest priority template file that exists.

do_action()
wp-includes/plugin.php
Calls the callback functions that have been added to an action hook.