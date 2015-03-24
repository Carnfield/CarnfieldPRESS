<? global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } } ?>

    <!-- Toggle Google Hosted jQuery -->
	<?php switch ($fw_togglejquery) {
	case "Enabled":?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/<?php echo $fw_jqueryversion; ?>/jquery.js" type="text/javascript"></script>
	<?php break; ?>
    <?php case "Disabled":?>
	<!-- Framework Google Hosted jQuery is DISABLED -->
	<?php break; ?>	        
	<?php }?>
    <!-- /Toggle Google Hosted jQuery -->
    
    <!-- CSS Selection -->
	<?php switch ($fw_style_sheet) {
	case "Framework":?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/framework.css" type="text/css" media="screen" />
	<?php break; ?>
    <?php case "Child Style":?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/child.css" type="text/css" media="screen" />
	<?php break; ?>	        
	<?php }?>
    <!-- /CSS Selection -->
    
	<!-- Blog Post Style -->
	<?php switch ($fw_blogpost_style) {
	case "Boxed":?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/css/boxed-blog-posts.css" type="text/css" media="screen" />
	<?php break; ?>
    <?php case "Wide":?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/css/wide-blog-posts.css" type="text/css" media="screen" />
	<?php break; ?>	        
	<?php }?>
    <!-- /Blog Post Style -->
    
    <!-- Rounded Corner / Border Radius Option -->
	<?php switch ($fw_rounded_borders) {
	case "Enabled":?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/curvycorners.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/css/rounded-borders.css" type="text/css" media="screen" />
	<?php break; ?>
    <?php case "Disabled":?>
	<?php break; ?>	        
	<?php }?>
    <!-- /Rounded Corner / Border Radius Option -->
	
    <!-- Post Custom CSS -->
	<?php if (is_single()) {
		$css = get_post_meta($post->ID, 'css', true);
        if (!empty($css)) { ?>
 		<style type="text/css">
		<?php echo $css; ?>
		</style>
        <?php }
		} ?>
	<!-- /Post Custom CSS -->

	<!-- Page Custom CSS -->
	<?php if (is_page()) {
		$css = get_post_meta($post->ID, 'css', true);
        if (!empty($css)) { ?>
 		<style type="text/css">
		<?php echo $css; ?>
		</style>
        <?php }
		} ?>
	<!-- /Page Custom CSS -->
        
	<!-- Theme Custom CSS -->
	<style type="text/css">
	<?php echo stripslashes ($fw_theme_custom_css); ?>
	</style>
    <!-- /Theme Custom CSS -->

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweetable.js"></script>
    
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie7.css" type="text/css" media="screen" />
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />