<?php
/*
Template Name: action_temp
*/
?>

<?php get_header(); ?>

<!-- begin wrapper -->

<div id="wrapper">

<div id="contentwrap"> <!-- Start content template... -->

<!-- begin content -->

<div id="content">

<!-- begin colLeft -->
	
    <div id="colLeft">
		<h1><?php the_title(); ?></h1>	
	
		<div id="customsocial">
<div class="social_buttons">
        <div class="inset">
            <a onclick="window.open('http://www.facebook.com/share.php?u=http://100percentpay.com.au','popup','width=500,height=300,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false" class="fb login_button" target="_blank">
                <div class="logo_wrapper"><span class="logo"></span></div>
                <span>Share on Facebook</span>
            </a>
        </div>
        <div class="inset">
            <a onclick="window.open('https://twitter.com/intent/tweet?text=Young+workers+deserve+to+be+paid+properly+for+their+contribution.+Join+the+fight+for+equal+pay!+%23100percentpay+at+18%2B+http://tiny.cc/f5idsw','popup','width=500,height=300,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false" class="tw login_button" target="_blank">
                <div class="logo_wrapper"><span class="logo"></span></div>
                <span>Share on Twitter</span>
            </a>
        </div>
</div>
</div>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<?php the_content(__('(more...)')); ?>
	
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div><!-- end colleft -->
	
         <?php include ('sidebarraf.php'); ?>    
	</div><!-- end content -->
    
<?php get_footer(); ?>


