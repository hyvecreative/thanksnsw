<!-- begin colRight -->

<div class="col-12 col-lg-4 awards-right">

<div class="sbevents" style="width: 100%; overflow: hidden;">


               <div class="jvs-image-sb">
               				   <img src="http://www.amsro.com.au/amsroresp/wp-content/uploads/2019/08/Jayne-Van-Souwe-sq.jpg" alt="Jayne Van Souwe" />
				</div>
                
                <div class="jvs-content-sb">
					<h3 style="margin-top: 16px;">Jayne Van Souwe</h3>
					<p style="margin-top: 0;"><span>16 July 1959 –<br />15 April 2019</span></p>
					
	            </div>


	</div>
 
<div class="sbevents" style="width: 100%;">
	
	<img class="sb-image" src="<?php bloginfo('template_directory'); ?>/images/AMSRO-Trust-Mark-comb-text-sb.jpg" alt="AUSTRALIAN MARKET AND SOCIAL RESEARCH ORGANISATIONS">
	
	<a href="https://www.amsro.com.au/directory/"><img class="sb-image" src="<?php bloginfo('template_directory'); ?>/images/Banner_ad_pricavy.jpg" alt="AMSRO advertisment - Privacy"></a>

	</div>
	
	<div class="sbevents" style="width: 100%;">
<h2>Leadership Awards Media Releases</h2>

<ul>
    <?php
			$my_query = new WP_Query("cat=26&showposts=5");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="feeditem">  
				<li>
                
                <div class="feedcont">	
                
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

   				</div><!-- end feedcont -->
              
                </li>
                
                </div><!-- END feeditem-->
                
			<?php endwhile;	?>
    </ul>

</div><!-- end sbevents-->

</div><!-- end colRight -->




