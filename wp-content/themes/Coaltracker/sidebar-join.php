<!-- begin colRight -->

<div id="colRight">

<div class="sbnav">

<ul>

 <?php

$parent_page_id = 10;
wp_list_pages( array(
    'child_of' => $parent_page_id,
	'title_li' => __(' ') 
) );

?>

</ul>

</div><!-- end sbnav -->

    
<div class="sbevents">
<h2>NEWS</h2>

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

</div><!-- end colRight -->