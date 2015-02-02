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
    <script type="text/javascript">
    $(function () {
        $("[parts=wraparound] marquee").marquee('pointer').mouseover(function () {
            $(this).trigger('stop');
        }).mouseout(function () {
            $(this).trigger('start');
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
        <marquee behavior="scroll" direction="down" scrollamount="0.2" height="150">ぼげ</marquee>
      </div>
      <section panel="circle">
        <div ball="yellow"></div>
        <div ball="pink"></div>
        <div ball="green"></div>
        <div ball="blue"></div>
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
                これは最新のコメントです。
              </div>
              <div parts="content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script>
      $(function(){

        var comment = $("[panel=about] blockquote").html();
        $("[panel=about] blockquote").remove();
        $("[box=comment]").html(comment);
        console.log($("[parts=wraparound] marquee").marquee('pointer'));

      });
    </script>
  </body>
</html>