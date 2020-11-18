<!-- begin colRight -->

<div id="colRight">

<h2>AMSRO/AMSRS Merger benefits</h2>

<a href="http://www.amsro.com.au/special-general-meeting-2017"><img src="<?php bloginfo('template_directory'); ?>/images/lf2017-signup-sb-speakers.jpg" alt="Leaders forum 2016" class="lf2015-logo" style="margin-bottom: 15px;" /></a>
	
<a href="http://www.amsro.com.au/special-general-meeting-2017"><img src="<?php bloginfo('template_directory'); ?>/images/lf2017-signup-sb-speakers.jpg" alt="Leaders forum 2016" class="lf2015-logo" style="margin-bottom: 15px;"/></a>
	<h3><a href="http://www.amsro.com.au/special-general-meeting-2017">Read about merger benfits here</a></h3>
 
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


</div><!-- end colRight -->