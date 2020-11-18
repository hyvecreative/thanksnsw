<?php get_header(); ?>



<div class="container-fluid hm-intro">	
<div class="container">
	
<div class="row about-wrap text-center" style="max-width: 650px; margin-right: auto; margin-left: auto;">
	<div class="col">

		<h2 style="color:#fff;">About AMSRO</h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
	
	<a href="/about/" class="btn hm-more">Find out more</a>
	</div>
</div>
	
<div class="row icons-wrap text-center">
	<div class="col-sm-3">
	<a href="/list-of-members/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-member-list.png" alt="AMSRO" /></a>
		<p><a href="/list-of-members/">Member List</a></p>
	</div>
	<div class="col-sm-3">
	<a href="/directory/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-directory.png" alt="AMSRO" /></a>
		<p><a href="/directory/">Trust Mark Company Directory</a></p>
	</div>
	<div class="col-sm-3">
	<a href="/why-join/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-mship.png" alt="AMSRO" /></a>
	<p><a href="/why-join/">About Membership</a></p>
	</div>
	<div class="col-sm-3">
	<a href="/resources-for-covid-19/"><img src="<?php bloginfo('template_directory'); ?>/images/icon-covid.png" alt="AMSRO" /></a>
	<p><a href="/resources-for-covid-19/">COVID-19</a></p>
	</div>
</div>
	
	
</div> <!-- end .container -->

</div> <!-- end .container-fluid -->
	
<?php get_footer(); ?>