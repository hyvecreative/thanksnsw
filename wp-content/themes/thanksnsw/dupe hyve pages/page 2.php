<?php get_header(); ?>

<div class="row no-gutters page-header-image">
    
        <?php 
        $image = get_field('page_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        }
        ?>
        
        <?php if(get_field('echo_title')):?>
                <h1 class="page-header-title"><?php the_title(); ?></h1> 
        <?php else:?> 
        
        <?php endif;?>
    
</div>

<!-- begin content -->

<div class="container">

	<!-- begin row -->

		<div class="row content" style="min-height: 900px;">
		<div class="col-md-8 colLeft">

		<div class="bCrumbs" style="margin-bottom: 20px;" xmlns:v="http://rdf.data-vocabulary.org/#">
						<?php if(function_exists('bcn_display'))
						{
							bcn_display();
						}?>
	</div>

			<?php if(get_field('echo_title')):?>

			<?php else:?> 
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php endif;?> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div><!-- end colleft -->

		<?php if (is_page(43) || $post->post_parent=="43")  { ?>

		<?php get_sidebar('privacy'); ?>

		<?php } elseif (is_page(16) || $post->post_parent=="16")  { ?>

		<?php get_sidebar('workplace'); ?> 

		<?php } elseif (is_page(26) || $post->post_parent=="26")  { ?>

		<?php get_sidebar('quality'); ?> 

		<?php } elseif (is_page(5455))  { ?>

		<?php get_sidebar('mship'); ?> 

		<?php } elseif (is_page(4726))  { ?>

		<?php get_sidebar('mship'); ?> 

		<?php } elseif (is_page(4758))  { ?>

		<?php get_sidebar('mship'); ?> 


		<?php } elseif (is_page(10) || $post->post_parent=="10")  { ?>

		<?php get_sidebar('mship'); ?> 

		<?php } elseif (is_page(5562))  { ?>

		<?php get_sidebar('ami'); ?> 

		<?php } elseif (is_page(5825))  { ?>

		<?php get_sidebar('ami'); ?>

		<?php } elseif (is_home())   { ?>

		<?php get_sidebar('news'); ?> 

	<?php } else { ?>

	 <?php get_sidebar(' '); ?> 

	<?php } ?>  

	</div><!-- end row -->

</div> <!-- end container-->
    
<?php get_footer(); ?>


