<?php
/*
Template Name: enterprise
*/
?>
<!DOCTYPE html>

<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/enterprise/enterprise.css">
  </head>
  <body id="enterprise">
    <?php the_post() ?>
    <div class="top">
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <h1 data-js="title"></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content" data-js="postcontent">
        <?php the_content() ?>
      </div>
    </div>
    <script>
      $(function(){
        $("[data-js=title]").html($("[data-js=postcontent] h1").get(0));
        $(window).on("load resize", function(){
          $(".content img").css({
            width: "100%"
          });
        })
      });
    </script>
  </body>
</html>