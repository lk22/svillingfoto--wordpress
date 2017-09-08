<?php
/**
 * get wordpress header
 * */
 get_header();
      /**
       * if we have any posts
       */
      if(have_posts()) {
            /**
             * loop through the posts
             */
            while (have_posts()) {
                  // grab the post
                  the_post();
                  // get content template part(content.php)
                  get_template_part('content', get_post_format());
            }
      }
/**
 * get wordpress footer
 */
 get_footer();