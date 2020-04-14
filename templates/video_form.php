

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

<li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102 current-menu-item current_page_item">
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
                <h2 class="highlight">Videos</h2>
            </div>
      <div class="col-md-4 text-center text-md-right">
          <ol class="breadcrumb">
                  <li class="first-item">
                  <a href="index.php">Accueil</a></li>
                                  <li class="last-item">Videos</li>
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

            <?php 

             foreach ($video as $item) {
          $titre = trim($item["titre"]);
          $s_titre = trim($item["s_titre"]);
          $contenu = trim($item["contenu"]);
          $url = trim($item["url"]);
          $photo = trim($item["photo_cover_sm"]);
          $type_id = trim($item["type_id"]);
          $date = trim($item["date_s"]);


        

 echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 video'>
  <article class='vertical-item content-padding with_background rounded overflow_hidden text-center filter-video post-128 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-music tag-photo tag-video post_format-post-format-video'>
    <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail'>
      <div class='embed-responsive embed-responsive-3by2'>
        <a href='$url' data-iframe='&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; 
        src=&quot;$url?feature=oembed&quot; frameborder=&quot;0&quot; gesture=&quot;media&quot; 
        allowfullscreen&gt;&lt;/iframe&gt;' class='embed-placeholder'>
        <img width='1170' height='780' src='img/$photo' class='attachment-flicker-full-width size-flicker-full-width wp-post-image' alt='' srcset='img/$photo'>           
        </a><!-- eof image link -->
      </div>
    </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
    
      <div class='item-content'>
        <header class='entry-header'>
      <h4 class='entry-title'><a href='video.php' rel='bookmark'>$titre</a></h4>        
    </header><!-- .entry-header -->
    </div>

    <footer class='entry-footer greylinks small-text'>
        <div class='inline-content'>
                          <span>
                    <i class='fa fa-heart rightpadding_5' aria-hidden='true'></i>
                    <span class='value'>0<span class='votes_count votes_count_128'></span></span>
                </span>
          
                <a href=''>
                    <i class='fa fa-comment rightpadding_5' aria-hidden='true'></i>
                    <span class='value'>0</span>
                </a>
                                    <span>
                <i class='fa fa-eye rightpadding_5' aria-hidden='true'></i>
                <span class='value'><span class='item-views-count'>0</span></span>
            </span>
                  </div>
    </footer>

</article>
</div>";

}

?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</div>