<!DOCTYPE html>
<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/circle/circle_single.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
      $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_url[0];
    ?>
    <?php the_post(); ?>
    <div id="circle_single">
      <section class="section section--top" data-js="sectionTop">
        <div class="smoke"></div>
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <div class="top__thumbnail" style="background-image: url('<?php echo $image_url[0]; ?>');"></div>
        </div>
      </section>
      <section class="section section--postcontent">
        <div class="container">
            <?php echo the_content(); ?>
        </div>
      </section>

      <?php get_footer() ?>
    </div>
    <script>
      $(function(){
        $("[data-js=sectionTop]").css({
            backgroundImage: "url('" + $("[data-js=back-image] > img").attr("src") + "')"
        });
        $("[data-js=back-image] > img").remove();
        var icons = $("blockquote").find("blockquote")
        icons.each(function(index){
          var className = $(this).text();
          $(this).html("<i class='glyphicon " + className + "'></i>");
        });
      });
    </script>
  </body>
</html>
