<?php
/*
Template Name: cooking
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/cooking.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
    ?>
    <div main="cooking">
      <div module="top" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
        <div table>
          <div table-cell>
            <div parts="smoke">
            </div>
            <div parts="title">
              <?php the_post(); ?>
              <?php echo the_content() ?>
            </div>
          </div>
        </div>
      </div>
      <div content>
        <div class="container">
          <div panels>
            <?php $categories = get_categories(); ?>
            <?php foreach($categories as $category) :
              if($category->cat_name == "cooking") :
                query_posts('showposts=0&cat=' . $category->cat_ID);
                   while(have_posts()) :
                    the_post();
                    $image_s_id = get_post_thumbnail_id();
                    $image_s_url = wp_get_attachment_image_src($image_s_id, true);
                    echo '<a href="'. get_permalink() . '">';
                    echo '<div class="thumbnail">';
                    echo '<div image style="background-image: url(\'' . $image_s_url[0] . '\')"></div>';
                    echo '<div cook-Title>' . get_the_title() . '</div>';
                    echo '</div>';
                    echo '</a>';
                  endwhile;
                wp_reset_query();
              endif;
            endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>