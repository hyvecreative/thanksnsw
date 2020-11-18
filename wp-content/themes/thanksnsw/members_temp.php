<?php
/*
Template Name: members_temp
*/

?>

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
		<div class="col memberlist">
	

<h1>AMSRO Members</h1>

<div class="membernav">
<a href="http://amsro.com.au/list-of-members">All members</a> |
<a href="http://amsro.com.au/membertype/recruitersupplier/">Recruiter/Supplier</a> |
<a href="http://amsro.com.au/membertype/fieldpanel/">Field/Panel</a>

</div>

<?php // The WordPress Loop 0- customized with query_posts
query_posts('post_type=members&showposts=150&orderby=title&order=asc');?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">
    
    <!-- begin storypost -->

	<div class="feedcont">
	<div class="casethumb">
                 
<a href="<?php the_permalink() ?>">
                        
<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail(array());
								} else { ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/default-member-image.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
                       
</a>
</div><!-- end casethumb -->	
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	</div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile; else:

endif;
wp_reset_query(); // reset the query
?>	

</div><!-- end col -->
	
</div><!-- end row -->

</div> <!-- end container-->
    
<?php get_footer(); ?>



