<!-- begin colRight -->

<div id="colRight">
 
<div class="sbevents">
<h2>News</h2>

<ul>
    <?php
			$my_query = new WP_Query("cat=5&showposts=5");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="feeditem">  
				<li>
                
                <div class="feedcont">	
                
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

   				</div><!-- end feedcont -->
              
                </li>
                
                </div><!-- END feeditem-->
                
			<?php endwhile;	?>
    </ul>

</div><!-- end sbevents-->
<p>&nbsp;</p>

<div class="sbevents">
<h2>Events</h2>

<ul>
    <?php
			$my_query = new WP_Query("cat=4&showposts=2");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="feeditem">  
				<li>
                
                <div class="feedcont">	
                
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

   				</div><!-- end feedcont -->
              
                </li>
                
                </div><!-- END feeditem-->
                
			<?php endwhile;	?>
    </ul>

</div><!-- end sbevents-->

<div class="sbspruik">
	<a href="/directory/"><img src="<?php bloginfo('template_directory'); ?>/images/tm-dir-spruik.jpg" alt="Directory" class="" /></a>
</div> <!-- end sbspruik-->

</div><!-- end colRight -->