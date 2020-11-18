<?php
/*
Template Name: front-page_temp
*/
?>
<?php get_header(); ?>

<div class="container-fluid intro-sections" style="position: relative; padding-left: 0; padding-right: 0;">
	
<div class="section hm-feature hero-wrap">

<div class="hero-slider">
    <div><img src="<?php bloginfo('template_directory'); ?>/images/tm-slider-new.jpg" alt="AMSRO" />
		<div class="slide-text-wrap text-center">
			<h2>Trust the Mark - Use an AMSRO member for your research needs</h2>
			<a href="/member-services/trust-mark/" class="btn hm-more">Find out more</a>
		</div>
	</div>
    <div><img src="<?php bloginfo('template_directory'); ?>/images/agm-slider.jpg" alt="AMSRO" />
	<div class="slide-text-wrap text-center">
			<h2>Members are welcome to attend our networking events</h2>
			<a href="/annual-general-meeting-2020-and-member-forum-update/" class="btn hm-more">Find out more</a>
		</div></div>
    <div><img src="<?php bloginfo('template_directory'); ?>/images/covid-slider-2.jpg" alt="AMSRO" />
	<div class="slide-text-wrap text-center">
			<h2>Membership resources for COVID-19</h2>
			<a href="/resources-for-covid-19/" class="btn hm-more">Find out more</a>
		</div></div>
	<div><img src="<?php bloginfo('template_directory'); ?>/images/privacy-slider.jpg" alt="AMSRO" />
	<div class="slide-text-wrap text-center">
			<h2>Industry Privacy Code - Privacy and data protection</h2>
			<a href="/member-services/privacy/" class="btn hm-more">Find out more</a>
		</div></div>
	<div><img src="<?php bloginfo('template_directory'); ?>/images/directory-slider.jpg" alt="AMSRO" />
	<div class="slide-text-wrap text-center">
			<h2>Find an AMSRO Trust Mark Member</h2>
			<a href="/directory/" class="btn hm-more">Open Directory</a>
		</div></div>
	<div><img src="<?php bloginfo('template_directory'); ?>/images/workplace-slider.jpg" alt="AMSRO" />
	<div class="slide-text-wrap text-center">
			<h2>Free legal hotline - Member access to HR and privacy law advice</h2>
			<a href="/cie-legal-services-supporting-amsro-members/" class="btn hm-more">Find out more</a>
		</div></div>
</div>
	
</div> <!-- end .hero-wrap-->


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
	
<div class="services-border">
	
	<h2 class="services-h2 text-center"><span>Member Services</span></h2>

	<div class="row services-wrap">

		<?php get_template_part( 'partials/content', 'services-list' ); ?>

	</div>
	
</div>	 <!-- end .services-border -->	
	
</div> <!-- end .container -->

</div> <!-- end .container-fluid -->

<div class="container-fluid news-events" style="margin: 30px 0">
<div class="container">
<div class="row news-events">
	
	<?php get_template_part( 'partials/content', 'news-events' ); ?>
			
</div> <!-- end row-->	
		         
</div> <!-- end container-->	
</div> <!-- end container-fluid-->

<div class="container-fluid hm-membership">
<div class="container">

	
	<?php get_template_part( 'partials/content', 'membership-benefits' ); ?>

		         
</div> <!-- end container-->
	
</div> <!-- end container-fluid-->
	
<?php get_footer(); ?>