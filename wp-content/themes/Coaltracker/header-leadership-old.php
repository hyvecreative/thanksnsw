<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="Research, Organisations, Australia, Social" />
  <meta name="description" content="As the peak organisation for Australia’s market and social research organisations, our primary objective is to protect and promote the industry so that its important contribution to our economic, social and political well-being continues." />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
  <title>Association of Market and Social Research Organisations</title>

        <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('flexmenu', $template_directory.'/css/jquery.flexmenu.css');
		wp_enqueue_style('fancybut', $template_directory.'/css/jquery.fancybox-buttons.css');
		wp_enqueue_style('fancythu', $template_directory.'/css/jquery.fancybox-thumbs.css');
		wp_enqueue_style('fancybox', $template_directory.'/css/jquery.fancybox.css');
		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', false);
        wp_enqueue_script( 'jquery');
        
		wp_enqueue_script( 'flexmenu', $template_directory."/js/jquery.flexmenu.js", array('jquery'), null, true);
		wp_enqueue_script( 'scrollTo', $template_directory."/js/jquery.scrollTo-1.4.3.1-min.js", array('jquery'), null, true);
		wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), null, true);
		wp_enqueue_script( 'readmore', $template_directory."/js/readmore.js", array('jquery'), null, true);
	    wp_enqueue_script( 'navtabs', $template_directory."/js/navtabs.js", array('jquery'), null, true);
?>

    
	<?php wp_head();?>
       
       <!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
<![endif]-->
       
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

</head>
    
  <body <?php body_class(); ?>>
  
<!-- begin wrapper -->
 <div id="wrapper" class="lf-wrapper">

<!-- begin header -->
<div id="header" class="headerhome lf-home polling-home">

<div class="nav-wrap">


<div class="fm-container home-header lf-header lo-shadow clearfix">

	<div class="fm-button"><span class="fm-bar"></span><span class="fm-bar"></span><span class="fm-bar"></span></div>
     
    <div id="logo" class="polling-logo">
<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/amsrologo-lf.png" alt="AMSRO"></a>
</div>

<nav>
     <?php wp_nav_menu( array( 'theme_location' => 'leadership-menu', 'container_id' => 'topmenu', 'container_class' => 'a-menu', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>

</nav>            

            
</div>  <!-- end fm-container -->
            
</div><!-- .site-navigation .main-navigation -->

</div><!-- END Header -->



 


	
