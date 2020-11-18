<?php
  $post = $wp_query->post;

  if (in_category('5')) {
      include(TEMPLATEPATH.'/single_news.php');
  } elseif (in_category('4')) {
      include(TEMPLATEPATH.'/single_events.php');
  } elseif (in_category('26')) {
      include(TEMPLATEPATH.'/single_events.php');
  } elseif (in_category('2')) {
      include(TEMPLATEPATH.'/single_news.php');
  } elseif (in_category('17')) {
      include(TEMPLATEPATH.'/single_merger.php');
  } elseif (in_category('18')) {
      include(TEMPLATEPATH.'/single_newsletter.php');
  } elseif (in_category('22')) {
      include(TEMPLATEPATH.'/single_mediaRelease.php');
  } elseif (in_category('23')) {
      include(TEMPLATEPATH.'/single_mediaReleasePolling.php');
  } else {
      include(TEMPLATEPATH.'/single_default.php');
  }
?>