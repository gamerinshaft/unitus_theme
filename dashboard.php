<?php
/*
Template Name: dashboard
*/
?>
<!DOCTYPE html>

<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/dashboard/dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/ZeroClipboard.min.js"></script>
  </head>
  <body id="dashboard">
    <div class="container">
      <div class="main" role="tabpanel">

<!--===============================================================================================
                                          ヘッダー
================================================================================================-->

        <section class="header">
          <h1>UNITUS</h1>
          <div class="dropdown">
            <div id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Junpei Taneichi
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" role="menu" aria-labelledby="account">
              <!--  (管理者用ここから) -->
              <li class="author menu">管理者メニュー</li>
              <li class="item" data-js="open_admin">管理画面を開く</li>
              <li class="divider"></li>
              <!--  (管理者用ここまで) -->
              <li class="author menu">アカウントメニュー</li>
              <li class="item">設定</li>
              <li class="divider"></li>
              <li class="item" data-js="logout">ログアウト</li>
              <li class="divider"></li>
            </ul>
          </div>
        </section>

  <!--===============================================================================================
                                            一般ユーザー
  ================================================================================================-->
        <div id="basic_user">
          <!--========================================================================
          |                            一般ユーザー  >  サイドバー                        |
          =========================================================================-->
          <section class="sidebar">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#circles" aria-controls="circles" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-th"></i><span class="title">加盟団体一覧</span></a></li>
              <li role="presentation"><a href="#mail" aria-controls="mail" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-envelope"></i><span class="title">メール管理</span></a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="title">プロフィール</span></a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </section>

          <!--========================================================================
          |                            一般ユーザー  >  コンテンツ                        |
          =========================================================================-->
          <section class="user_content content">
            <div class="tab-content">

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  サークル一覧               |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade in active" id="circles">
                <h1>加盟団体一覧</h1>
                <table>
                  <thead>
                    <tr>
                      <th class="name_w">名前</th>
                      <th class="author_w">権限</th>
                      <th class="number_w">人数</th>
                      <th class="university_w">大学名</th>
                      <th class="update_w">更新日</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="self">
                      <td class="name name_w">応用数学研究部<a href="#1"><i class="glyphicon glyphicon-edit"></i></a></td>
                      <td class="author author_w">編集者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">EspicaCompute<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">44</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">神楽坂一丁目通信局<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月9日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">TUSCOM<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">8</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年3月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">ITC<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">128</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2015年2月1日</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  メール管理                |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade" id="mail">
                <h1>メール管理</h1>
              </div>

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  プロフィール               |
              =============================================================-->
              <!-- Profile tab -->
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <h1>プロフィール</h1>
                <div class="content">
                  <div class="row">
                    <div class="col-xs-3">
                      <img class="profile_image" src="<?php bloginfo("stylesheet_directory") ?>/img/profile.png" alt="...">
                      <h1 class="profile_name">種市 隼兵</h1>
                      <h2 class="profile_id">@gamerinshaft</h2>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Setting tab -->
              <div role="tabpanel" class="tab-pane fade" id="settings">settings</div>
            </div>
          </section>
        </div>
  <!--===============================================================================================
                                              管理者用
  ================================================================================================-->
        <div id="administrator" class="hidden_panel">
          <!--========================================================================
          |                             管理者用  >  サイドバー                          |
          =========================================================================-->
          <section class="sidebar">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#admin_new_circle" aria-controls="admin_new_circle" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i><span class="title">新規団体追加</span></a></li>
              <li role="presentation"><a href="#admin_userList" aria-controls="admin_userList" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i><span class="title">ユーザー一覧</span></a></li>
              <li role="presentation"><a href="#admin_profile" aria-controls="admin_profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="title">プロフィール</span></a></li>
            </ul>
          </section>

          <!--========================================================================
          |                               管理者用  >  コンテンツ                        |
          =========================================================================-->
          <section class="content admin_content">
            <div class="tab-content">

              <!--============================================================
              |               管理者用 >  コンテンツ  >  団体作成                  |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade in active" id="admin_new_circle">
                <h1>新規団体追加</h1>
                <form>
                  <div class="form-group">
                    <label for="circle_name">団体名</label>
                    <input type="text" class="form-control" id="circle_name" placeholder="応用数学研究部">
                    <label for="circle_description">団体説明</label>
                    <textarea class="form-control" id="circle_description" placeholder="団体説名を記入"></textarea>
                    <label for="circle_num">人数</label>
                    <input type="text" class="form-control" id="circle_num" placeholder="18">
                    <label for="site_name">ウェブサイト</label>
                    <input type="text" class="form-control" id="site_name" placeholder="http://unitus-ac.com">
                    <label for="university">所属大学</label>
                    <input type="text" class="form-control" id="university" placeholder="東京理科大学">
                    <label for="remarks">備考</label>
                    <textarea class="form-control" id="remarks" placeholder="インカレサークルです。"></textarea>
                    <label for="contact">連絡先</label>
                    <input type="text" class="form-control" id="contact" placeholder="Tel: 090123456">
                    <label for="leader">代表者</label>
                    <input type="text" class="form-control" id="leader" placeholder="@hogehoge">
                    <div class="checkbox">
                      <label>
                        <input id="isAcceptOutside" type="checkbox"> 外部生のサークル加入可否
                      </label>
                    </div>
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary">保存する</button>
                    </div>
                  </div>
                </form>
              </div>
              <!--============================================================
              |               管理者用 >  コンテンツ  >  メール管理                |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade" id="admin_userList">
                <h1>ユーザー一覧</h1>
                <table>
                  <thead>
                    <tr>
                      <th class="name_w">名前</th>
                      <th class="author_w">権限</th>
                      <th class="number_w">学年</th>
                      <th class="university_w">所属大学</th>
                      <th class="mail_w">メールアドレス</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="name name_w">種市隼兵<i data-js="deleteAccount" class="fa fa-times"></i></td>
                      <td class="author author_w">編集者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">東京大学</td>
                      <td class="mail mail_w">gamerinshaft@gmail.com<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="gamerinshaft@gmail.com"></i></td>
                    </tr>
                    <tr>
                      <td class="name name_w">石井翔<i data-js="deleteAccount" class="fa fa-times"></i></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">44</td>
                      <td class="university university_w">お茶の水女子大学</td>
                      <td class="mail mail_w">unitus.tus@gmail.com<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="unitus.tus@gmail.com"></i></td>
                    </tr>
                    <tr>
                      <td class="name name_w">中森祐人<i data-js="deleteAccount" class="fa fa-times"></i></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">青山学院大学</td>
                      <td class="mail mail_w">taneichi.unitus@gmail.com<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="taneichi.unitus@gmail.com"></i></td>
                    </tr>
                    <tr>
                      <td class="name name_w">セバスチャン<i data-js="deleteAccount" class="fa fa-times"></i></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">8</td>
                      <td class="university university_w">芝浦工業大学</td>
                      <td class="mail mail_w">trytestjapan@gmail.com<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="trytestjapan@gmail.com"></i></td>
                    </tr>
                    <tr>
                      <td class="name name_w">シュガー<i data-js="deleteAccount" class="fa fa-times"></i></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">128</td>
                      <td class="university university_w">デジタルハリウッド大学</td>
                      <td class="mail mail_w">j.tane3ma@gmail.com<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="j.tane3ma@gmail.com"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--============================================================
              |               管理者用 >  コンテンツ  >  プロフィール               |
              =============================================================-->
              <!-- Profile tab -->
              <div role="tabpanel" class="tab-pane fade" id="admin_profile">
                <h1>プロフィール</h1>
                <div class="content">
                  <div class="row">
                    <div class="col-xs-3">
                      <img class="profile_image" src="<?php bloginfo("stylesheet_directory") ?>/img/profile.png" alt="...">
                      <h1 class="profile_name">種市 隼兵</h1>
                      <h2 class="profile_id">@gamerinshaft</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="optionbar">
            <div class="close_btn" data-js="close_admin">
              <div class="glyphicon glyphicon-remove"></div>
            </div>
          </section>

        </div>
      </div>
    </div>
    <!-- 一般ユーザー用 -->
    <script>
      $(function(){
      });
    </script>

    <!-- notification -->
    <script type="text/javascript">
        function generate(type, title, content) {
            var icon = "";
            if(type=="error"){
              icon = "fa-bolt";
            }else if(type=="success"){
              icon = "fa-thumbs-o-up";
            }else if(type=="info"){
              icon = "fa-info";
            }
            text = '<div class="noty_title"><i class="fa ' + icon + '"></i>' + title + '</div><div class="noty_content">' + content + '</div>'
            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated fadeInLeft',
                    close : 'animated fadeOutLeft',
                    easing: 'swing',
                    speed : 100
                }
            });
        }

        // function generateAll() {
        //   generate('warning', notification_html[0]);
        //   generate('error', notification_html[1]);
        //   generate('information', notification_html[2]);
        //   generate('success', notification_html[3]);
        //   generate('notification');
        //   generate('success');
        // }

        $(document).ready(function () {
            data_status  = 'success'
            data_title   = '通信成功'
            data_content = '正常に保存されました'
            if(false){
              setTimeout(function() {
                  generate(data_status, data_title, data_content);
                  generate('error', "通信失敗", "不正な値が入力されました");
                  generate('success', "通信成功", "うまく動いています");
                  generate("error", "石井翔", "重大なバグです。");
              }, 500);
            }

        });

    </script>

    <!--クッキー削除-->
    <script>
      $("[data-js=logout]").on("click", function(){
        var date1 = new Date();
        date1.setTime(0);
        document.cookie = "counts=;expires="+date1.toGMTString();
        location.reload();
      });
    </script>

    <!-- 管理者用 -->
    <script>
      $(function(){
        $("[data-js=open_admin]").on("click", function(e){
          e.stopPropagation();
          e.preventDefault();
          $("#administrator").removeClass("hidden_panel");
        });

        $("[data-js=close_admin]").on("click", function(e){
          $("#administrator").addClass("hidden_panel");
        });
        $("[data-js=copyMail]").each(function(index){
          var client = new ZeroClipboard( $(this) );
        });
        $("[data-js=deleteAccount]").on("click", function(){
          if(confirm($(this).parent().text() + "を削除しますか？")){
            generate('info', "削除成功", $(this).parent().text()+"を削除しました");
          }else{
            generate('info', "キャンセル", $(this).parent().text()+"の削除をとりやめました");
          }
        });
      });
    </script>

  </body>
</html>