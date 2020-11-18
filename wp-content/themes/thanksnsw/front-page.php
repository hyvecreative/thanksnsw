<?php get_header(); ?>

<div class="container-fluid hm-intro">	
<div class="container">
	
<div class="row about-wrap text-center" style="max-width: 1000px; margin-right: auto; margin-left: auto;">

	<img src="<?php bloginfo('template_directory'); ?>/images/NSW_renewables_superpower.jpg" alt="AMSRO" />
</div>

<div class="row about-wrap text-center" style="max-width: 480px; margin-right: auto; margin-left: auto;">

	<div class="col text-center" style="margin-bottom: 30px;">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
	
	</div>
</div>

<div class="row">
	<div class="col text-center" style="margin-bottom: 30px;">

		<h2>Share here</h2>

		<a style="margin-right: 3%;" href="#"><i class="fab fa-facebook-square fa-3x"></i></a>
		<a href="#"><i class="fab fa-twitter-square fa-3x"></i></a>	

	</div>

</div>
	
<div class="row icons-wrap text-center" style="background: #fff; margin-top: 30px;">
	<div class="col-sm-3">
	<a href="/list-of-members/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-member-list.png" alt="logo" /></a>

	</div>
	<div class="col-sm-3">
	<a href="/directory/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-directory.png" alt="logo" /></a>

	</div>
	<div class="col-sm-3">
	<a href="/why-join/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-mship.png" alt="logo" /></a>

	</div>
	<div class="col-sm-3">
	<a href="/resources-for-covid-19/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-covid.png" alt="logo" /></a>

	</div>
</div>
	
	
</div> <!-- end .container -->

</div> <!-- end .container-fluid -->
	
<?php get_footer(); ?>