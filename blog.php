<?php
/*
Template Name: blog
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header() ?>
  </head>
  <body>
    <?php $categories = get_categories(); ?>
    <?php foreach($categories as $category) :
      if($category->cat_name == "blog") :
        query_posts('showposts=0&cat=' . $category->cat_ID);
           while(have_posts()) :
            the_post();
            echo '<li>' . get_the_title() . '</li>';
          endwhile;
        wp_reset_query();
      endif;
    endforeach;
    ?>
  </body>
</html>