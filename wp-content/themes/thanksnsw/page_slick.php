<?php
/*
Template Name: page_slick
*/
?>

<?php get_header('slick'); ?>

<div class="container-fluid hero-panel">
    <div class="ndis-registration">
        <img src="<?php bloginfo('template_directory'); ?>/images/ndis-panel.png" alt="NDIS Registration" />
        <p>
            <strong>NDIS</strong>
            <br />Registered<br />Provider
        </p>
    </div>

			<div class="row hero-title single-line-title">
			<div class="bCrumbs col-xs-12" xmlns:v="http://rdf.data-vocabulary.org/#">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
			</div>

                <img src="<?php bloginfo('template_directory'); ?>/images/ls_generic_500px_hd.jpg" alt="Lifestart welcome"  style="width: 100%; height: auto;" /></a>
  
					<div id="content" class="title-hm page-hdsm text-center">
					<h1><?php the_field('banner_head') ?></h1>
					<h2><?php the_field('banner_sub') ?></h2>
					<?php the_field('banner_button') ?></p>
					</div>

			</div> <!-- end .row-->	
</div> <!-- end container-->													
</div> <!-- end .container-fluid -->

<!-- start title-content -->

<div class="container-fluid page-content">
<div class="container">
<div class="row page-content">
    
<div class="col-xs-12 col-lg-offset-2 col-lg-8 page-col">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<?php the_content(__('(more...)')); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

    <?php if (is_page(124))  { ?>

        <?php get_template_part( 'partials/content', 'boardProfiles' ); ?>

    <?php } ?>
		
</div>
            
</div>  <!-- end row -->
</div> <!-- end container-->

 
<?php get_footer('slick'); ?>