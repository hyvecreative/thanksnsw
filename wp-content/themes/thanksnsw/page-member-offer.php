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
		<div class="col-sm-8 colLeft">

		<div class="bCrumbs" style="margin-bottom: 20px;" xmlns:v="http://rdf.data-vocabulary.org/#">
						<?php if(function_exists('bcn_display'))
						{
							bcn_display();
						}?>
		</div>
	
		<h1><?php the_title(); ?></h1>
		
			
<div class="member-wrap">
   
    <?php if( have_rows('member_offers') ): while ( have_rows('member_offers') ) : the_row(); ?>
        
                
            <div class="row member-item">
              
              <div class="member-image col-sm-4">
               
               <?php
                $image = get_sub_field('add_image');

                ?>
                
                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                 
				</div>
               
               <div class="member-content col-sm-8">
                
				<h3><a href="<?php the_sub_field('offer_link'); ?>"><?php the_sub_field('offer_title'); ?></a></h3>
				   <p><?php the_sub_field('offer_description'); ?></p>

				   <a class="btn renewal-btn" href="<?php the_sub_field('offer_link'); ?>">Find out more</a>
               					
				</div>
                					
            </div>

       
    <?php endwhile; else: endif; ?>

  	 </div>				
					
							
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->


 <?php get_sidebar('member-offer'); ?> 


    
	</div><!-- end row -->

</div> <!-- end contaiber-->
    
<?php get_footer(); ?>


