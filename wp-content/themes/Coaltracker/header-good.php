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
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.8.2', false);
        wp_enqueue_script( 'jquery');
        
        wp_enqueue_script( 'jquery_form', $template_directory."/js/jquery.form.js", array('jquery'), nil, true);
		wp_enqueue_script( 'flexmenu', $template_directory."/js/jquery.flexmenu.js", array('jquery'), nil, true);
		wp_enqueue_script( 'readmore', $template_directory."/js/readmore.js", array('jquery'), nil, true);
?>

    
	<?php wp_head();?>
       
       <!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
<![endif]-->
       
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

</head>
    
  <body <?php body_class(); ?>>
  
<!-- begin wrapper -->
 <div id="wrapper" class="wrapperhome">

<!-- begin header -->
<div id="header" class="headerhome">

<div class="nav-wrap">


<div class="fm-container home-header lo-shadow clearfix">

	<div class="fm-button"><span class="fm-bar"></span><span class="fm-bar"></span><span class="fm-bar"></span></div>
     
    <div id="logo">
<a href="<?php bloginfo('url'); ?>/">AMSRO</a>
</div>

<nav>
     <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'topmenu', 'container_class' => 'a-menu', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>

</nav>            

            
</div>  <!-- end fm-container -->
            
</div><!-- .site-navigation .main-navigation -->

</div><!-- END Header -->



 


	
