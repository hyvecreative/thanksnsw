<!DOCTYPE html>
<html lang="en">
<head >

	<meta charset="utf-8">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">


  <meta name="description" content="As the peak organisation for Australia’s market and social research organisations, our primary objective is to protect and promote the industry so that its important contribution to our economic, social and political well-being continues." />
  
  <link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
    <title>Association of Market and Social Research Organisations</title>

        <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('flexmenu', $template_directory.'/css/jquery.flexmenu.css');

		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', false);
        wp_enqueue_script( 'jquery');
	
		wp_enqueue_script( 'flexmenu', $template_directory."/js/jquery.flexmenu.js", array('jquery'), nil, true);
		wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), nil, true);
?>

    
	<?php wp_head();?>
       
       <!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
<![endif]-->
       
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

</head>
    
<body <?php body_class(); ?>>
  
<div class="main-wrap">

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



 


	
