<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="<?php echo get_option('simplo_keywords'); ?>" />
  <meta name="description" content="<?php echo get_option('simplo_description'); ?>" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
  <title><?php bloginfo('name'); ?></title>

        <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('ddsmooth', $template_directory.'/css/ddsmoothmenu.css');
		wp_enqueue_style('fancybut', $template_directory.'/css/jquery.fancybox-buttons.css');
		wp_enqueue_style('fancythu', $template_directory.'/css/jquery.fancybox-thumbs.css');
		wp_enqueue_style('fancybox', $template_directory.'/css/jquery.fancybox.css');
		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.4.2', false);
        wp_enqueue_script( 'jquery');
        
        wp_enqueue_script( 'jquery_form', $template_directory."/js/jquery.form.js", array('jquery'), nil, true);
		wp_enqueue_script( 'ddsmooth', $template_directory."/js/ddsmoothmenu.js", array('jquery'), nil, true);
		wp_enqueue_script( 'scrollTo', $template_directory."/js/jquery.scrollTo-1.4.3.1-min.js", array('jquery'), nil, true);
		wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), nil, true);
		wp_enqueue_script( 'fancybox', $template_directory."/js/jquery.fancybox.js", array('jquery'), nil, true);
		wp_enqueue_script( 'fancyboxbut', $template_directory."/js/jquery.fancybox-buttons.js", array('jquery'), nil, true);
		wp_enqueue_script( 'fancyboxthu', $template_directory."/js/jquery.fancybox-thumbs.js", array('jquery'), nil, true);
		wp_enqueue_script( 'fancyboxeasing', $template_directory."/js/jquery.easing-1.3.pack.js", array('jquery'), nil, true);
		wp_enqueue_script( 'fancyboxmouse', $template_directory."/js/jquery.mousewheel-3.0.6.pack.js", array('jquery'), nil, true);
		wp_enqueue_script( 'res_nav', $template_directory."/js/res_nav.js", array('jquery'), nil, true);
?>

    
	<?php wp_head();?>
       
       <!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
<![endif]-->
       
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

</head>
    
  <body <?php body_class(); ?>>
  





 


	
