<div class="col-sm-6">
	<h2 class="text-center"><a href="/category/news/">News</a></h2>
		
		<ul style="padding: 0;">
    <?php
			$my_query = new WP_Query("cat=5,18&showposts=6");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="feeditem">  
				<li style="list-style: none">
                
                <div class="feedcont">
					
					<div class="meta clearfix">
            			<span class="date"><?php the_time('M j, Y') ?></span>
            		</div><!-- end meta -->
                
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>
              
                </li>
                
    </div><!-- END feeditem-->
                
			<?php endwhile;	?>
			<?php wp_reset_postdata() ?>
    </ul>
	
	<div style="margin-left: 15px;">
		<a href="/news/" class="btn hm-more">More news</a>
	</div>
	
	</div>


	<div class="col-sm-6">
		<h2 class="text-center"><a href="/category/events/">Events</a></h2>
		
		<ul style="padding: 0;">
    <?php
			$my_query = new WP_Query("cat=4&showposts=2");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="feeditem">  
				<li style="list-style: none">
                
                <!-- add thumbnail -->
                 <div class="casethumb">
                 
<a href="<?php the_permalink() ?>">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
                       
</a></div><!-- end casethumb -->
                
                <div class="feedcont">	
                
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                
                	<div class="excerpthm"><p style="margin-top: .5rem; margin-bottom: .5rem;"><?php the_excerpt(); ?></p></div>

   				</div><!-- end feedcont -->
              
                </li>
                
                </div><!-- END feeditem-->
                
			<?php endwhile;	?>
			<?php wp_reset_postdata() ?>
    </ul>
	<div style="margin-left: 15px;">	
		<a href="/category/events/" class="btn hm-more">More events</a>
	</div>	
	</div>