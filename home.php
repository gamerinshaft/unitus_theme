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
        <div class="diamond diamond--yellow"></div>
        <div class="diamond diamond--pink"></div>
        <div class="diamond diamond--blue"></div>
        <div class="diamond diamond--green"></div>
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
      <section class="section section--group">
        <div class="table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="title">
                    <div class="logo">
                      Join<span class="dot">.</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="content">
                    <p>
                      Unitusは学生エンジニアを統合する事を目的としたプログラミング連盟です。連盟に加盟してもらう事に寄って、それぞれの活動をより綿密なものにします。
                      難しい手続き等は一切ありません。フォームから情報を送信して頂ければこちらからコンタクトをします。
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="pull-right">
                            <a class="btn btn-primary" href="http://yahoo.co.jp">団体一覧をみてみる</a>
                          </div>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="square square--yellow"></div>
        <div class="square square--pink"></div>
        <div class="square square--blue"></div>
        <div class="square square--green"></div>
      </section>
      <div class="wraparound" data-js="wraparound">
        <div class="table">
          <div class="table-cell">
            <marquee behavior="scroll" direction="down" scrollamount="6" height="150">Unitus</marquee>
          </div>
        </div>
      </div>
      <section class="section section--hoge">
        <div class="table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="title">
                    <div class="logo">
                      Join<span class="dot">.</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="content">
                    <p>
                      Unitusは学生エンジニアを統合する事を目的としたプログラミング連盟です。連盟に加盟してもらう事に寄って、それぞれの活動をより綿密なものにします。
                      難しい手続き等は一切ありません。フォームから情報を送信して頂ければこちらからコンタクトをします。
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="pull-right">
                            <a class="btn btn-primary" href="http://yahoo.co.jp">団体一覧をみてみる</a>
                          </div>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="circle circle--yellow"></div>
        <div class="circle circle--pink"></div>
        <div class="circle circle--blue"></div>
        <div class="circle circle--green"></div>
      </section>
    </div>
    <script>
      $(function(){
        $("#home").on("scroll",function(){
          if($(this).scrollTop() == 0){
            $(".square").animate(
              {opacity: 0},
              {
                duration: 300,
                complete: function(){
                  $(this).css({
                    position: "absolute",
                    opacity: 1
                  });
                }
              }
            );
            $(".circle").animate(
              {opacity: 0},
              {
                duration: 300,
                complete: function(){
                  $(this).css({
                    position: "absolute",
                    opacity: 1
                  });
                }
              }
            );
          }
          if($(".section--group").position().top < 0){
            $(".square").css({
              position: 'fixed'
            });
          }
          if($(".section--hoge").position().top < 5){
            $(".circle").css({
              position: 'fixed'
            });
          }
        });

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