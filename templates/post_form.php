

<div class="page_header_wrapper header_darkgrey header_transparent_wrap affix-top-wrapper" style="height: 100px!important;">
  <header class="page_header header_darkgrey toggler_xs_right tall_header header_transparent affix-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 display_table">
          <div class="header_left_logo display_table_cell" style="min-width: 230px;">
            <a href="index.php" rel="home" class="logo logo_image_and_text">
              <img src="img/logo.png" alt="Flicker">
            </a>                
          </div>

          <div class="header_mainmenu display_table_cell text-center">
            <nav class="mainmenu_wrapper primary-navigation" style="">
                    
                    <ul id="menu-main-menu" class="sf-menu nav-menu nav sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                      <li id="menu-item-992" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-4  menu-item-992">
                        <a href="index.php">Accueil</a>
                      </li>
                      <li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-995 ">
                        <a href="apropos.php" class="sf-with-ul">Apropos</a>
                         
</li>
<li id="menu-item-996" class="menu-item menu-item-type-post_type_archive menu-item-object-fw-albums menu-item-996">
  <a href="music.php">Musiques</a></li>

<li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102">
  <a href="video.php">Videos</a>
</li>

<li id="menu-item-1118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1118">
  <a href="photo.php" >Photos</a>
</li>

<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993 current-menu-item current_page_item">
  <a href="post.php">Actualites</a></li>
</ul>                    </nav>
                    <!-- header toggler -->
                    <span class="toggle_menu"><span></span></span>
                </div>

                <div class="header_right_buttons display_table_cell text-right hidden-xs" style="min-width: 230px;">
                  <a href="index.php" class="theme_button color1">Me contacter</a>
                </div>
            </div>
        </div>
    </div>
</header>



</div> 


<section class="page_breadcrumbs ls section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
  <div class="container">
    <div class="row">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="highlight">Actualite</h2>
            </div>
      <div class="col-md-4 text-center text-md-right">
          <ol class="breadcrumb">
                  <li class="first-item">
                  <a href="index.php">Accueil</a></li>
                                  <li class="last-item">Actualite</li>
            </ol>
      </div>
    </div>
  </div>
</section>
<div class="fw-page-builder-content">




<section class="fw-main-row  ds ms section_padding_top_75 section_padding_bottom_75 columns_padding_15">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="columns_padding_15">
          <div class="row">

               <div id="content" class="col-xs-12 col-sm-7 col-md-8 col-lg-8">

          <?php 
            foreach ($post as $item) {
              $id = trim($item["id"]);
              $titre = trim($item["titre"]);
              $s_titre = trim($item["s_titre"]);
              $contenu = trim($item["contenu"]);
              $url = trim($item["url"]);
              $photo = trim($item["photo"]);
              $type_id = trim($item["type_id"]);
              $date = trim($item["date_s"]);

              //audio 1
              //video 2
              //jouenal 3
              //actualite 5

              if($type_id == 1){
                echo "<article id='post-$id' class='vertical-item content-padding big-padding offset_button with_background rounded post-$id post type-post status-publish format-standard has-post-thumbnail hentry category-music tag-concert tag-music tag-photo tag-video'>
      <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail inline-block'>
      <img width='1170' height='780' src='img/$photo' class='attachment-flicker-full-width size-flicker-full-width wp-post-image' alt='' srcset='img/$photo' sizes='(max-width: 1170px) 100vw, 1170px'>                    
      <div class='media-links'>
                        <a class='abs-link' title='' href='#'></a>
                    </div>
            </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
    
  
  <div class='item-content'>

    <header class='entry-header'>

      
            <div class='entry-meta small-text content-justify vertical-center'>
              <span class='greylinks'><a href='#' rel='bookmark'><time class='entry-date' datetime='2017-10-17T13:24:15+00:00'>$date</time></a></span>                       
              <div class='share_buttons_wrap inline-block highlightlinks'>
        <span class='share_buttons_toggle'><i class='fa fa-share-alt' aria-hidden='true'></i></span>
                <div class='share_buttons'>
      
        <a href='https://www.facebook.com/sharer.php?u=#' class='social-icon color-icon socicon-facebook' target='_blank'></a><a href='https://twitter.com/intent/tweet?url=#' class='social-icon color-icon socicon-twitter' target='_blank'></a>
        <a href='https://plus.google.com/share?url=#' class='social-icon color-icon socicon-google' target='_blank'></a>
      <a href='https://www.linkedin.com/shareArticle?url=#' class='social-icon color-icon socicon-linkedin' target='_blank'></a>
                  </div>
      </div><!-- eof .share_buttons_wrap -->
                </div>

      <h3 class='entry-title'><a href='#' rel='bookmark'>$titre</a></h3>
            <hr>

            <div class='entry-meta'>
              <a href='#'>By: <span>Admin</span></a>/ <span class='categories-links highlightlinks'><a href='#' rel='category tag'>Musique</a></span>

                                                 / <a href='#comments'>
                        <span class='value'>0 commentaire</span>
                    </a>
                          </div>



    </header><!-- .entry-header -->

                  <div class='entry-content'>
        <p>$contenu 
          <a href='#' class='more-link'>Lire plus</a></p>

            </div><!-- .entry-content -->

        
        <span class='button_wrap topmargin_20'>
            <a href='#' class='theme_button color1'>Lire plus</a>
        </span>
  </div><!-- eof .item-content -->

    </article>
";
              }
              elseif ($type_id == 2) {
                echo "<article id='post-$id' class='vertical-item content-padding big-padding offset_button with_background rounded post-$id post type-post status-publish format-video has-post-thumbnail hentry category-video tag-music tag-photo tag-video post_format-post-format-video'>
    <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail'>
                <div class='embed-responsive embed-responsive-3by2'>
                      <a href='#' data-iframe='&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;$url?feature=oembed&quot; frameborder=&quot;0&quot; gesture=&quot;media&quot; allowfullscreen&gt;&lt;/iframe&gt;' class='embed-placeholder'>
            <img width='1170' height='780' src='img/$photo' class='attachment-flicker-full-width size-flicker-full-width wp-post-image' alt='' srcset='img/$photo' sizes='(max-width: 1170px) 100vw, 1170px'>           
          </a><!-- eof image link -->
                    </div>
            </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
    
    <div class='item-content'>

    <header class='entry-header'>

      
    <div class='entry-meta small-text content-justify vertical-center'>
      <span class='greylinks'><a href='#' rel='bookmark'><time class='entry-date' datetime='2017-10-17T13:23:57+00:00'>$date</time></a></span>                       
      <div class='share_buttons_wrap inline-block highlightlinks'>
        <span class='share_buttons_toggle'><i class='fa fa-share-alt' aria-hidden='true'></i></span>
                <div class='share_buttons'>
                     <a href='https://www.facebook.com/sharer.php?u=#' class='social-icon color-icon socicon-facebook' target='_blank'></a><a href='https://twitter.com/intent/tweet?url=#' class='social-icon color-icon socicon-twitter' target='_blank'></a>
        <a href='https://plus.google.com/share?url=#' class='social-icon color-icon socicon-google' target='_blank'></a>
      <a href='https://www.linkedin.com/shareArticle?url=#' class='social-icon color-icon socicon-linkedin' target='_blank'></a>

                  </div>
      </div><!-- eof .share_buttons_wrap -->
                </div>

      <h3 class='entry-title'><a href='#' rel='bookmark'>$titre</a></h3>
            <hr>

            <div class='entry-meta'>
              <a href='#'>By: <span>Admin</span></a>/ <span class='categories-links highlightlinks'>
              <a href='#' rel='category tag'>Video</a></span>

                                                 / <a href='#respond'>
                        <span class='value'>0 commentaire</span>
                    </a>
                          </div>



    </header><!-- .entry-header -->

                  <div class='entry-content'>
        <p>$contenu  
          <a href='#' class='more-link'>Lire plus</a></p>

            </div><!-- .entry-content -->

        
        <span class='button_wrap topmargin_20'>
            <a href='#' class='theme_button color1'>Lire plus</a>
        </span>
  </div><!-- eof .item-content -->


      </article><!-- #post-## -->
";
              }
              elseif ($type_id == 3) {
               echo "


<article id='post-$id' class='format-small-image with_background offset_button rounded  post-$id post type-post status-publish format-standard has-post-thumbnail hentry category-music tag-concert tag-news'>
      <div class='side-item side-md content-padding big-padding'>
        <div class='row'>
          <div class='col-md-5'>
        <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail inline-block'>
      <img width='500' height='780' src='img/$photo' class='attachment-flicker-small-width size-flicker-small-width wp-post-image' alt=''>                    
      <div class='media-links'>
        <a class='abs-link' title=' href='#'></a>
      </div>
            </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
          </div> <!-- eof .col-md-6 -->
    
      <div class='col-md-7'>

  
  <div class='item-content'>

    <header class='entry-header'>

      
            <div class='entry-meta small-text content-justify vertical-center'>
              <span class='greylinks'><a href='#' rel='bookmark'><time class='entry-date' datetime='2017-09-20T11:47:00+00:00'>$date</time></a></span>                       
              <div class='share_buttons_wrap inline-block highlightlinks'>
        <span class='share_buttons_toggle'><i class='fa fa-share-alt' aria-hidden='true'></i></span>
                <div class='share_buttons'>
      
        <a href='https://www.facebook.com/sharer.php?u=#' class='social-icon color-icon socicon-facebook' target='_blank'></a><a href='https://twitter.com/intent/tweet?url=#' class='social-icon color-icon socicon-twitter' target='_blank'></a>
        <a href='https://plus.google.com/share?url=#' class='social-icon color-icon socicon-google' target='_blank'></a>
      <a href='https://www.linkedin.com/shareArticle?url=#' class='social-icon color-icon socicon-linkedin' target='_blank'></a>

                  </div>
      </div><!-- eof .share_buttons_wrap -->
                </div>

      <h3 class='entry-title'><a href='#' rel='bookmark'>$titre</a></h3>
            <hr>

            <div class='entry-meta'>
              <a href='#'>By: <span>Admin</span></a>                                  / <span class='categories-links highlightlinks'><a href='#' rel='category tag'>Journal</a></span>

                                                 / <a href='#comments'>
                        <span class='value'>0 commentaire</span>
                    </a>
                          </div>



    </header><!-- .entry-header -->

                  <div class='entry-content'>
        <p>$contenu <a href='#' class='more-link'>Lire plus</a></p>

            </div><!-- .entry-content -->

        
        <span class='button_wrap topmargin_20'>
            <a href='#' class='theme_button color1'>Lire plus</a>
        </span>
  </div><!-- eof .item-content -->

              </div><!-- eof .col-md-6 -->
        </div><!-- eof .row -->
    </div><!-- eof .side-item -->
  </article><!-- #post-## -->";
              }

            }
          ?>

       
    
    
























<nav class="loop-pagination text-center">
  <ul class="pagination">
    <li class="prev active disabled">
      <span class="prev page-numbers"><i class="fa fa-angle-left"></i></span>
    </li>
    <li class="active"><span class="page-numbers current">1</span></li>
    <!-- <li><a class="page-numbers" href="#">2</a></li> -->
    <li class="next "> <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a> </li>
  </ul>      
</nav>






  </div>






  <aside class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
    <div class="widget-theme-wrapper widget_no_background "><div id="apsc_widget-2" class="widget widget_apsc_widget"><h3 class="widget-title text-center">Get In Touch</h3><div class="apsc-icons-wrapper clearfix apsc-theme-2">
                <div class="apsc-each-profile">
                                        <a class="apsc-facebook-icon clearfix" href="https://facebook.com/" target="_blank">
                            <div class="apsc-inner-block">
                                <span class="social-icon"><i class="fa fa-facebook apsc-facebook"></i><span class="media-name">Facebook</span></span>
                                <span class="apsc-count">2,354</span><span class="apsc-media-type">Fans</span>
                            </div>
                        </a>
                                        </div>            <div class="apsc-each-profile">
                                        <a class="apsc-twitter-icon clearfix" href="https://twitter.com/" target="_blank">
                            <div class="apsc-inner-block">
                                <span class="social-icon"><i class="fa fa-twitter apsc-twitter"></i><span class="media-name">Twitter</span></span>
                                <span class="apsc-count">0</span><span class="apsc-media-type">Followers</span>
                            </div>
                        </a>
                                </div>            <div class="apsc-each-profile">
                                        <a class="apsc-google-plus-icon clearfix" href="https://plus.google.com/" target="_blank">
                            <div class="apsc-inner-block">
                                <span class="social-icon"><i class="apsc-googlePlus fa fa-google-plus"></i><span class="media-name">google+</span></span>
                                <span class="apsc-count">0</span><span class="apsc-media-type">Followers</span>
                            </div>
                        </a>
                                    </div></div>

</div></div><div class="widget-theme-wrapper widget_no_background "><div id="categories-3" class="greylinks widget widget_categories"><h3 class="widget-title text-center">Categories</h3>    <ul>
  <li class="cat-item cat-item-21"><a href="#">Concerts</a> <span>/ 5</span>
</li>
  <li class="cat-item cat-item-20"><a href="#">Music</a> <span>/ 3</span>
</li>
  <li class="cat-item cat-item-17"><a href="#">News</a> <span>/ 7</span>
</li>
  <li class="cat-item cat-item-19"><a href="#">Video</a> <span>/ 6</span>
</li>
    </ul>
      </aside>














          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</div>