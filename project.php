<?php
/*
Template Name: project
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/project_back.jpg':$image_url[0];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/project/project.css">
  </head>
  <body>
    <?php get_header() ?>
    <div main="project">
      <section module="top" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
        <div utility="smoke">
        </div>
        <div parts="topTitle">
          <h1>Do more something</h1>
        </div>
      </section>

      <?php $categories = get_categories(); ?>
      <?php the_post() ?>
      <?php echo the_content() ?>
      <?php foreach($categories as $category) :
        if($category->cat_name == "project") :
          query_posts('showposts=0&cat=' . $category->cat_ID);
             while(have_posts()) :
              the_post();
              echo '<li>' . get_the_title() . '</li>';
            endwhile;
          wp_reset_query();
        endif;
      endforeach;
      ?>
    </div>
  </body>
</html>