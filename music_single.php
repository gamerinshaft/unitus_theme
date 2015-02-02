<html>
  <head>
    <?php get_header() ?>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/music_single.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
    ?>
    <div main="music_single" style='background-image: url("<?php echo $image_ur[0] ?>");'>
      <div id="player"></div>
      <div class="container">
        <div main-content>
          <?php the_post() ?>
          <div table>
            <div table-cell>
              <div music>
                <div music-Control>
                  <div option="visible"></div>
                  <div btns>
                    <div btn="previous">
                      <?php $previous = '<div class="glyphicon glyphicon-backward"></div>' ?>
                      <?php previous_post_link('%link', $previous, TRUE, ''); ?>
                    </div>
                    <div btn="play">
                      <div class="glyphicon glyphicon-play"></div>
                    </div>
                    <div btn="next">
                      <?php $next = '<div class="glyphicon glyphicon-forward"></div>' ?>
                      <?php next_post_link('%link ', $next, TRUE, ''); ?>
                    </div>
                  </div>
                </div>
                <div music-Wrap>
                  <div music-Header>
                      <div post-title>
                        <?php the_title() ?>
                      </div>
                      <div post-date>
                        <?php echo "投稿日: " .get_the_time('Y/m/d') ."  　更新日: " .get_the_modified_date('Y/m/d') ?>
                      </div>
                  </div>
                  <div music-Content>
                    <?php $content = get_the_content() ?>
                    <?php $pattern = '/<iframe(.*)src="\/\/www.youtube.com\/embed\/(.*)" f(.*)<\/iframe>/'; ?>
                    <?php preg_match($pattern, $content, $match); ?>
                    <?php $id = $match[2] ?>
                    <?php $modify_content = preg_replace('/<iframe.*<\/iframe>/', '', $content); ?>
                    <?php echo $modify_content ?>
                    <?php comments_template(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var player;
      var $isPlay;
      // YouTubeAPIを使うためのJSを読み込む
      var scriptTag = document.createElement('script');
      scriptTag.src = "https://www.youtube.com/player_api";
      var fsTag = document.getElementsByTagName('script')[0];
      fsTag.parentNode.insertBefore(scriptTag, fsTag);

      // 読み込みが終わったら自動的に呼ばれる
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          width: '100%',
          videoId: '<?php echo $id ?>',
          playerVars: {
            autoplay: true,
            autohide: 1,
            controls: 0,
            modestbranding: 1,
            rel: 0,
            theme: 'light'
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      function onPlayerReady(){
        setTimeout(function(){
          player.pauseVideo();
        }, 330);
      }
      //動画の再生状態が変わったときに実行される関数
      function onPlayerStateChange(event){
        switch(event.data){
          case YT.PlayerState.ENDED:
            break;
          case YT.PlayerState.PLAYING:
            $("[btn=play] > .glyphicon").removeClass("glyphicon-play");
            $("[btn=play] > .glyphicon").addClass("glyphicon-pause");
            $isPlay = true;
            break;
          case YT.PlayerState.PAUSED:
            $("[btn=play] > .glyphicon").addClass("glyphicon-play");
            $("[btn=play] > .glyphicon").removeClass("glyphicon-pause");
            $isPlay = false;
            break;
          case YT.PlayerState.BUFFERING:
            break;
          case YT.PlayerState.CUED:
            break;
        }
      }
      $(function(){
        $("[music-Control]").draggable();
        $isVisible = true;
        $("[option=visible]").on("click", function(){
          if($isVisible){
            $("[option=visible]").css({
              'background-color' : "rgb(0,182,0)"
            });
            $("[music-Wrap]").stop().animate(
              {
                opacity: 0,
              },
              {
                duration: "slow",
                easing: "linear",
                complete: function(){
                  $("[music-Wrap]").css({
                    display: "none"
                  })

                  $isVisible = false;
                },
              },
              200
            );
          }else{
            $("[option=visible]").css({
              'background-color' : 'rgb(182,0,0)'
            });
            $("[music]").removeClass("p-hidden");
            $("[music-Wrap]").css({
              display: "block"
            })
            $("[music-Wrap]").stop().animate(
              {
                opacity: "1"
              },
              {
                duration: "slow",
                easing: "linear",
                complete: function(){
                  $isVisible = true;
                },
              },
              200
            );
          }
        });
        $("[btn=play] > .glyphicon").on("click", function(){
          if($isPlay){
            player.pauseVideo();
            $("[btn=play] > .glyphicon").addClass("glyphicon-play");
            $("[btn=play] > .glyphicon").removeClass("glyphicon-pause");
            $isPlay = false;
          }else{
            player.playVideo();
            $("[btn=play] > .glyphicon").removeClass("glyphicon-play");
            $("[btn=play] > .glyphicon").addClass("glyphicon-pause");
            $isPlay = true;
          }
        });
        $(window).on("load resize", function(){
          $top = $("[music]").position().top;
          $height = $("[music]").outerHeight();
          $("[music-Control]").css({
            top: $top + $height - 80,
            display: "block"
          });
        })
      });
    </script>
  </body>
</html>