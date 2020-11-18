</div><!-- end contentwrap -->

</div><!-- end wrapper -->



<!-- begin footer -->

<div id="footerwrap">
<div id="footer">

<div class="butmain"><a href="http://hyve.com.au/hyveblog/?view_full_site=true">Full Site</a></div>    

<div class="footerlt">
<a href="http://sda.org.au/"><img src="<?php bloginfo('template_url'); ?>/images/SDA-ft-logo.png" alt="SDA" border="0" class="" /></a>
</div>

<div class="footermd">
<div class="ftconnect">
<h2>Connect:</h2>
<div class="fbconnect"><a href="http://www.facebook.com/100percentpay">Connect to face book</a></div>
</div> <!-- end ftconnect -->


</div> <!-- end footermd -->



<div class="footerauth"><p>&copy;2013 SDA. Authorised by Joe de Bruyn, National Secretary, Shop, Distributive and Allied Employees' Association 
6th Floor, 53 Queen Street, Melbourne, VIC</p></div>

</div><!-- end footer -->	
</div><!-- end footerwrap -->	





<?= wp_footer() ?> 
    
    <script type="text/javascript" charset="utf-8">
    jQuery(function() {
      
    	//DROPDOWN MENU INIT
    	ddsmoothmenu.init({
      	mainmenuid: "topMenu", //menu DIV id
      	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
      	classname: 'ddsmoothmenu', //class added to menu's outer DIV
      	//customtheme: ["#1c5a80", "#18374a"],
      	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
      });
		
     
    });
	

</script>

<?php if (get_option(' simplo_analytics') <> "") { 
		echo stripslashes(stripslashes(get_option('simplo_analytics'))); 
	} ?>


</body>

</html>