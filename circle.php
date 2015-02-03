<?php
/*
Template Name: circle
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_url[0];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/circle/circle.css">
  </head>
  <body id="circle">
    <?php get_header() ?>
    <div class="container">
      <?php $categories = get_categories(); ?>
      <?php the_post() ?>
      <?php echo the_content() ?>
      <?php foreach($categories as $category) :
        if($category->cat_name == "circle") :
          query_posts('showposts=0&cat=' . $category->cat_ID);
             while(have_posts()) :
              the_post();
              $image_single_id = get_post_thumbnail_id();
              $image_single_url = wp_get_attachment_image_src($image_single_id, true);
              $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0]; ?>

               <img src="<?php echo $image_single_url[0]?>">
               <li><?php echo the_title() ?></li>

             <?php endwhile;
          wp_reset_query();
        endif;
      endforeach;
      ?>
    </div>
  </body>
</html>