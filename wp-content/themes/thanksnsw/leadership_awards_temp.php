<?php
/*
Template Name: leadership_awards_temp
*/
?>
<?php get_header('leadership'); ?>

<!-- begin content -->
    
<div class="container awards-content">
  <div class="row content microsite">  
    <div class="col-12" style="text-align: center; margin-bottom: 10px;">
        <img style="width: 100%; height: auto; max-width: 450px;" src="<?php bloginfo('template_directory'); ?>/images/jvs_la-logo.jpg" alt="Research Industry Leadership Awards 2019">
    </div>
    
<!-- begin colLeft -->
	
    <div class="col-12 col-lg-8 awards-left">       

      <h1><?php the_title(); ?></h1>
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
       
    <!-- speaker content only for speaker pg-->
	
	<?php if( is_page( 'judging-panel' ) ): ?>
	
		<h2><?php the_field('advisory_panel_title'); ?></h2>
		<?php the_field('advisory_panel_content'); ?>
	
	<div class="speaker-wrap">
    <?php if( have_rows('advisory_bios') ): while ( have_rows('advisory_bios') ) : the_row(); ?>
        
                
            <div class="speaker-item-page" style="margin-top: 40px;">
               <div class="speaker-page-image">
               
            <?php
                $image = get_sub_field('add_image');

                ?>

				   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
                
                <div class="speaker-page-content">
					<h3><?php the_sub_field('add_name'); ?></h3>
					<p style="margin-top: 0;"><i><?php the_sub_field('add_title'); ?></i></p>
                
                <?php the_sub_field('add_content'); ?>

				</div>
           	
            </div>

       
    <?php endwhile; else: endif; ?>

  	</div>
  	
  	<?php endif; ?>
  	
  	<!-- end speaker content only for speaker pg-->
       
       
 <!-- end Conditional H1--> 
		
  	
	</div><!-- end colleft -->
  
   
    <?php get_sidebar('leadership'); ?>

       
     </div><!-- end row -->
     </div><!-- end container-fluid -->  
    
<?php get_footer(); ?>


