<?php get_header(); ?>

<!-- begin content -->

<div class="container member-title-wrap">

	<!-- begin row -->

	<div class="row content member-titles">
		<div class="col text-center">

         <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

            <h2 class="termtitle"><?php printf( __( '%s' ), '<span>' . $term->name . '</span>' ); ?></h2>

        <h3>Select a Filter</h3>

        <div class="membernav">
            <a href="http://amsro.com.au/list-of-members">All members</a> |
            <a href="http://amsro.com.au/membertype/recruitersupplier/">Recruiter/Supplier</a> |
            <a href="http://amsro.com.au/membertype/fieldpanel/">Field/Panel</a>
        </div>
        
        </div> <!-- end col -->
    </div> <!-- end row -->

<div class="row member-list" style="min-height: 900px; margin-bottom: 40px;">

	<?php global $wp_query; ?>

<?php // Alpha sort

$posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=-1');

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="col-lg-3 col-sm-4 col-6 mem-list-item <?php the_field('reversed_background'); ?> text-center">
    
    <!-- begin storypost -->

         <div class="member-thumb <?php the_field('small_logo'); ?>">
                         
        <a href="<?php the_permalink() ?>">
                                
        <?php if ( has_post_thumbnail() ) {
        								the_post_thumbnail(array());
        								} else { ?>
        								<img src="<?php bloginfo('template_directory'); ?>/images/default-member-image.jpg" alt="<?php the_title(); ?>" />
        								<?php } ?>
                               
        </a>
        </div><!-- end member-thumb -->	



</div>  <!-- end col -->

<?php endwhile; else:

endif;
wp_reset_query(); // reset the query
?>

</div><!-- end row-->	
    
</div><!-- end container -->
    
<?php get_footer(); ?>