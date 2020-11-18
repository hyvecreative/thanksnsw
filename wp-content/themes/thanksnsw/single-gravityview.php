<?php get_header(); ?>

<!-- begin content -->

<div class="directory-header-wrap">
	<div class="directory-header"><a href="/trust-mark/"><img src="<?php bloginfo('template_directory'); ?>/images/tm-dir-banner.jpg" alt="AMSRO Trust Mark" /></a></div>
    </div>
    
<div id="content">

<!-- begin colLeft -->
    
   
    <div id="colLeft" class="page pagewide directory">
    
		<h1><?php the_title(); ?></h1>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->
    
	</div><!-- end content -->
    
<?php get_footer(); ?>

