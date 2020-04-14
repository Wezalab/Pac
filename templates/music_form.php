

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
<li id="menu-item-996" class="menu-item menu-item-type-post_type_archive menu-item-object-fw-albums menu-item-996 current-menu-item current_page_item">
  <a href="music.php">Musiques</a></li>

<li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102">
  <a href="video.php">Videos</a>
</li>

<li id="menu-item-1118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1118">
  <a href="photo.php" >Photos</a>
</li>

<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993">
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
                <h2 class="highlight">Musiques</h2>
            </div>
      <div class="col-md-4 text-center text-md-right">
          <ol class="breadcrumb">
                  <li class="first-item">
                  <a href="index.php">Accueil</a></li>
                                  <li class="last-item">Musiques</li>
            </ol>
      </div>
    </div>
  </div>
</section>


<section class="ds ms page_content section_padding_top_100 section_padding_bottom_100 columns_padding_25">
  <div class="container">
    <div class="row">    
      <div id="content" class="col-sm-12">
        <div class="isotope_container1 isotope1 row masonry-layout columns_margin_bottom_40">
          
          <?php 
             
             foreach ($audio as $item) {
          $titre = trim($item["titre"]);
          $s_titre = trim($item["s_titre"]);
          $contenu = trim($item["contenu"]);
          $url = trim($item["url"]);
          $photo = trim($item["photo_cover_sm"]);
          $type_id = trim($item["type_id"]);
          $date = trim($item["date_s"]);
              
              echo "<div class='isotope-item1 col-lg-4 col-md-6 col-xs-12 music'>
            <article class='vertical-item slide-media text-center loop-color post-1001 fw-albums type-fw-albums status-publish has-post-thumbnail hentry fw-albums-category-music'>
              <div class='item-media-wrap'>
                <img src='img/cd.png' alt='cd'>
                <div class='item-media back-media'>
                  <img src='img/cd.png' alt='cd'>
                </div>
                <div class='item-media'>
                  <img width='500' height='500' src='img/$photo' class='attachment-acebeat-square-width size-acebeat-square-width wp-post-image' alt='' srcset='img/$photo' sizes='(max-width: 500px) 100vw, 500px'>                
                  <div class='media-links no-overlay'>
                    <div class='links-wrap'>
                      <a href='music.php' class='p-link'></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class='item-content topmargin_30'>
                <span class='highlight'>$s_titre</span>
                  <h4 class='entry-title topmargin_0'>
                      <a href='music.php'>$titre</a>
                  </h4>
              </div>
            </article>
          </div>";
        }

          ?>   
                  
              </div><!-- eof isotope_container -->
            </div><!--eof #content -->

        </div><!-- eof .row-->
      </div><!-- eof .container -->
    </section><!-- eof .page_content -->
