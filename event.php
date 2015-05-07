<?php
/*
Template Name: event
*/
?>
<?php
  $categories = get_categories();
  foreach($categories as $category) :
    if($category->cat_name== "event") :
      $event_children = get_categories(array('parent' => $category->cat_ID, 'hide_empty' => 0 ));
      foreach($event_children as $event_child) :
        if($event_child->cat_name == "isImportant") :
          query_posts('showposts=0&cat=' . $event_child->cat_ID);
          $top_content_num = $event_child->count;
          $top_content = "";
          while(have_posts()) :
            the_post();
            $image_single_id = get_post_thumbnail_id();
            $image_single_url = wp_get_attachment_image_src($image_single_id, true);
            $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0];
            $top_content .=  '<div class="item" style="background-image: url(\'' . $image_single_url[0] . '\');">';
            $top_content .=  '<div class="carousel-caption">';
            $top_content .=  '<div class="ribon__wrapper">';
            $top_content .=  '<a class="ribon__content" href="'. get_permalink() .'">';
            $top_content .=  '<span>詳細をみる</span>';
            $top_content .=  '</a>';
            $top_content .=  '</div>';
            $top_content .=  '</div>';
            $top_content .=  '</div>';
          endwhile;
        elseif($event_child->cat_name == "unfinished") :
          query_posts('showposts=0&cat=' . $event_child->cat_ID);
          $unfinished_content = "";
          while(have_posts()) :
            the_post();
            $image_single_id = get_post_thumbnail_id();
            $image_single_url = wp_get_attachment_image_src($image_single_id, true);
            $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0];
            $w = mt_rand(0, 100) + 200;
            $h = mt_rand(0, 100) + 200;
            $tags = get_the_tags();
            $unfinished_content .=  '<a href="'. get_permalink() .'" class="cell" style="background-image: url(\'' . $image_single_url[0] . '\'); width:'. $w . 'px; height:' . $h . 'px; ">';
            $unfinished_content .= "<div class='taglist'>";
            foreach($tags as $tag):
              $unfinished_content .= "<span class='tag'>" . $tag->name . "</span>";
            endforeach;
            $unfinished_content .=  '</div>';
            $unfinished_content .=  '<div class="title">';
            $unfinished_content .=  get_the_title();
            $unfinished_content .=  '</div>';
            $unfinished_content .=  '</a>';
          endwhile;
        elseif($event_child->cat_name == "finished") :
          query_posts('showposts=0&cat=' . $event_child->cat_ID);
          $finished_content = "";
          while(have_posts()) :
            the_post();
            $image_single_id = get_post_thumbnail_id();
            $image_single_url = wp_get_attachment_image_src($image_single_id, true);
            $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0];
            $w = mt_rand(0, 100) + 200;
            $h = mt_rand(0, 100) + 200;
            $finished_content .=  '<a href="'. get_permalink() .'" class="cell" style="background-image: url(\'' . $image_single_url[0] . '\'); width:'. $w . 'px; height:' . $h . 'px; ">';
            $finished_content .= "<div class='smoke'></div>";
            $finished_content .= "<div class='taglist'>";
            if(!empty($tags)) :
              foreach($tags as $tag):
                $finished_content .= "<span class='tag'>" . $tag->name . "</span>";
              endforeach;
            endif;
            $finished_content .=  '</div>';
            $finished_content .=  '<div class="title" href="'. get_permalink() .'">';
            $finished_content .=  get_the_title();
            $finished_content .=  '</div>';
            $finished_content .=  '</a>';
          endwhile;
        endif;
      endforeach;
    endif;
  endforeach;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/event/event.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/freewall.js"></script>
  </head>
  <body id="event">
    <?php the_post(); ?>
    <section class="event-carousel">
      <div id="event-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php echo $top_content ?>
        </div>
        <!-- Controls -->
        <?php if($top_content_num != 1) :?>
          <a class="left carousel-control" href="#event-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#event-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        <?php endif; ?>
      </div>
    </section>
    <section class="event-content">
      <div class="container">
        <h1>開催予定のイベント</h1>
        <div class="row">
          <div id="unfinished_freewall">
            <?php echo $unfinished_content ?>
          </div>
        </div>
        <h1>終了したイベント</h1>
        <div class="row">
          <div id="finished_freewall">
            <?php echo $finished_content ?>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer() ?>
    <script>
      $(function(){
        $($(".event-carousel .item")[0]).addClass("active");

        var wall1 = new freewall("#unfinished_freewall");
        wall1.reset({
          selector: '.cell',
          animate: true,
          cellW: 20,
          cellH: 200,
          onResize: function() {
            wall1.fitWidth();
          }
        });
        var wall2 = new freewall("#finished_freewall");
        wall2.reset({
          selector: '.cell',
          animate: true,
          cellW: 20,
          cellH: 200,
          onResize: function() {
            wall2.fitWidth();
          }
        });
        wall1.fitWidth();
        wall2.fitWidth();
        // for scroll bar appear;
        $(window).trigger("resize");
      });
    </script>
  </body>
</html>
