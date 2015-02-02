<!DOCTYPE html>
<html>
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/cooking_single.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
    ?>
    <?php the_post(); ?>
    <div main="cooking_single">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 menu-Title><?php echo the_title(); ?> </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <img main-Image src="<?php echo $image_url[0]; ?>">
          </div>
          <div class="col-md-4 col-xs-12">
            <div menu-List >
            </div>
          </div>
        </div>
        <div process class="row">
          <?php echo the_content(); ?>
        </div>
      </div>
      <?php get_footer() ?>
    </div>
    <script>
      $(function(){
        $("[menu-List]").html($("blockquote").get(0));
        console.log($("blockquote").get());
      });
    </script>
  </body>
</html>