<!DOCTYPE html>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_url[0];
?>
<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/event/event_single.css">
  </head>
  <body id="event_single">
    <?php the_post() ?>
    <div class="top">
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <h1><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content_wrapper" style="background-image: url('<?php echo $image_url[0]; ?>')">
      <div class="container">
        <div class="content">
          <?php the_content() ?>
        </div>
      </div>
    </div>
    <?php get_footer() ?>
  </body>
</html>