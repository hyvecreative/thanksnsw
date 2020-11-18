<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="index, follow, noarchive" name="robots">
    <meta name="google-site-verification" content="T-UOUPhZQLCJZKzEH1f3tH4gqMOyMvu871EtQG-125U" />
    <link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
    <title><?php bloginfo('name'); ?></title>

    <?php
      $template_directory = get_bloginfo('template_url');
      wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
      wp_enqueue_style('awesome', $template_directory.'/fontawesome/css/all.css');
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', false);
      wp_enqueue_script( 'jquery');
      wp_enqueue_script( 'bootstrap', $template_directory."/bootstrap/js/bootstrap.min.js", array('jquery'), null, true);
      wp_enqueue_script( 'scrollTo', $template_directory."/js/jquery.scrollTo.js", array('jquery'), null, true);
      wp_enqueue_script( 'fancyboxeasing', $template_directory."/js/jquery.easing-1.3.pack.js", array('jquery'), null, true);
      wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), null, true);
      wp_enqueue_script( 'fontawesome', $template_directory."/fontawesome/js/all.js", array('jquery'), null, true);
	  wp_enqueue_script( 'masonry', $template_directory."/js/masonry.pkgd.js", array('jquery'), null, true);
    ?>

    <?php wp_head();?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.typekit.net/dox1txd.css">

      <!-- slick css -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>

  </head>

  <body <?php body_class(); ?>>

  <div class="main-wrap">
      <a href="#nav" class="skiplink">Skip to: Navigation</a>
      <a href="#content" class="skiplink">Skip to: Main Content</a>
    <header class="header mainHeader">
      <div class="header-wrap">
        <div class="ls-nav-container home-header lo-shadow clearfix">
          <button class="ls-nav-open-btn">
            <span class="ls-nav-open-btn-icon"></span>
            <span class="ls-nav-open-btn-text">menu</span>
          </button>
          <a class="header-logo-link" href="<?php bloginfo('url'); ?>/">
            <img
                class="header-logo-image"
                src="<?php bloginfo('template_directory'); ?>/images/logo-lifestart.png"
                alt="Lifestart logo" />
          </a>
          <nav id="nav" class="ls-nav flexmenu fm-offcanvas fm-sm">
            <div class="ls-nav-top">
              <button type="button" class="ls-nav-close-btn">
                <span class="ls-nav-close-btn-icon">&#10005</span>
                Close
              </button>
              <img class="ls-nav-logo" src="/wp-content/themes/lifestart/images/lifestart-logo-white.svg" alt="Lifestart logo in navigation section">
            </div>
              <?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'header-menu',
                    'container_id' => 'topmenu',
                    'container_class' => 'menu',
                    'items_wrap' => '<ul id="mymenu" class="ls-nav-list">%3$s</ul>'
                    )
                );
              ?>
          </nav>
          <div class="header-items">

            <div class="header-items-phone mob-phone">
              <span class="header-items-phone-icon fa-layers fa-2x">
                <span class="fa fa-circle" aria-hidden></span>
                <span class="fas fa-phone fa-inverse" data-fa-transform="shrink-6 down-.25 right-.25" aria-hidden></span>
              </span>
              <a href="tel:1800953390" class="header-items-phone-link ph-text">1800 953 390</a>
            </div>
            <div class="header-items-links-wrap-large header-links-wrap">
              <ul class="header-links">
                <li class="donate"><a href="/donate">Donate</a></li>
                <li class="feedback"><a href="/give-feedback">Give feedback</a></li>
              </ul>
            </div>
            <div class="header-items-social social-hd-wrap">
              <a href="https://www.facebook.com/lifestartcooperative/" target="_blank">
                <span class="fa-layers fa-2x">
                  <span class="fa fa-circle" aria-hidden></span>
                  <span class="fab fa-facebook-f fa-inverse" data-fa-transform="shrink-3.5 down-1.6 right-1.25" aria-hidden></span>
                </span>
              </a>

            </div>
            <div class="header-items-search header-search">
              <div class="header-search-wrap">
                <form role="search" method="get" id="search-form" class="header-search-form" action="<?php bloginfo('url'); ?>/">
                    <label class="header-search-label screen-reader-text sr-only" for="s">Search</label>
                    <input type="text" value="" name="s" id="s" class="header-search-field" title="Search" placeholder="Search" autocomplete="off" />
                    <input type="button" class="header-search-button search-button header-search-submit" value="Search">
                  <button type="reset" class="header-search-reset">
                    <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa-times"><path fill="white" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
                    <span class="sr-only">clear</span>
                  </button>
                </form>
              </div> <!-- end search-wrap-->
            </div>
          </div>

          <div class="header-items-links-wrap-small header-links-wrap">
            <ul class="header-links">
              <li class="donate"><a href="/donate/">Donate</a></li>
              <li class="feedback"><a href="/give-feedback/">Give feedback</a></li>
            </ul>
          </div>

        </div>
      </div>
    </header>
    <main id="main">
        <div class="container-wrap">







