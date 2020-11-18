<?php
/*
Template Name: page-phish
*/
?>
<?php get_header(); ?>

<div class="phish-wrap">

<div class="phish-header">	
<div id="logo-phish">
<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/amsro-rev.png" alt="AMSRO" class="logo-phish" / ></a>
<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/tm-phish.png" alt="AMSRO Trust Mark" class="tm-phish" /></a>
</div>
	<h1><img src="<?php bloginfo('template_directory'); ?>/images/pg-title.png" alt="Phish of the day: Protecting reputation, Minimising risk" class="pg-title" /></h1>
</div>
</div>


<!-- begin content -->

<div id="content" class="phish-content">

	<p><strong>Phish of the Day</strong> is a service run by AMSRO that provides updates on incidences of non-genuine market and social research that are reported to us. This includes face to face, telephone and online research.</p>

<p>A majority of <strong>‘fake research’</strong> is undertaken to sell products or services. Our member agencies operate under strict privacy and ethical guidelines <a href="http://www.amsro.com.au/directory/">(See here for more information)</a>.  AMSRO member agencies are not permitted to sell or promote products or services under the guise of research.</p>

<p><strong>Please report to us</strong> any research contact you have received that you believe might not be genuine and we will post an alert on this page if it does not appear to us to be legitimate market or social research. AMSRO will investigate all reported non-genuine research contacts and depending on the severity and nature of the issue may attempt to work with the organisation (including both AMSRO members and non-members) to improve their operational practices so they comply with relevant legislation; or report them to the ACCC, or other relevant federal or State/Territory regulatory or enforcement bodies.</p>

	<p>AMSRO has the power to discipline its member companies for inappropriate research conduct, including potential expulsion for serious or serial offences.</p>

<div class="bs-example bs-example-tabs" data-example-id=togglable-tabs>
	
        <ul class="nav nav-tabs" id=myTabs role=tablist>
			<li role=presentation class="active tab-member tab-box">
      <a href=#home id=home-tab role=tab data-toggle=tab aria-controls=home aria-expanded=true style="text-align: center;">
	  
      <p>AMSRO MEMBERS</p>
      <p style="color: #fde202;">REPORT A PHISH HERE<br /><img src="<?php bloginfo('template_directory'); ?>/images/down-arrow-phish.png" alt="scroll" /></p>
      </a>
      </li>
       
        <li role=presentation class="tab-box tab-public">
			<a href=#profile role=tab id=profile-tab data-toggle=tab aria-controls=profile style="text-align: center;">
				<p>NON-MEMBER REPORTING<img src="<?php bloginfo('template_directory'); ?>/images/down-arrow-phish-gn.png" alt="Scroll" /></p>
				<p><span style="color: #DA3C3D">Click here</span> </p>
				
     
       </a>
        </li>
        
        </ul>
	
        <div class=tab-content id=myTabContent>
			<div class="tab-pane fade active in pane-member" role=tabpanel id=home aria-labelledby=home-tab>
        		
        		<img src="<?php bloginfo('template_directory'); ?>/images/report.png" alt="Report illegitimate Research communications" style="width: 100%; height: auto;" />
        		
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        		
        	</div> 
        	<div class="tab-pane pane-public fade" role=tabpanel id=profile aria-labelledby=profile-tab>
        	
        	 <img src="<?php bloginfo('template_directory'); ?>/images/public-report.png" alt="find out about illigetimate research communications and how to report them" style="width: 100%; height: auto;" />
        	 
				<p>This site is designed to promote appropriate conduct in the market research industry to ensure members of the public and AMSRO member organisations are protected from non-genuine research activities.</p>
        	 
				<h2>Protecting yourself against scams and fraud </h2>
       		
        		<p>Research plays an important role in society with surveys often used to identify and measure community knowledge, attitudes and behaviours, which then inform government policy and commercial business decisions.   Research enables Australians ‘to have a voice’ in matters that affect them.</p>     
				<p>AMSRO member organisations take the security of research participants information and their privacy, very seriously and want to help you protect yourself against online scams and hoax phone calls disguised as ‘research’. </p>
			
				<h2>Online scams, phishing and hoax emails</h2>
				
<p>Whilst our member organisations take every possible precaution to protect research participants, fraudulent activity is increasing and occasionally research companies are targeted. Occasionally, you may come across a hoax email circulating that looks like a research survey. It’s important to know that AMSRO Trust Mark member organisations will not: </p> 
	
	<ul>
		<li>Use personal information collected on your behalf for direct marketing</li> 
		<li>Pass on an individual’s details without their consent </li></ul> 
		
				<a href="/directory/" class="inline-dir-spruik"><img src="<?php bloginfo('template_directory'); ?>/images/tm-dir-spruik.jpg" alt="Directory" /></a>

		<p>Unlike many direct marketing companies, the sensitive information gathered by AMSRO members is not used for sales, promotional or other non-research purposes - meaning your information is protected.</p>
				
				<p>If you receive research correspondence via email or telephone and need to confirm if it is genuine, please check the <a href="http://www.amsro.com.au/directory/">AMSRO Trust Mark website</a> which lists legitimate and accredited research companies that work under <a href="http://www.amsro.com.au/member-services/privacy/">Australia’s first and only Industry APP Privacy Code.</a><p>
 
				<p>If the company name is not listed and remains suspicious we recommend reporting the incident to the Australian Competition and Consumer Commission via the <a href="http://www.scamwatch.gov.au">SCAMWATCH website</a> or by calling 1300 795 995.</p>   
<p>Alternatively, please contact <a href="mailto:amsro@amsro.com.au">AMSRO</a> to confirm its legitimacy.</p>
			</div>
	</div> 
			      
</div>


	
</div><!-- end content -->
    
<?php get_footer('phish'); ?>
      
