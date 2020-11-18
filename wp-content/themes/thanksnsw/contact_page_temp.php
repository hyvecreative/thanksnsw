<?php
/*
Template Name: contact_page_temp
*/

?>

<?php include ('headerhm.php'); ?>

<!-- begin content -->

<div id="content" class="contentwork clearfix">
<div id="RowA" class="contacttitle">

<div class="ColA"><h1>Contact</h1></div>

<div class="ColB"><h2>Do you have a project you would like to discuss? Give us a call or drop us a line below</h2></div>

</div><!-- end RowA -->

<div id="RowB" class="indexcontact">


<div class="ColA">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        </div>
<div class="ColB">
 	<div class="sbenquiry enquiry">
	<h2>If you have an enquiry</h2>
	<?php gravity_form(1, false, false, false, '', false); ?>
	</div>
</div>


</div><!-- end RowB -->


<div id="RowC" class="contactmaps">

<div class="mapholder">

<div class="ColA">
<a name="sydney"></a>
<h2>Sydney</h2>


<div class="video-container">
<iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=377+Sussex+St,+Sydney+NSW&amp;aq=0&amp;oq=377+Sus&amp;sll=-33.796923,150.922433&amp;sspn=1.476733,3.24646&amp;ie=UTF8&amp;hq=&amp;hnear=377+Sussex+St,+Sydney+New+South+Wales+2000&amp;t=m&amp;ll=-33.877328,151.204662&amp;spn=0.024941,0.053644&amp;z=14&amp;iwloc=near&amp;output=embed"></iframe><br /><small><a href="https://www.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=377+Sussex+St,+Sydney+NSW&amp;aq=0&amp;oq=377+Sus&amp;sll=-33.796923,150.922433&amp;sspn=1.476733,3.24646&amp;ie=UTF8&amp;hq=&amp;hnear=377+Sussex+St,+Sydney+New+South+Wales+2000&amp;t=m&amp;ll=-33.877328,151.204662&amp;spn=0.024941,0.053644&amp;z=14&amp;iwloc=near" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>
</div>

<div class="ColB">
<table>
<tbody>
<tr>
<td width="33%"><strong>Phone</strong></td>
<td width="66%">(02) 8280 9100</td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><a href="mailto:sydney@essentialmedia.com.au">sydney@essentialmedia.com.au</a></td>
</tr>
<tr>
<td><strong>Address</strong></td>
<td>Level 8, Suite 10, 377 Sussex Street, Sydney, NSW, 2000</td>
</tr>
</tbody>
</table>
</div>

</div><!-- end mapholder -->

<div class="mapholder">

<div class="ColA">
<a name="melbourne"></a>
<h2>Melbourne</h2>

<div class="video-container">

<iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15-31+Pelham+St,+Carlton+VIC&amp;aq=0&amp;oq=15-&amp;sll=-37.805323,144.985206&amp;sspn=0.012224,0.023925&amp;g=15%2F31+Peel+Street,+Melbourne,+Victoria&amp;ie=UTF8&amp;hq=&amp;hnear=15-31+Pelham+St,+Carlton+Victoria+3053&amp;t=m&amp;ll=-37.801646,144.969921&amp;spn=0.023736,0.053644&amp;z=14&amp;iwloc=near&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=15-31+Pelham+St,+Carlton+VIC&amp;aq=0&amp;oq=15-&amp;sll=-37.805323,144.985206&amp;sspn=0.012224,0.023925&amp;g=15%2F31+Peel+Street,+Melbourne,+Victoria&amp;ie=UTF8&amp;hq=&amp;hnear=15-31+Pelham+St,+Carlton+Victoria+3053&amp;t=m&amp;ll=-37.801646,144.969921&amp;spn=0.023736,0.053644&amp;z=14&amp;iwloc=near" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>
</div>

<div class="ColB">
<table>
<tbody>
<tr>
<td width="33%"><strong>Phone</strong></td>
<td width="66%">(03) 9929 9999</td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><a href="mailto:melbourne@essentialmedia.com.au">melbourne@essentialmedia.com.au</a></td>
</tr>
<tr>
<td><strong>Address</strong></td>
<td>15-31 Pelham Street, Carlton, VIC, 3053</td>
</tr>
</tbody>
</table>
</div>

</div><!-- end mapholder -->

<div class="mapholder">

<div class="ColA">
<a name="brisbane"></a>
<h2>Brisbane</h2>
<div class="video-container">

<iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=16+Peel+Street,+Brisbane,+Queensland&amp;aq=0&amp;oq=16+Peel+Street+Br&amp;sll=-27.472372,153.01775&amp;sspn=0.006863,0.011963&amp;ie=UTF8&amp;hq=&amp;hnear=16+Peel+St,+South+Brisbane+Queensland+4101&amp;t=m&amp;ll=-27.469668,153.019252&amp;spn=0.013327,0.026822&amp;z=15&amp;iwloc=near&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=16+Peel+Street,+Brisbane,+Queensland&amp;aq=0&amp;oq=16+Peel+Street+Br&amp;sll=-27.472372,153.01775&amp;sspn=0.006863,0.011963&amp;ie=UTF8&amp;hq=&amp;hnear=16+Peel+St,+South+Brisbane+Queensland+4101&amp;t=m&amp;ll=-27.469668,153.019252&amp;spn=0.013327,0.026822&amp;z=15&amp;iwloc=near" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>
</div>

<div class="ColB">
<table>
<tbody>
<tr>
<td width="33%"><strong>Phone</strong></td>
<td width="66%">(07) 3217 2000</td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><a href="mailto:brisbane@essentialmedia.com.au">brisbane@essentialmedia.com.au</a></td>
</tr>
<tr>
<td><strong>Address</strong></td>
<td>Level 3, 16 Peel Street, Brisbane, QLD, 4101</td>
</tr>
</tbody>
</table></div>

</div><!-- end mapholder -->

</div><!-- end RowC -->

</div><!-- end content -->

<?php get_footer(); ?>