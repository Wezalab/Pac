

<div class="page_header_wrapper header_darkgrey header_transparent_wrap affix-top-wrapper" style="height: 100px;">
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
                      <li id="menu-item-992" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-992">
                        <a href="index.php">Accueil</a>
                      </li>
                      <li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-995">
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
<section class="intro_section page_mainslider ds">
  <div class="flexslider vertical-nav" data-dots="true" data-nav="true">
    <ul class="slides">

  <?php
      $indx = 1;
      


      foreach($slider as $s){
        $titre = $s["titre"];
        $s_titre = $s["s_titre"];
        $contenu = $s["contenu"];
        $photo = $s["photo"];

        $op = 0;
        $flex = "";

        if ($indx == 3){
          $indx = 1;
        }
        if ($indx == 2)
        {
          $op = 1;
          $flex = "flex-active-slide";
        }


      echo "
       <li class='text-center $flex' data-thumb-alt='' style='width: 100%; float: left; margin-right: -100%; position: relative; opacity: $op; display: block; z-index: $indx;'>
          <img src='img/$photo' alt='' draggable='false'>
          <div class='container container_pac2'>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='slide_description_wrapper'>
                  <div class='slide_description'>
                    <div class='intro-layer animated fadeInUp' data-animation='fadeInUp' style='visibility: hidden;'>
                      <h2 class=''>
                        <span class='small'>$titre</span> $s_titre</h2>
                    </div>
                    <div class='intro-layer animated fadeInUp' data-animation='fadeInUp' style='visibility: hidden;'>
                      <p class=''>$contenu</p>
                    </div>
                  </div> <!-- eof .slide_description -->
                </div> <!-- eof .slide_description_wrapper -->
              </div> <!-- eof .col-* -->
            </div><!-- eof .row -->
          </div><!-- eof .container -->
        </li>"; 
        $indx++;
    }
      
      ?>
   
  </ul>
    <!-- <div class="container-fluid nav-container">
      <ol class="flex-control-nav flex-control-paging">
        <li><a href="index.php#" class="">01</a></li>
        <li><a href="index.php#" class="flex-active">02</a></li>
        <li><a href="index.php#" class="">03</a></li>
      </ol>
    </div> -->
    <ul class="flex-direction-nav">
      <li class="flex-nav-prev"><a class="flex-prev" href="index.php#"></a></li>
      <li class="flex-nav-next"><a class="flex-next" href="index.php#"></a></li>
    </ul>
  </div> <!-- eof flexslider -->
  </section> <!-- eof intro_section -->

<div class="fw-page-builder-content"><section class="fw-main-row  ds ms section_padding_top_130 section_padding_bottom_75 columns_padding_25 parallax table_section table_section_md" style="background-image: url(img/about.jpg); background-position: 50% 2px;">

    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 col-sm-6 text-center">
          <div class="with_frame_block">
<img src="img/about-1.jpg" alt="img/about-1.jpg"> </div>
    </div>



    <div class="col-xs-12 col-sm-6">
        
  <h2 class=" with_line section_header ">
  <span class="  ">
    Biographie </span>
  </h2>

  <p class="  fontsize_20 aboveheading">
  <span class="  ">
  <p>Pac Mesrimes est né le 08 Août 1992 à Goma, fils de Patient Mirimo et de Déborah Faida, tous de nationalité&nbsp;congolaise. Il est l’ainé d’une famille de sept enfants dont cinq garçons et deux filles. Dès son jeune âge, Pac s’intéresse à la&nbsp;musique, notamment en reprenant les musiques du chanteur de gospel congolais&nbsp;Lifoko Du Ciel. Il a fait ses études primaires à l’école primaire Maseba de 1999 à 2005, ses études secondaires au Collège Mwanga de 2005&nbsp;à 2011.</p></span>
  </p>
<p>Pac Mesrimes, pendant les années qu'il était à l’école secondaire, il découvre le rap notamment en écoutant les rappeurs&nbsp;Américains&nbsp;Eminem,&nbsp;Lil Wayne,&nbsp;50 Cent. Après il commence à reprendre les morceaux de&nbsp;50 Cent. En 2011, il se lie d’amitié avec un certain&nbsp;Guillain, un grand amateur du rap français, ce dernier lui fait découvrir le rap français, notamment&nbsp;Youssoupha&nbsp;et&nbsp;Mc Solaar, c’est à ce moment qu’il s’intéresse plus au rap, il écrit ses premiers morceaux de rap à cette époque. En 2011, Pac Mesrimes commenca ses études universitaires, il rencontrait un jeune rapeur déjà populaire de la ville,&nbsp;Maraben Mar, qui lui donne des conseils et&nbsp;lui montre les voies du rap. Pac le considère comme un des ses pionniers dans le rap, notamment en lui lançant une phrase dans sa chanson Goma bonne musique disant&nbsp;: "</p>
<div class="content-justify vertical-center content-margins">

<div class="  ">
<h3 class="highlight bottommargin_0">Sady MASONGA</h3><p class="small-text">Manager de Pac mesrimes</p>
</div>
<img src="img/signature.png" alt="img/signature.png">
</div>
    </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_130 section_padding_bottom_130 columns_padding_15">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 text-center">
        
  <h2 class=" with_line section_header ">
  <span class="  ">
    Tournee Mediatique  </span>
  </h2>

    <div class="fw-divider-space" style="padding-top: 50px;"></div>

<div id="widget_events_carousel" class="owl-carousel gallery-carousel owl-loaded owl-drag owl-theme"
data-nav="true" data-margin="30" data-responsive-xxs="1" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3" >
       
          <!--widget_events_carousel_5bad00808307c
         gallery-carousel owl-loaded owl-drag owl-theme
          data-nav="true" data-margin="30" data-responsive-xxs="1" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3" -->
    
  <div class="owl-stage-outer">
    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1600px;">

    <?php 
      $index = 259;
       foreach($tournee as $t){
        $titre = $t["titre"];
        $s_titre = $t["s_titre"];
        $contenu = $t["contenu"];
        $photo = $t["photo"];
        $media = $t["media"];
        $frequence = $t["frequence"];
        $date_s = $t["date_s"];


      echo "<form>
      <div class='owl-item active' style='width: 370px; margin-right: 30px;'>
      <div class='owl-carousel-item item-regularevent '>
        <article class='vertical-item content-absolute hover-entry-content text-center post-$index fw-event type-fw-event status-publish has-post-thumbnail hentry fw-event-taxonomy-name-event'>
        <div class='item-media mutted-media top_rounded overflow_hidden'>
            <img width='500' height='780' src='img/$photo' class='attachment-flicker-small-width size-flicker-small-width wp-post-image' alt=''>                        
            <div class='entry-meta-corner grey'>
                <span class='small-text'>FM</span>
                <span class='big'>$frequence</span>
                <span class='small-text'>Goma</span>
            </div>
                    </div>
        <div class='item-content cs'>
            <h3 class='entry-title bottommargin_0'>
                <a href='index.php'>$titre</a>
            </h3>
            <p class='small-text bottommargin_0'>
              $date_s / $media </p>
            <div class='entry-content'>
                <div class='content-3lines-ellipsis'>
                  <p>$contenu</p>
                </div>
                <div class='topmargin_20 event_buttons'>
                  
                  <a href='index.php' class='theme_button inverse'>En savoir plus</a>
                </div>
            </div>
        </div>
    </article>
      </div>
    </div>
    </form>";
    $index++;
  }
  ?>

     

    </div>
  </div>
  <div class="owl-nav">
    <div class="owl-prev disabled"><span>prev</span></div>
    <div class="owl-next"><span>next</span></div>
  </div>
    <div class="owl-dots disabled"></div></div>    
  </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_150 section_padding_bottom_150 columns_padding_15 parallax" style="background-image: url(&quot;img/video.jpg&quot;); background-position: 50% 2px;" id="featured-video">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 text-center">
        <a href="https://www.youtube.com/watch?v=mcixldqDIEQ" target="_self" class="theme_button color1 round_button margin_0" data-gal="prettyPhoto[5bad0080865a7]">
            <i class="fa fa-play"></i>
    </a>
  <h2 class="text-center  section_header ">
  <span class="  ">
    Pac mesrimes - en concer live 2018 (IBIZA)  </span>
  </h2>
    </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_130 section_padding_bottom_130 columns_padding_15 parallax" style="background-image: url(&quot;img/album.jpg&quot;); background-position: 50% 2px;">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 text-center">
        
  <h2 class=" with_line section_header ">
  <span class="  ">
    Recentes chansons  </span>
  </h2>

    <div class="fw-divider-space " style="padding-top: 50px;"></div>


  <article id="post-1001" class="row columns_padding_25 post-1001 fw-albums type-fw-albums status-publish has-post-thumbnail hentry fw-albums-category-music">
    <div class="col-md-5 col-sm-12">

      <div class="vertical-item slide-media opened-media">
        <div class="item-media-wrap ">
            <img src="img/cd.png" alt="cd">
            <div class="item-media back-media">
              <img src="img/cd.png" alt="cd">
            </div>
            <div class="item-media with_frame_block">
              <img width="500" height="500" src="img/02.jpg" class="attachment-acebeat-square-width size-acebeat-square-width wp-post-image" alt="" srcset="img/02.jpg 500w, img/02-150x150.jpg 150w, img/02-300x300.jpg 300w, img/02-100x100.jpg 100w" sizes="(max-width: 500px) 100vw, 500px">              <div class="media-links no-overlay">
                <div class="links-wrap">
                  <span>
                      <i class="fa fa-play highlight"></i>
                  </span>
                </div>
              </div>
            </div>

          </div>

        <div class="item-content topmargin_30">
          <p class="price highlight margin_0">
            +1000 telechargements</p>
          <h4 class="entry-title topmargin_0">“Operation netoyage”</h4>

          <p><strong class="grey">
          Sortie:</strong> 13/09/2018<br>
<strong class="grey">Label:</strong> AFRO NDULE, Goma<br>
<strong class="grey">Format:</strong> Digitale, CD<br>
<!-- <strong class="grey">Certifications:</strong> RIAA: Gold</p> -->

  <div class="big-icons topmargin_20">
    <a href="https://play.google.com/store/music" class="social-icon border-icon rounded-icon socicon socicon-play" target="blanck"></a>
     <a href="https://itunes.apple.com/us/genre/music" class="social-icon border-icon rounded-icon socicon socicon-apple" target="blanck"> </a>
     <a href="https://www.amazon.com/" class="social-icon border-icon rounded-icon socicon socicon-amazon" target="blanck"></a>
     <a href="https://www.spotify.com/" class="social-icon border-icon rounded-icon socicon socicon-spotify" target="blanck"></a>
      <a href="https://soundcloud.com/" class="social-icon border-icon rounded-icon socicon socicon-soundcloud" target="blanck"></a>
     </div>
    </div>
      </div>

    </div>
    <div class="col-md-7 col-sm-12">
      <div class="cue-playlist-container">
<div class="cue-playlist cue-theme-default no-touch cue-tracks-count-6 has-artwork" itemscope="" itemtype="http://schema.org/MusicPlaylist">
  
  <meta itemprop="numTracks" content="6">

  <span class="mejs-offscreen">Audio Player</span>
  <div id="mep_0" class="mejs-container cue-skin-default" tabindex="0" role="application" aria-label="Audio Player">
    <div class="mejs-inner">
      <div class="mejs-mediaelement">
        <mediaelementwrapper id="mejs_34025162709242984" title="Upbeat &amp; Inspiring"><audio src="mix/2.mp3" preload="none" class="cue-audio" style="width: 100%; height: auto" id="mejs_34025162709242984_html5"></audio>
        </mediaelementwrapper>
      </div>
      <div class="mejs-layers"><div class="mejs-poster mejs-layer" style="display: none;"></div>
      <span class="mejs-track-artwork"><img src="img/01-300x300.jpg"></span>
      <div class="mejs-track-details">
        <span class="mejs-track-artist">Pac mesrimes</span>
        <span class="mejs-track-title">Operation netoyage</span>
      </div>
      <a href="https://audiotheme.com/?utm_source=wordpress-plugin&amp;utm_medium=link&amp;utm_content=cue-logo&amp;utm_campaign=plugins" target="_blank" class="mejs-audiotheme-mark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 40">
          <path d="M10,40C4.5,40,0,35.5,0,30s4.5-10,10-10s10,4.5,10,10S15.5,40,10,40z M0,0l40,40V20L20,0H0z M80,0H40v14h40V0z M74,40L60,18L46,40H74z"></path>
        </svg>
      </a>
    </div>
    <div class="mejs-controls">
      <div class="mejs-button mejs-previous-button mejs-previous">
        <button type="button" aria-controls="mep_0" title="Previous Track"></button>
      </div>
      <div class="mejs-button mejs-playpause-button mejs-play"><button type="button" aria-controls="mep_0" title="Play" aria-label="Play" tabindex="0"></button></div><div class="mejs-button mejs-next-button mejs-next"><button type="button" aria-controls="mep_0" title="Next Track"></button></div><div class="mejs-button mejs-volume-button mejs-mute"><button type="button" aria-controls="mep_0" title="Mute" aria-label="Mute" tabindex="0"></button></div><a class="mejs-horizontal-volume-slider" href="javascript:void(0);" aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100" role="slider"><span class="mejs-offscreen">Use Up/Down Arrow keys to increase or decrease volume.</span><div class="mejs-horizontal-volume-total"><div class="mejs-horizontal-volume-current"></div><div class="mejs-horizontal-volume-handle"></div></div></a><div class="mejs-time-rail" style="width: 100%;"><span class="mejs-time-total mejs-time-slider" role="slider" tabindex="0" aria-label="Time Slider" aria-valuemin="0" aria-valuemax="NaN" aria-valuenow="0" aria-valuetext="0:00"><span class="mejs-time-buffering" style="display: none;"></span><span class="mejs-time-loaded"></span><span class="mejs-time-current"></span><span class="mejs-time-hovered no-hover"></span><span class="mejs-time-handle"><span class="mejs-time-handle-content"></span></span><span class="mejs-time-float"><span class="mejs-time-float-current">00:00</span><span class="mejs-time-float-corner"></span></span></span></div><div class="mejs-time" role="timer" aria-live="off"><span class="mejs-currenttime">0:00</span><span class="mejs-time-separator"> / </span><span class="mejs-duration">05:55</span></div></div></div><img class="mejs-player-background" src="img/06-300x300.jpg"></div>

  <ol class="cue-tracks">
          <li class="cue-track is-playable is-current" itemprop="track" itemscope="" itemtype="http://schema.org/MusicRecording">
        
        <span class="cue-track-details cue-track-cell">
          <span class="cue-track-title" itemprop="name">Opration netoyage</span>
          <span class="cue-track-artist" itemprop="byArtist">Pac mesrimes</span>
        </span>

        
        <span class="cue-track-length cue-track-cell">05:55</span>

              </li>
          <li class="cue-track is-playable" itemprop="track" itemscope="" itemtype="http://schema.org/MusicRecording">
        
        <span class="cue-track-details cue-track-cell">
          <span class="cue-track-title" itemprop="name">Goma bonne musique</span>
          <span class="cue-track-artist" itemprop="byArtist">Pac mesrimes</span>
        </span>

        
        <span class="cue-track-length cue-track-cell">07:48</span>

              </li>
          <li class="cue-track is-playable" itemprop="track" itemscope="" itemtype="http://schema.org/MusicRecording">
        
        <span class="cue-track-details cue-track-cell">
          <span class="cue-track-title" itemprop="name">Je veux partir a l'Ecole</span>
          <span class="cue-track-artist" itemprop="byArtist">Pac mesrimes</span>
        </span>

        
        <span class="cue-track-length cue-track-cell">11:36</span>

              </li>
          <li class="cue-track is-playable" itemprop="track" itemscope="" itemtype="http://schema.org/MusicRecording">
        
        <span class="cue-track-details cue-track-cell">
          <span class="cue-track-title" itemprop="name">Afrique</span>
          <span class="cue-track-artist" itemprop="byArtist">Pac mesrimes</span>
        </span>

        
        <span class="cue-track-length cue-track-cell">04:26</span>

              </li>
         
      </ol>

  </div>
    <!--script type="application/json" class="cue-playlist-data">

{"embed_link":"http:\/\/webdesign-finder.com\/flicker\/?cue_embed=body-like-a-back-road&cue_theme=default",
  "permalink":"http:\/\/webdesign-finder.com\/flicker\/?cue_playlist=body-like-a-back-road",
  "skin":"cue-skin-default","thumbnail":"img\/06-300x300.jpg",
  "tracks":[
  {
    "artist":"Pac mesrimes",
    "artworkId":954,
    "artworkUrl":"img\/01-300x300.jpg",
    "audioId":0,
    "audioUrl":"https:\/\/s3.envato.com\/files\/229455919\/preview.mp3",
    "format":"",
    "length":"05:55",
    "title":"Operation netoiyage",
    "order":0,
    "mp3":"https:\/\/s3.envato.com\/files\/229455919\/preview.mp3",
    "meta":{
      "artist":"Pac mesrimes",
      "length_formatted":"05:55"},
      "src":"https:\/\/s3.envato.com\/files\/229455919\/preview.mp3",
      "thumb":{
        "src":"img\/01-300x300.jpg"}
    },

      {"artist":"Guillain bisimwa","artworkId":955,"artworkUrl":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/02-300x300.jpg","audioId":0,"audioUrl":"https:\/\/0.s3.envato.com\/files\/216844247\/preview.mp3","format":"","length":"07:48","title":"Inspiring Uplifting Corporate","order":1,"mp3":"https:\/\/0.s3.envato.com\/files\/216844247\/preview.mp3","meta":{"artist":"Guillain bisimwa","length_formatted":"07:48"},"src":"https:\/\/0.s3.envato.com\/files\/216844247\/preview.mp3","thumb":{"src":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/02-300x300.jpg"}},{"artist":"AndreySkarlat","artworkId":956,"artworkUrl":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/03-300x300.jpg","audioId":0,"audioUrl":"https:\/\/0.s3.envato.com\/files\/196824856\/preview.mp3","format":"","length":"11:36","title":"Inspiration Kit","order":2,"mp3":"https:\/\/0.s3.envato.com\/files\/196824856\/preview.mp3","meta":{"artist":"AndreySkarlat","length_formatted":"11:36"},"src":"https:\/\/0.s3.envato.com\/files\/196824856\/preview.mp3","thumb":{"src":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/03-300x300.jpg"}},{"artist":"AndreySkarlat","artworkId":957,"artworkUrl":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/04-300x300.jpg","audioId":0,"audioUrl":"https:\/\/0.s3.envato.com\/files\/179391137\/preview.mp3","format":"","length":"04:26","title":"Happy Upbeat Ukulele","order":3,"mp3":"https:\/\/0.s3.envato.com\/files\/179391137\/preview.mp3","meta":{"artist":"AndreySkarlat","length_formatted":"04:26"},"src":"https:\/\/0.s3.envato.com\/files\/179391137\/preview.mp3","thumb":{"src":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/04-300x300.jpg"}},{"artist":"AndreySkarlat","artworkId":958,"artworkUrl":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/05-300x300.jpg","audioId":0,"audioUrl":"https:\/\/0.s3.envato.com\/files\/175505487\/preview.mp3","format":"","length":"03:30","title":"Motivational and Inspiring","order":4,"mp3":"https:\/\/0.s3.envato.com\/files\/175505487\/preview.mp3","meta":{"artist":"AndreySkarlat","length_formatted":"03:30"},"src":"https:\/\/0.s3.envato.com\/files\/175505487\/preview.mp3","thumb":{"src":"http:\/\/webdesign-finder.com\/flicker\/wp-content\/uploads\/2018\/01\/05-300x300.jpg"}},{"artist":"AndreySkarlat","artworkId":959,"artworkUrl":"img\/06-300x300.jpg","audioId":0,"audioUrl":"https:\/\/preview.s3.envato.com\/files\/237317194\/preview.mp3?response-content-disposition=attachment%3Bfilename%3D21017935_the-christmas_by_andreyskarlat_preview.mp3&Expires=1515660831&Signature=Iv3iT6~GbVQWwWK9R-Agh-3iTjcoVXPszUklbHhi4DcTlHqQeOb-0TpxH12b0DSQo~UAL8dYx9xC3Cjgt3aSZto25vnNk0xECdKLtL2HbjZgJABBPFCEe1qbNLdz~XQ7Kr2Rwt0ZJANU4ScUtyYihkNtxWGsDy4fIurMnamSTfyDAe8ruX7LGa-~Pvj4BuwoEKz-Uy7IDnqN78q42UiiJKwktVu1noeZJniaQgw8atMIH-0NUw7hAI~WVZIFSYH5-DbIj5tHQ~q~acuiWW8YPXI0SP7vWXWWLeSATtkVT4w~ClMhx533EtfwHwuKJR9s7h2WeDRRIpiZ-qhlbUUV7A__&Key-Pair-Id=APKAIEEC7ZU2JC6FKENA","format":"","length":"02:43","title":"The Christmas","order":5,"mp3":"https:\/\/preview.s3.envato.com\/files\/237317194\/preview.mp3?response-content-disposition=attachment%3Bfilename%3D21017935_the-christmas_by_andreyskarlat_preview.mp3&Expires=1515660831&Signature=Iv3iT6~GbVQWwWK9R-Agh-3iTjcoVXPszUklbHhi4DcTlHqQeOb-0TpxH12b0DSQo~UAL8dYx9xC3Cjgt3aSZto25vnNk0xECdKLtL2HbjZgJABBPFCEe1qbNLdz~XQ7Kr2Rwt0ZJANU4ScUtyYihkNtxWGsDy4fIurMnamSTfyDAe8ruX7LGa-~Pvj4BuwoEKz-Uy7IDnqN78q42UiiJKwktVu1noeZJniaQgw8atMIH-0NUw7hAI~WVZIFSYH5-DbIj5tHQ~q~acuiWW8YPXI0SP7vWXWWLeSATtkVT4w~ClMhx533EtfwHwuKJR9s7h2WeDRRIpiZ-qhlbUUV7A__&Key-Pair-Id=APKAIEEC7ZU2JC6FKENA","meta":{"artist":"AndreySkarlat","length_formatted":"02:43"},"src":"https:\/\/preview.s3.envato.com\/files\/237317194\/preview.mp3?response-content-disposition=attachment%3Bfilename%3D21017935_the-christmas_by_andreyskarlat_preview.mp3&Expires=1515660831&Signature=Iv3iT6~GbVQWwWK9R-Agh-3iTjcoVXPszUklbHhi4DcTlHqQeOb-0TpxH12b0DSQo~UAL8dYx9xC3Cjgt3aSZto25vnNk0xECdKLtL2HbjZgJABBPFCEe1qbNLdz~XQ7Kr2Rwt0ZJANU4ScUtyYihkNtxWGsDy4fIurMnamSTfyDAe8ruX7LGa-~Pvj4BuwoEKz-Uy7IDnqN78q42UiiJKwktVu1noeZJniaQgw8atMIH-0NUw7hAI~WVZIFSYH5-DbIj5tHQ~q~acuiWW8YPXI0SP7vWXWWLeSATtkVT4w~ClMhx533EtfwHwuKJR9s7h2WeDRRIpiZ-qhlbUUV7A__&Key-Pair-Id=APKAIEEC7ZU2JC6FKENA","thumb":{"src":"img\/06-300x300.jpg"}}]}</script-->
    </div>
    </div>
  </article><!-- #post-index.php -->
    </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_150 section_padding_bottom_150 columns_padding_15 background_cover" style="background-image:url(img/contact.jpg);" id="contact">
    <div class="container">
    <div class="row">
      
    <div class="col-sm-6 col-sm-offset-6 text-center">
        
  <h2 class=" with_line section_header ">
  <span class="  ">
    Nous contacter </span>
  </h2>
<p>Pour tout contact, veillez bien completer ce formulaire ou appeler dirrectementes numeros +243 0000000000 / +243 00000000</p>
    <div class="fw-divider-space " style="padding-top: 10px;"></div>
<aside class="shortcode-widget-area"><div class="widget_text widget-theme-wrapper widget_no_background "><div id="custom_html-4" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><div role="form" class="wpcf7" id="wpcf7-f970-p4-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="index.php" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<!-- <input type="hidden" name="_wpcf7" value="970">
<input type="hidden" name="_wpcf7_version" value="5.0.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f970-p4-o1">
<input type="hidden" name="_wpcf7_container_post" value="4"> -->
</div>
<div class="row columns_padding_10">
<div class="col-md-6">
<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Votre nom*"></span>
</div>
<div class="col-md-6">
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Votre  Addresse mail*"></span>
</div>
<div class="col-md-12">
<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Votre message"></textarea></span><br>
<input type="submit" value="Envoiyer" class="wpcf7-form-control wpcf7-submit theme_button color1 topmargin_20"><span class="ajax-loader"></span>
</div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></aside>
    </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_150 section_padding_bottom_130 columns_padding_15">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 text-center">
        
  <h2 class=" with_line section_header ">
  <span class="  ">
    Actualites recentes </span>
  </h2>

    <div class="fw-divider-space " style="padding-top: 50px;"></div>
<div class="owl-carousel owl-loaded owl-drag owl-theme" data-nav="true" data-margin="30" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3">
    
    
    
    
    
    
  <div class="owl-stage-outer">
    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2400px;">
      

      <?php 

        foreach ($actualite as $item) {
          $titre = trim($item["titre"]);
          $s_titre = trim($item["s_titre"]);
          $contenu = trim($item["contenu"]);
          $url = trim($item["url"]);
          $photo = trim($item["photo"]);
          $type_id = trim($item["type_id"]);
          $date = trim($item["date_s"]);

          if ($type_id == 1) {
          
          echo "
      <div class='owl-item active' style='width: 370px; margin-right: 30px;'>
      <div class='owl-carousel-item item-layout-item-vertical music '>
    <article class='vertical-item content-padding with_background rounded text-center offset_button filter-music post-127 post type-post status-publish format-standard has-post-thumbnail hentry category-music tag-concert tag-music tag-photo tag-video'>
      <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail inline-block'>
      <img width='1170' height='780' src='img/$photo' class='attachment-flicker-full-width size-flicker-full-width wp-post-image' alt='' srcset='img/$photo ' sizes='(max-width: 1170px) 100vw, 1170px'>                    
      <div class='media-links'>
        <a class='abs-link' title='' href='index.php'></a>
       </div>
    </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
    <div class='item-content'>
      <header class='entry-header'>
        <div class='entry-meta small-text content-justify'>
            <span class='greylinks'><a href='index.php' rel='bookmark'><time class='entry-date' datetime='2017-10-17T13:24:15+00:00'>$date_s</time></a></span>           
            <span class='categories-links highlightlinks'><a href='index.php' rel='category tag'>Musique</a></span>
        </div>
      <h4 class='entry-title'><a href='index.php' rel='bookmark'>$titre</a></h4>
        </header><!-- .entry-header -->
        <div class='entry-content'>
            <div class='content-3lines-ellipsis'>
              <p>$contenu</p>
            </div>
            <span class='button_wrap'>
                <a href='index.php' class='theme_button color1'>Lire plus</a>
            </span>
        </div><!-- .entry-content -->
  </div>
</article><!-- eof vertical-item -->
  </div>
</div>
";
}

elseif ($type_id == 2) {
  echo "<div class='owl-item active' style='width: 370px; margin-right: 30px;'>
  <div class='owl-carousel-item item-layout-item-vertical video '>
    <article class='vertical-item content-padding with_background rounded text-center offset_button filter-video post-128 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-music tag-photo tag-video post_format-post-format-video'>
      <div class='item-media-wrap'>
    <div class='item-media entry-thumbnail top_rounded overflow_hidden post-thumbnail'>
                <div class='embed-responsive embed-responsive-3by2'>
                      <a href='' data-iframe='&lt;iframe width=&quot;1170&quot; height=&quot;658&quot; src=&quot;$url&quot; frameborder=&quot;0&quot; gesture=&quot;media&quot; allowfullscreen&gt;&lt;/iframe&gt;' class='embed-placeholder'>
            <img width='1170' height='780' src='img/$photo' class='attachment-flicker-full-width size-flicker-full-width wp-post-image' alt='' srcset='img/$photo' sizes='(max-width: 1170px) 100vw, 1170px'>            </a><!-- eof image link -->
                    </div>
            </div> <!-- .item-media -->
  </div> <!-- .item-media-wrap -->
    <div class='item-content'>
      <header class='entry-header'>
        <div class='entry-meta small-text content-justify'>
          <span class='greylinks'><a href='index.php' rel='bookmark'><time class='entry-date' datetime='2017-10-17T13:23:57+00:00'>17 Oct 2017</time></a></span>           
          <span class='categories-links highlightlinks'><a href='index.php' rel='category tag'>Video</a></span>
        </div>
      <h4 class='entry-title'><a href='index.php' rel='bookmark'>$titre</a></h4>
      </header><!-- .entry-header -->
      <div class='entry-content'>
        <div class='content-3lines-ellipsis'>
        <p>$contenu</p>
        </div>
        <span class='button_wrap'>
          <a href='index.php' class='theme_button color1'>Lire plus</a>
        </span>
      </div><!-- .entry-content -->
  </div>
</article><!-- eof vertical-item -->
  </div>
</div>";

}


        }

      ?>




</div></div><div class="owl-nav"><div class="owl-prev disabled"><span>prev</span></div><div class="owl-next"><span>next</span></div></div><div class="owl-dots disabled"></div></div>    </div>


    </div>
  </div>
</section>
<section class="fw-main-row  ds ms section_padding_top_0 section_padding_bottom_0 columns_padding_0 columns_margin_top_0 columns_margin_bottom_0">
    <div class="container-fluid">
    <div class="row">
      
    <div class="col-xs-12 ">
        <div id="widget_portfolio_carousel_5bad0080909ce" class="owl-carousel gallery-carousel owl-loaded owl-drag owl-theme" data-nav="true" data-margin="0" data-responsive-xxs="2" data-responsive-xs="2" data-responsive-sm="4" data-responsive-md="5" data-responsive-lg="6" data-responsive-xlg="8">
      
      
      
    <div class="owl-stage-outer">
      <div class="owl-stage " 
      style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2698px;">

      <?php
      $index = 0; 
        foreach ($galerie_smal as $galerie) {

          $url = $galerie["url"];
          $url_big = $galerie["url_big"];
          echo "<div id='li$index' class='owl-item active wcpscwc-product-slider1' style='width: 224.833px;'>
      <div class='owl-carousel-item item-layout-item-image backstage concerts '>
    <div class='vertical-item gallery-item content-absolute text-center'>
      <div class='item-media'>
      <img width='780' height='780' src='img/$url' class='attachment-flicker-square-width size-flicker-square-width wp-post-image' alt='' srcset='img/$url' sizes='(max-width: 780px) 100vw, 780px'>      
      <div class='media-links'>
                <a class='abs-link prettyPhoto ' data-gal='prettyPhoto[gal-5bad0080909ce]' 
                title='' href='img/$url_big'></a>
      </div>
    </div>
  </div>    </div>
</div>";
$index++;
        }
      ?>

    

      



</div></div>
<div class="owl-nav">
  <!-- <div class="owl-prev disabled"><span>prev</span></div>
  <div class="owl-next"><span>next</span></div> -->
</div>
  <div class="owl-dots disabled"></div>
</div>    
</div>


    </div>
  </div>
</section>
</div>