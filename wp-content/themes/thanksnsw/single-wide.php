<?php
  $post = $wp_query->post;

  if (in_category('3')) {
      include(TEMPLATEPATH.'/single_news.php');
  } elseif (in_category('4')) {
      include(TEMPLATEPATH.'/single_events.php');	  
  } else {
      include(TEMPLATEPATH.'/single_default.php');
  }
?>