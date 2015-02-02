<!DOCTYPE html>

<html>
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/highlight/monokai_sublime.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/programming_single.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
      $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/programming_back.jpg':$image_url[0];
    ?>
    <?php the_post() ?>
    <div main="programming_single">
      <div module="top" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
        <div table>
          <div table-cell>
            <div parts="smoke">
            </div>
            <div parts="title">
              <?php echo the_title(); ?>
            </div>
          </div>
        </div>
      </div>
      <div content class="container">
        <?php the_content() ?>
        <div comment class="row">
          <div class="col-xs-12">
            <?php comments_template(); ?>
          </div>
        </div>
        <div btns class="row">
          <div class="col-xs-6">
            <div btn="previous">
              <?php previous_post_link('%link', '<<%title', TRUE, ''); ?>
            </div>
          </div>
          <div class="col-xs-6">
            <div btn="next">
              <?php next_post_link('%link ', '%title>>', TRUE, ''); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer() ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lib/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>