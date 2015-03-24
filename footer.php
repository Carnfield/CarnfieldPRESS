<div class="footer-wrap">
    <div class="row">
        <div id="footer">
			<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> - <a href="#" gumby-goto="top">Top of page</a></p>
        </div>
    </div>
</div>

	<?php wp_footer(); ?>	
	<!-- Don't forget Google Analytics, Located further down the page -->	
    <!-- Closing Scripts - Loaded Last for Speed! -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src=""><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/"><\/script>');
	} else {
	  document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>
	<script gumby-touch="js/libs" src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/gumby.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.retina.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.fixed.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.skiplink.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.checkbox.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.radiobtn.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.tabs.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/gumby.navbar.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/ui/jquery.validation.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/gumby.init.js"></script>

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
</body>
</html>
