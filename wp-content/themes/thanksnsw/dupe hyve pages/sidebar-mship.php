<!-- begin colRight -->

<div class="col-lg-3 offset-lg-1 col-md-4 sidebar-main colRight" style="margin-bottom: 30px;">
 
<div class="sbevents" style="margin-bottom: 20px;">

<h2 class="mship">New Members</h2>

<p>AMSRO is the national peak industry body for market and social research, data and insights organisations in Australia. Representing over 75% of the industry, AMSRO has been advocating on behalf of its members for over 25 years and continues to promote and protect our member’s interests across government and industrial relations issues, privacy legislation, quality standards, information security and workplace relations.</p>

<a href="http://www.amsro.com.au/wp-content/uploads/2020/10/AMSRO_New_Membership_Application_20-21_FORM.pdf" class="btn renewal-btn">New Member Application Form</a>

<h2 class="mship">Membership Fees 2020-21</h2>

<p><strong>Membership fees fall on 1 July 2020 and members have until August 31 2020 to renew.</strong></p>

<p>There are two types of membership available:</p>
<ul>
	<li><strong>1. AMSRO Trust Mark member organisation</strong> member organisations are certified to ISO 20252</li>
	<li>or</li>
	<li><strong>2. AMSRO member organisation</strong> (no ISO 20252 certification required)</li>
</ul>

<p>To discuss your membership renewal please contact AMSRO Secretariat on 0460 012 092 or email - <a href="mailto:sarah@amsro.com.au">sarah@amsro.com.au</a></p>


</div><!-- end sbevents-->

<div class="sbspruik" style="margin-bottom: 20px;">
	<a href="/directory/"><img src="<?php bloginfo('template_directory'); ?>/images/tm-dir-spruik.jpg" alt="Directory" class="" /></a>
</div> <!-- end sbspruik-->

<div class="sbevents sb-pgfeed">

<ul>

 <?php

$parent_page_id = 10;
wp_list_pages( array(
    'child_of' => $parent_page_id,
	'sort_order' => 'desc',
	'sort_column' => 'post_date',
	'title_li' => __('<h2>Membership information</h2>'),
    'link_before' => '<i class="fas fa-chevron-right"></i> '
) );

?>

</ul>

</div><!-- end sb-pgfeed -->

</div> <!-- end col -->



</div><!-- end colRight -->