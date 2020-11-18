<?php
/*
Template Name: peopletest_temp
*/

?>

<?php include ('headerhm.php'); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">
<div id="RowA" class="indextitle">

<div class="ColA"><h1>People</h1></div>

<div class="ColB"><h2>Our talented team has the experience and the know-how to deliver results</h2></div>

</div><!-- end RowA -->

<div id="RowB" class="indexsector">

<div class="ColA">People by Location</div>
<div class="ColB">
<a href="http://essentialmedia.net.au/location/melbourne/">Melbourne</a> |
<a href="http://essentialmedia.net.au/location/sydney-2/">Sydney</a> |
<a href="http://essentialmedia.net.au/location/brisbane/">Brisbane</a>
</div>

<p>Select location<p><form action="<?php bloginfo('url'); ?>" method="get">
	<div>
<?php
$taxonomies = array('location');
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
	$output ="<select name='location'>";
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

</div><!-- end RowB -->

<div id="RowD" class="peoplefeed">

<div class="ColA">

<?php // The WordPress Loop 0- customized with query_posts
query_posts('post_type=people&showposts=50');?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">    
    <!-- add thumbnail -->
<div class="casethumb">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('medium');
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>

                       
</div>
<!-- end casethumb -->
    
    <!-- begin storypost -->
	<div class="feedcont">	



        <h2><?php the_title(); ?></h2>
 
                        
         <?php the_content(__('Read More &raquo;')); ?> 
         
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