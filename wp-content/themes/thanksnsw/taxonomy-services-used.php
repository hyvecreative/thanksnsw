<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">

<div id="RowA" class="indextitle">

<div class="ColA"><h1>Work</h1></div>

<div class="ColB"><h2>We're proud of what we have achieved with our clients. See some of our winning projects</h2></div>

</div><!-- end RowA -->

<div id="RowC" class="indexservice">

<div class="ColA">Work by Service</div>
<div class="ColB">

<form action="<?php bloginfo('url'); ?>" method="get">
	<div>
<?php
$taxonomies = array('services-used');
$args = array('orderby'=>'name','hide_empty'=>true);
$select = get_terms_dropdown($taxonomies, $args);

$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
echo $select;
?>
	<noscript><div><input type="submit" value="Näytä" /></div></noscript>
	</div></form>
    
<?php 

function get_terms_dropdown($taxonomies, $args){
	$myterms = get_terms($taxonomies, $args);
	$output ="<select name='services-used'>";
	foreach($myterms as $term){
		$root_url = get_bloginfo('url');
		$term_taxonomy=$term->taxonomy;
		$term_slug=$term->slug;
		$term_name =$term->name;
		$link = $term_slug;
		$output .="<option value='".$link."'>".$term_name."</option>";
	}
	$output .="</select>";
return $output;
} ?>

</div>

</div><!-- end RowC -->

             
<div id="RowD" class="workfeed">

<div class="ColA">

<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>


<h2 class="termtitle"><?php printf( __( '%s' ), '<span>' . $term->name . '</span>' ); ?></h2>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">    
    <!-- add thumbnail -->
<div class="casethumb">
<a href="<?php the_permalink() ?>">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</a></div>
<!-- end casethumb -->
    
    <!-- begin storypost -->
	<div class="feedcont">	



        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
 
                        
         <?php the_excerpt(__('Read More &raquo;')); ?> 
         
         <div class="taxlist"><?php echo get_the_term_list( $post->ID, 'services-used', '', ', ', '' ); ?></div>
         
         </div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile; else:

endif;
wp_reset_query(); // reset the query
?>	


</div>  <!-- end ColA -->

</div>
<!-- end RowD -->
        

</div><!-- end content -->



<?php get_footer(); ?>