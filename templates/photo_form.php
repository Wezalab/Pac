

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

<li id="menu-item-1118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1118 current-menu-item current_page_item">
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
                <h2 class="highlight">Photos</h2>
            </div>
      <div class="col-md-4 text-center text-md-right">
          <ol class="breadcrumb">
                  <li class="first-item">
                  <a href="index.php">Accueil</a></li>
                                  <li class="last-item">Photos</li>
            </ol>
      </div>
    </div>
  </div>
</section>
<div class="fw-page-builder-content">
















<section class="fw-main-row  ds ms section_padding_top_30 section_padding_bottom_30 columns_padding_15">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12">


          <div class="filters isotope_filters-5bb0a293dccac text-center">
    <a href="" data-filter="*" class="selected">All</a>
          <!-- <a href="" data-filter=".backstage" class="selected ">Backstage</a> -->
            <!-- <a href="" data-filter=".concerts">Concerts</a>
            <a href="" data-filter=".life">Life</a>
            <a href="" data-filter=".music">Music</a> -->
       

        <?php 

          foreach ($type as $type_single) {
            $titre = $type_single["titre"];
            echo "<a href='' data-filter='.$titre' class=' '>$titre</a>";
          }



        ?>
 </div>



  <div class="columns_padding_15">
  <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters-5bb0a293dccac" style="position: relative; height: 553.312px;">
          

<!-- 

  <div class='isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 $photo_s' style='position: absolute; left: 0%; top: 0px;'>
        <div class='vertical-item gallery-item content-absolute text-center ds'>
      <div class='item-media'>
      <img width='775' height='517' src='img/02-1.jpg' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='' srcset='img/02-1.jpg' sizes='(max-width: 775px) 100vw, 775px'>      
      <div class='media-links'>
        <div class='links-wrap'>
          <a class='p-view prettyPhoto ' title='' data-gal='prettyPhoto[gal-5bb0a293dccac]' href='img/02-1.jpg'></a>
        </div>
      </div>
    </div>
    <div class='item-content'>
    <h4 class='item-meta'>
      <a href='#'>
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div> -->


<?php 

  foreach ($photo as $photo_single) {
    $url = $photo_single["url"];
    $url_big = $photo_single["url_big"];
    $comment = $photo_single["comment"];
    $type = $photo_single["titre"];
            echo " <div class='isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 $type' style='position: absolute; left: 0%; top: 0px;'>
                  <div class='vertical-item gallery-item content-absolute text-center ds'>
                <div class='item-media'>
                <img width='775' height='517' src='img/$url' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='' srcset='img/$url' sizes='(max-width: 775px) 100vw, 775px'>      
                <div class='media-links'>
                  <div class='links-wrap'>
                    <a class='p-view prettyPhoto ' title='' data-gal='prettyPhoto[gal-5bb0a293dccac]' href='img/$url_big'></a>
                  </div>
                </div>
              </div>
              <div class='item-content'>
              <h4 class='item-meta'>
                <a href='#'>
                  $comment      </a>
              </h4>
            </div>
          </div>      
          </div>";
          }
?>

<!-- <div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12  life " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/03-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/03-1.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/03-1.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div>

<div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 backstage music " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/05.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/05.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/05.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div>

<div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 backstage concerts " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/06.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/06.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/06.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div>


<div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 backstage life " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/07.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/07.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/07.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div>


<div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 music " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/18.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/18.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/18.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div>

<div class="isotope-item item-layout-item-regular col-lg-4 col-md-4 col-sm-6 col-xs-12 backstage concerts " style="position: absolute; left: 0%; top: 0px;">
        <div class="vertical-item gallery-item content-absolute text-center ds">
      <div class="item-media">
      <img width="775" height="517" src="img/10.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="img/10.jpg" sizes="(max-width: 775px) 100vw, 775px">      
      <div class="media-links">
        <div class="links-wrap">
          <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal-5bb0a293dccac]" href="img/10.jpg"></a>
        </div>
      </div>
    </div>
    <div class="item-content">
    <h4 class="item-meta">
      <a href="#">
        Praesent felis dui      </a>
    </h4>
  </div>
</div>      
</div> -->


         
         
          
          
          </div><!-- eof .isotope_container -->
</div><!-- eof .columns_padding_* -->    </div>


    </div>
  </div>
</section>









</div>