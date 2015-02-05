<?php
/*
Template Name: event
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/event/event.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery.marquee.js"></script>
  </head>
  <body id="event">
    <?php the_post(); ?>
    <section class="event-carousel">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $categories = get_categories(); ?>
            <?php foreach($categories as $category) :
              if($category->cat_name == "event") :
                $circleNum =  $category->count;
                query_posts('showposts=0&cat=' . $category->cat_ID);
                   while(have_posts()) :
                    the_post();
                    $image_single_id = get_post_thumbnail_id();
                    $image_single_url = wp_get_attachment_image_src($image_single_id, true);
                    $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0];
                    ?>

<!--                   <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol> -->

                  <!-- Wrapper for slides -->

                  <div class="item" style="background-image: url('<?php echo $image_single_url[0] ?>');">
                    <div class="carousel-caption">
                      <?php echo the_content() ?>
                    </div>
                  </div>
                <?php endwhile;
              wp_reset_query();
            endif;
          endforeach;
          ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <?php get_footer() ?>
    <script>
      $(function(){
        $($(".event-carousel .item")[0]).addClass("active")
      });
    </script>
  </body>
</html>
