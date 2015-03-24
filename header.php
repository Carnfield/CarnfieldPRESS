<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<!-- Manually Add Social Information -->
	<meta name="author" content="<?php bloginfo('stylesheet_directory'); ?>/author.txt">
	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>
	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/gumby.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/modernizr-2.6.2.min.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="content">
	<div class="row">
        <div id="header" class="twelve columns">
            <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
	</div>
</div>
    
<!-- Nav Menu -->
<div class="navcontain">
	<div class="navbar" id="nav3" gumby-fixed="top">
		<div class="row">
        <a class="mobile-logo" href="<a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/mobile-nav-logo.png"></a>
		<a class="toggle" gumby-trigger="#nav3 > .row > .menu-header-menu-container > ul" href="#"><i class="icon-menu"></i></a>
		<?php wp_nav_menu( array( 'walker' => new description_walker(), 'walker' => new Add_Sub_Div(), 'container_class' => '', 'menu_class'      => 'twelve columns', 'theme_location' =>   'primary' ) ); ?>
		</div>
	</div>
</div>
<? global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } } ?>
<?php switch ($cp_breadcrumbs_toggle) { case "Breadcrumbs Enabled":?>
<?php if ( is_front_page() ) { } else { ?>
<div class="breadcrumbs">
	<div class="row">
	<?php if (function_exists('carnfield_breadcrumbs')) carnfield_breadcrumbs(); ?>  
	</div>
</div>
<?php } ?>
<?php break; ?>
<?php case "Breadcrumbs Disabled":?>
<?php break; ?>	        
<?php }?>
<!-- End: header.php -->