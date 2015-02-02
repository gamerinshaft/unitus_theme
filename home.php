<?php
/*
Template Name: home
*/
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery.marquee.js"></script>
  </head>
  <body>
    <?php the_post(); ?>
    <div main="home">
      <section panel="about">
        <div ribon="wrapper">
          <a ribon="content" href="http://yahoo.co.jp">
            <span>企業様はこちら</span>
          </a>
        </div>
        <div block="yellow"></div>
        <div block="pink"></div>
        <div block="blue"></div>
        <div block="green"></div>
        <div utility="table">
          <div utility="table-cell">
            <div class="container">
              <div parts="title">
                <div parts="theme">
                  <?php the_title(); ?>
                </div>
                <div parts="logo">
                  UNITUS<span dot>.</span>
                </div>
              </div>
              <div box="comment">
                <h1>新着情報</h1>
                新着情報はありません。
              </div>
              <div parts="content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div parts="wraparound">
        <div utility="table">
          <div utility="table-cell">
            <marquee behavior="scroll" direction="down" scrollamount="6" height="150">ほげほげほげほげぼげ</marquee>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function(){

        var comment = $("[panel=about] blockquote").html();
        $("[panel=about] blockquote").remove();
        $("[box=comment]").html(comment);
        var count = 0;
        var state = "move";
        var isReset = false
        var proverb = [];
        $("[panel=about] [parts=content] em").each(function(index){proverb.push($(this).text())}).parent().remove();
        var timer_id = setInterval( function () {
          if($("[parts=wraparound] .pointer div").position().top > -110 && state=="move" && isReset){
            $("[parts=wraparound] .pointer").trigger("stop");
            state="stop";
          }else if(state=="stop"){
            count+=1;
            if(count > 300){
              count = 0;
              $("[parts=wraparound] .pointer").trigger("start");
              state="move"
              isReset = false;
            }
          }else if($("[parts=wraparound] .pointer div").position().top < -110 && !isReset){
            isReset = true;
            $("[parts=wraparound] .pointer div").html(proverb[Math.floor((proverb.length * Math.random()))]);
          }
        } , 10 );
      });
    </script>
    <script type="text/javascript">
      $(function () {
          $("[parts=wraparound] marquee").marquee('pointer').mouseover(function () {
              // $(this).trigger('stop');
          }).mouseout(function () {
              // $(this).trigger('start');
          }).mousemove(function (event) {
              if ($(this).data('drag') == true) {
                  this.scrollLeft = $(this).data('scrollX') + ($(this).data('x') - event.clientX);
              }
          }).mousedown(function (event) {
              $(this).data('drag', true).data('x', event.clientX).data('scrollX', this.scrollLeft);
          }).mouseup(function () {
              $(this).data('drag', false);
          });
      });
    </script>
  </body>
</html>