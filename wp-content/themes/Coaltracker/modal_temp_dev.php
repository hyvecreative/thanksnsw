<?php
/*
Template Name: modal_temp_dev
*/

?>

<?php get_header(''); ?>

<!-- begin content -->

<div id="content">

<!-- begin colLeft -->
	
    <div id="colLeft" class="page memberlist">

<h1>AMSRO Members</h1>

<div class="membernav">
<a href="http://amsro.com.au/list-of-members-dev">All members</a> |
<a href="http://amsro.com.au/membertype/recruitersupplier/">Recruiter/Supplier</a> |
<a href="http://amsro.com.au/membertype/fieldpanel/">Field/Panel</a>

</div>

	<?php // The WordPress Loop 0- customized with query_posts
query_posts('post_type=members&showposts=150&orderby=title&order=asc');?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="feeditem">
    
    <!-- begin storypost -->
	<div class="feedcont">	
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	</div>
         <!-- end feedcont -->
</div>  <!-- end feeditem -->
<?php endwhile; else:

endif;
wp_reset_query(); // reset the query
?>	

</div><!-- end colleft -->
	
        <?php get_sidebar(' '); ?>
    
	</div><!-- end content -->
    
<?php get_footer(); ?>



