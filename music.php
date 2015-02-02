<?php
/*
Template Name: music
*/
?>

<!DOCTYPE html>

<html>
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/music.css">
  </head>
  <body>
    <div main="music">
      <?php $categories = get_categories(); ?>
      <?php foreach($categories as $category) : ?>
        <?php if($category->cat_name == "music") : ?>
          <?php query_posts('showposts=0&cat=' . $category->cat_ID); ?>
            <article>
              <section>
                <h1>PlayList</h1>
              </section>
              <?php while(have_posts()) : ?>
                <section>
                  <?php the_post(); ?>
                  <?php echo '<a blog-title href="' . get_permalink() . '">'; ?>
                  <?php echo get_the_title(); ?>
                  <?php echo '</a>'; ?>
                  <div play-Description>
                    <?php $content = get_the_content(); ?>
                    <?php $pattern = '/<iframe(.*)<\/iframe>/'; ?>
                    <?php preg_match($pattern, $content, $match); ?>
                    <?php echo "<iframe" .$match[1]. "</iframe>" ?>
                  </div>
                </section>
              <?php endwhile; ?>
            </article>
          <?php wp_reset_query(); ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/bespoke.js"></script>
  </body>
</html>