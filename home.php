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
    <div class="back">
      <canvas></canvas>
    </div>
    <div id="home">
      <?php get_header(); ?>
      <section class="transparent">
        <div class="col carousel-wrap">
          <div class="flex flex-xs-auto"></div>
          <div class="your-class">
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
          </div>
          <div class="flex flex-xs-auto"></div>
        </div>
      </section>
      <section class="white">
        <h1 class="title center">実践の場を提供する</h1>
      </section>
      <section class="transparent">
        <div class="row">
          <div class="flex flex-xs-5">
            <div class="frame z2">
              SAP
            </div>
          </div>
          <div class="flex flex-xs-5">
            <div class="frame z2">
              SAP
            </div>
          </div>
          <div class="flex flex-xs-5">
            <div class="frame z2">
              SAP
            </div>
          </div>

        </div>
      </section>
    </div>
   <!--  <?php the_post(); ?> -->
    <!-- <div class="ribon__wrapper">
      <a class="ribon__content" href="<?php bloginfo('url'); ?>/enterprise">
        <span>企業様はこちら</span>
      </a>
    </div>
    <section class="section section--about" data-js="sectionAbout">
      <div data-js="object" class="diamond diamond--yellow"></div>
      <div data-js="object" class="diamond diamond--pink"></div>
      <div data-js="object" class="diamond diamond--blue"></div>
      <div data-js="object" class="diamond diamond--green"></div>
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
    <section class="section section--group" data-js="sectionGroup">
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div class="title">
                  <div class="logo">
                    Circle<span class="dot">.</span>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="content">
                  <p>
                    Unitusには多数のプログラム関連サークルが参加しています。Unitusは学生間の交流を目的として、プログラミングの大会や勉強会、交流会を企画しています。（詳しくはEvent参照）
                    ここにはそうした活動を通して繋がりを持った各団体の活動記録等を載せています。
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="pull-right">
                          <a class="btn btn-primary" href="<?php bloginfo('url'); ?>/circle">団体一覧をみてみる</a>
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
      <div data-js="object" class="square square--yellow"></div>
      <div data-js="object" class="square square--pink"></div>
      <div data-js="object" class="square square--blue"></div>
      <div data-js="object" class="square square--green"></div>
    </section>
    <div class="wraparound" data-js="wraparound">
      <div class="table">
        <div class="table-cell">
          <marquee behavior="scroll" direction="down" scrollamount="6" height="150">Unitus</marquee>
        </div>
      </div>
    </div>
    <section class="section section--event" data-js="sectionAchievement">
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div class="title">
                  <div class="logo">
                    Event<span class="dot">.</span>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="content">
                  <p>
                    Unitusは学生間の交流を目的として、プログラミングの大会や勉強会、交流会を企画しています。ここでは開催予定のイベントや終了済のイベントの情報を公開してます。
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="pull-right">
                          <a class="btn btn-primary" href="<?php bloginfo('url'); ?>/event">イベント一覧をみてみる</a>
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
      <div data-js="object" class="circle circle--yellow"></div>
      <div data-js="object" class="circle circle--pink"></div>
      <div data-js="object" class="circle circle--blue"></div>
      <div data-js="object" class="circle circle--green"></div>
    </section> -->
    <!-- <?php get_footer() ?> -->
    <script>
      lowpoly();
      setInterval(lowpoly,30000)
      function lowpoly(){
        var pattern = Trianglify({
          height: window.innerHeight,
          width: window.innerWidth,
          variance: 0+Math.random(),
          cell_size: 40+Math.random()*100});
        $(".back canvas")[0].remove();
        $(".back").prepend(pattern.canvas());
      }
    </script>
    <script>//slick
      $(function(){
        $('.your-class').slick({
          dots: true,
          arrows: false,
          centerMode: true,
          autoplay: true,
          autoplaySpeed: 2000,
          centerPadding: '240px',
          slidesToShow: 1,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
      });
    </script>
    <!-- <script>
      $(function(){
        $(window).on("scroll",function(){
          // if($("[data-js=sectionGroup]").position().top < $(this).scrollTop()){a
          //   $("[data-js=sectionAbout] [data-js=object]").each(function(index){
          //     $("[data-js=sectionGroup]").append($(this).get(0));
          //   });
          //   $(".square").css({
          //     position: 'fixed'
          //   });
          //   // $("[data-js=sectionAbout]").css({
          //   //   backgroundImage: 'url(<?php bloginfo('stylesheet_directory'); ?>/img/music_back.jpg)',
          //   // });
          // }
          // if($("[data-js=sectionAchievement]").position().top -5 < $(this).scrollTop()){
          //   $("[data-js=sectionGroup] [data-js=object]").each(function(index){
          //     $("[data-js=sectionAchievement]").append($(this).get(0));
          //   });
          //   $(".circle").css({
          //     position: 'fixed'
          //   });
          //   //  $("[data-js=sectionGroup]").css({
          //   //   backgroundImage: 'url(<?php bloginfo('stylesheet_directory'); ?>/img/lisp.png)',
          //   // });
          // }
        });

        var comment = $("[data-js=sectionAbout] blockquote").html();
        $("[data-js=sectionAbout] blockquote").remove();
        $("[data-js=comment]").html(comment);
        var count = 0;
        var state = "move";
        var isReset = false;
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
              state="move";
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
    <script type="text/javascript">
      $(document).ready(function(){
         var agent = navigator.userAgent;
         var height = $("section.section").height() + "px"

         if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/Android/) != -1){
         $('section.section').css({
            height: height
          });
         }

      });
    </script> -->
  </body>
</html>