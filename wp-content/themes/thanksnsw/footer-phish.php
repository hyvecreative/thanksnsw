

<!-- begin footer -->

<div id="footer">

<div id="ftwraptop">
<div id="fttop">

<div class="footerleft">
<div class="footernav">



<h2>AMSRO members login</h2>
<ul class="ftnewslist">

     <?php /* Widgetized sidebar */

	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?><?php endif; ?>
	
	<div class="find-pw"><a href="/user-profile/">Change your password</a></div>
	
</div>

</div><!-- end footerleft -->

<div class="footermiddle essential">

<h2>Affiliates</h2>
<a href="http://amsrs.com.au"><img src="<?php bloginfo('template_directory'); ?>/images/amsrs_rev_logo.png" alt="AMSRS" /></a>
<a href="http://rica.com.au"><img src="<?php bloginfo('template_directory'); ?>/images/rica_rev_logo.png" alt="RICA" /></a>
<a href="http://www.grbn.org"><img src="<?php bloginfo('template_directory'); ?>/images/GBRN_logo.png" alt="GBRN" /></a>
<a href="http://www.esomar.com"><img src="<?php bloginfo('template_directory'); ?>/images/ESOMAR_logo.png" alt="ESOMAR" /></a>
<a href="http://aprc-research.com"><img src="<?php bloginfo('template_directory'); ?>/images/APRC_logo.png" alt="APRC Research" /></a>
<a href="http://www.ami.org.au"><img src="<?php bloginfo('template_directory'); ?>/images/AMI_logo-tm-transparent.png" alt="Australian Marketing Institute" /></a>
</div><!-- end footermiddle -->

<div class="footerright">
<h2><a href="/contact/">Contact us</a></h2>
<p>Telephone:  02 8017 6717</p>
<p><a href="mailto:amsro@amsro.com.au">email: amsro@amsro.com.au</a></p>



</div><!-- end footerright -->

</div><!-- end fttop -->
</div><!-- end ftwraptop -->	

<div id="ftwrapbot">
<div id="footerbase">
<div class="footerleft footernews">

<h2>Site map</h2>


<ul id="menu-amsronew-1" class="menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item menu-item-2351">
<a href="/.">Home</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2347">
<a href="/about/">About AMSRO</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2353">
<a href="/member-services/">Member services</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2350">
<a href="/buyers/">Buyers</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2359">
<a href="/news/">News</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2352">
<a href="/list-of-members/">List of members</a>
</li>
</ul>      


</div><!-- end footerleft -->

<div class="footermiddle">

<h2>Search</h2>
<div id="footerMenu">

</div>
<div id="searchBox" class="clearfix">
              
            <form method="get" id="searchform" action="https://amsro.com.au/" >
				<label for="s">Search</label>
				<input type="text" value="SEARCH" onFocus="this.value=''" name="s" id="s" />
				<input type="submit" name="searchbutton" id="searchsubmit" class="searchsubmit" value="Go" />
			</form>
              
    </div><!-- END TOP searchbox --> 

</div><!-- end footermiddle -->

<div class="footerright">
<img src="<?php bloginfo('template_directory'); ?>/images/amsro_rev_logo.png" alt="AMSRO" />
<p class="copyright">&copy; 2014 Australian Market and Social Research Organisations</p>
</div><!-- end footerright -->

</div> <!-- end footerbase -->

</div><!-- end ftwrapbot -->

</div><!-- end footer -->

<!-- end wrapper -->
</div>





<?= wp_footer() ?> 
    
 <script>
(function($){
      jQuery('.a-menu').flexMenu({
        responsivePattern: 'off-canvas'
      });
    })(jQuery);   
</script> 

<script> 
	
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.nav-tabs .tab-box a');
});


$(window).resize(function(){
  equalheight('.nav-tabs .tab-box a');
});
	
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4215605-43', 'amsro.com.au');
  ga('send', 'pageview');

</script>


</body>

</html>