<?php
/*
Template Name: circle
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_url[0];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/circle/circle.css">
    <script src="http://ccchart.com/js/ccchart.js" charset="utf-8"></script>
  </head>
  <body id="circles">
    <div class="top">
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <h1>サークル一覧</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content">
       <div class="row">
        <div class="section col-md-7">
          <h1>加盟団体一覧</h1>
          <div class="circle-list">
            <hr>
            <?php $categories = get_categories(); ?>
            <?php foreach($categories as $category) :
              if($category->cat_name == "circle") :
                $circleNum =  $category->count;
                query_posts('showposts=0&cat=' . $category->cat_ID);
                   while(have_posts()) :
                    the_post();
                    $image_single_id = get_post_thumbnail_id();
                    $image_single_url = wp_get_attachment_image_src($image_single_id, true);
                    $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0]; ?>
                    <div class="circle" style="background-image: url('<?php echo $image_single_url[0]; ?>')">
                        <div class="circle__name">
                          <a href="<?php echo get_permalink(); ?>">
                           <?php echo the_title() ?>
                          </a>
                        </div>
                    </div>


                   <?php endwhile;
                wp_reset_query();
              endif;
            endforeach;
            ?>
          </div>
        </div>
        <div class="section col-md-5">
          <h1>統計情報</h1>
          <div class="status">
            <hr>
            <div class="row">
              <div class="col-xs-12">
                <div class="well statistics">
                  <canvas id="people_num"></canvas>
                </div>
              </div>
            </div>
            <div class="points row">
              <div class="col-xs-6">
                <div class="well point">
                  <h2>サークル数</h2>
                  <div class="point__num">
                    <?php echo $circleNum ?><span class="unit">団体</span>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="well point">
                  <h2>サークル数</h2>
                  <div class="point__num">
                    24<span class="unit">人</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function(){
        $(window).on("resize load",function(){
          $(".circle").css({
            height: $(".circle").width()
          })
        })
      });
    </script>
    <script>
      $.ajax({
        url: "http://unitus-core.azurewebsites.net/circlelist/debug",
        type: "POST",
        success: function(data,status,other){
          var circle_people_num = {
            "config": {
              "title": "加盟サークル総人数",
              "titleColor": "#454545",
              "subTitle": "Unitusに関わっている加盟団体の総人数です。",
              "subTitleColor": "#555",
              "unit": {"unit":"本/ A自販機の販売本数","left":10,"top":20,"align":"left","color":"#000","font":"100 12px 'Arial'"
                    },
              "bg"  : "whitesmoke",
              "lineWidth": 2,
              "useShadow": "no",
              "type": "line",
              "xScaleRotate": -45,
            },

            "data": data.Content.GraphPoints
          };

          ccchart.init('people_num', circle_people_num)
        }
      })
    </script>
  </body>
</html>