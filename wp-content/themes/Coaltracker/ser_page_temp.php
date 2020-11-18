<?php
/*
Template Name: ser_page_temp
*/

?>

<?php get_header(); ?>

<!-- begin content -->

<div id="content">

<script>

if (mobile == true) {

    $('div#colRight').insertBefore($('div#colLeft'));
}

</script>

<!-- begin colLeft -->
	
    <div id="colLeft" class="page">
    
    <!-- begin thumbnail -->
    
    <div class="serpagetitle">
    
    <div class="casethumb thumbser pg">
		
        <a href="<?php the_permalink() ?>">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</a> 

</div><!-- end thumbnail -->
        
        <h1 class="H1_ser"><?php the_title(); ?></h1>
        
        </div>	<!-- end serpagetitle -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->
	
        <?php include ('sidebarser.php'); ?>
    
	</div><!-- end content -->
    
<?php get_footer(); ?>


