<?php
/*
Template Name: polling_page_temp
*/
?>
<?php get_header('polling'); ?>

<!-- begin content -->

<div class="container">

<div class="intro-elements">

  <div class="polling-title text-center">AMSRO Polling Inquiry 2019</div>

  <div class="microsite-polling" style="border-radius: 0;">
           <?php the_post_thumbnail( 'full' ); ?>
  </div>

</div>
 
	
<div class="row content microsite polling-content" style="padding-top: 20px; margin-bottom: 30px; border-radius: 0 0 12px 12px;">

<!-- begin colLeft -->

<div class="col-sm-8 lf-wide">
          
    <?php if (is_page(7642))  { ?>

    <h1 style="margin-bottom">Inquiry into the Performance of the Opinion Polls at the 2019 Australian Federal Election</h1>

		 <?php } elseif (is_page(9274))  { ?>

    <h1 style="margin-bottom">Inquiry into the Performance of the Opinion Polls at the 2019 Australian Federal Election</h1>
		<h2>(AMSRO Polling Inquiry)</h2>
      
       <?php } else { ?>

      <h1><?php the_title(); ?></h1>
       
       <?php } ?>
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
       
    <!-- speaker content only for speaker pg-->
	
	<?php if( is_page( 'inquiry-members' ) ): ?>
	
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
  	
		
		<h2><?php the_field('inquiry_panel_title'); ?></h2>
		<?php the_field('inquiry_panel_content'); ?>
	
	<div class="speaker-wrap">
    <?php if( have_rows('inquiry_bios') ): while ( have_rows('inquiry_bios') ) : the_row(); ?>
        
                
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
		
		  			<h2><?php the_field('intl_advisor_title'); ?></h2>
		<?php the_field('intl_advisor_content'); ?>
	
	<div class="speaker-wrap">
    <?php if( have_rows('add_advisor_bio') ): while ( have_rows('add_advisor_bio') ) : the_row(); ?>
        
                
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
		
  	
	</div><!-- end col -->
  
    <?php if (is_page(7651))  { ?>
   
    <?php get_sidebar('pollingSpeakers'); ?>
    
    <?php } else { ?>

      <?php get_sidebar('polling'); ?>
       
       <?php } ?>
    
	 
  
    </div><!-- end row -->
  </div><!-- end container -->
    
<?php get_footer(); ?>


