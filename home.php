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
    <div id="home" class="main">
      <section class="section section--about" data-js="sectionAbout">
        <div class="ribon__wrapper">
          <a class="ribon__content" href="http://yahoo.co.jp">
            <span>企業様はこちら</span>
          </a>
        </div>
        <div class="block block--yellow"></div>
        <div class="block block--pink"></div>
        <div class="block block--blue"></div>
        <div class="block block--green"></div>
        <div class="table">
          <div class="table-cell">
            <div class="container">
              <div class="title">
                <div class="theme">
                  <?php the_title(); ?>
                </div>
                <div class="logo">
                  UNITUS<span class="dot">.</span>
                </div>
              </div>
              <div class="comment" data-js="comment">
                <h1>新着情報</h1>
                新着情報はありません。
              </div>
              <div class="content" data-js="proverb">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="wraparound" data-js="wraparound">
        <div class="table">
          <div class="table-cell">
            <marquee behavior="scroll" direction="down" scrollamount="6" height="150">Unitus</marquee>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function(){

        var comment = $("[data-js=sectionAbout] blockquote").html();
        $("[data-js=sectionAbout] blockquote").remove();
        $("[data-js=comment]").html(comment);
        var count = 0;
        var state = "move";
        var isReset = false
        var proverb = [];
        $("[data-js=proverb] em").each(function(index){proverb.push($(this).text())}).parent().remove();
        var timer_id = setInterval( function () {
          if($("[data-js=wraparound] .pointer div").position().top > -110 && state=="move" && isReset){
            $("[data-js=wraparound] .pointer").trigger("stop");
            state="stop";
          }else if(state=="stop"){
            count+=1;
            if(count > 300){
              count = 0;
              $("[data-js=wraparound] .pointer").trigger("start");
              state="move"
              isReset = false;
            }
          }else if($("[data-js=wraparound] .pointer div").position().top < -110 && !isReset){
            isReset = true;
            $("[data-js=wraparound] .pointer div").html(proverb[Math.floor((proverb.length * Math.random()))]);
          }
        } , 10 );
      });
    </script>
    <script type="text/javascript">
      $(function () {
          $("[data-js=wraparound] marquee").marquee('pointer').mouseover(function () {
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