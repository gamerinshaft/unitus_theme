<?php
/*
Template Name: programming
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/programming.css">
  </head>
  <body>
    <div main="programming">
      <?php $categories = get_categories();; ?>
        <?php foreach($categories as $category) :
          if($category->cat_name == "programming") :
            query_posts('showposts=0&cat=' . $category->cat_ID);
               while(have_posts()) :
                the_post();
                $cats = get_the_category();
                $tmp = "";
                foreach($cats as $cat){
                  if($cat->parent){$tmp = $tmp . "/" . ($cat -> cat_name);}
                }

                echo '╭─<span line-Parts="author">blogrammer@Programming</span><span line-Parts="category"> ~/programming' . $tmp . '</span><span line-Parts="date">' . get_the_time(' ‹m.d›') . '</span><a href='. get_permalink() . ' line-Parts="show"> ‹show›</a> <br>' ;
                echo '╰─　cat ' . get_the_title() . '<br>';
                echo mb_substr(strip_tags($post-> post_content),0,100) . '...<br>';
              endwhile;
            wp_reset_query();
          endif;
        endforeach;
      ?>
    </div>
  </body>
</html>