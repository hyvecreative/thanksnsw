<!-- begin colRight -->

<div class="col-sm-4 colRight polling-sb" style="margin-bottom: 30px;">

<div class="sbevents">
	
	<img class="sb-image" src="<?php bloginfo('template_directory'); ?>/images/AMSRO-Trust-Mark-comb-text-sb.jpg" alt="AUSTRALIAN MARKET AND SOCIAL RESEARCH ORGANISATIONS">
	
	<a href="https://www.amsro.com.au/directory/"><img class="sb-image" src="<?php bloginfo('template_directory'); ?>/images/Banner_ad_pricavy.jpg" alt="AMSRO advertisment - Privacy"></a>

	</div>
 
<div class="sbevents">
	<div class="chair-wrap" style="overflow: hidden;">
	 <?php
                $image = get_field('quote_image');

                ?>

				   <img class="sb-image-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<p style="margin-top: 30px;"><?php the_field('quote_title'); ?></p>			
	
</div>
<?php the_field('quote_text'); ?>
</div>

	
<div class="sbevents">
<h2>Inquiry Media Releases</h2>

	<ul>
    <?php
			$my_query = new WP_Query("cat=23&showposts=5");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    			<li>
                
                <a href="<?php the_permalink() ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
              
                </li>
                
			<?php endwhile;	?>
    </ul>

</div><!-- end sbevents-->

</div><!-- end colRight -->