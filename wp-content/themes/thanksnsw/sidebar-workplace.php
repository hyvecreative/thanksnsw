

<!-- begin colRight -->

<div class="col-lg-3 offset-lg-1 col-sm-4 sidebar-main colRight" style="margin-bottom: 30px;">


<div class="sbevents sb-pgfeed">

<ul>

 <?php

$parent_page_id = 16;
wp_list_pages( array(
    'child_of' => $parent_page_id,
	'sort_order' => 'desc',
	'sort_column' => 'post_date',
	'title_li' => __('<h2>Workplace Relations</h2>'),
    'link_before' => '<i class="fas fa-chevron-right"></i> '
) );

?>

</ul>

</div><!-- end sbnav -->


<div class="sbevents">
<h2>Recent News</h2>

<ul>
    <?php
            $my_query = new WP_Query("cat=5,18&showposts=5");
            while ($my_query->have_posts()) : $my_query->the_post();?>

                <li>
                
                <a href="<?php the_permalink() ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
              
                </li>
                
            <?php endwhile; ?>
    </ul>

</div><!-- end sbevents-->

</div><!-- end colRight -->