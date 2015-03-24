<?php
$themename = "CarnfieldPRESS";
$shortname = "cp";
$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
$wp_cats[$category_list->cat_ID] = $category_list->cat_name;}
array_unshift($wp_cats, "Choose a category"); 
$options = array (
array(	"name" => $themename." Options",
		"type" => "title"),
		
array(	"name" => "Homepage",
		"type" => "section"),
array(	"type" => "open"),
array(	"name" => "Call to Action",
		"desc" => "Choose if you'd like to use the call to action (enabled by default).",
		"id" => $shortname."_calltoaction_toggle",
		"type" => "select",
		"options" => array("Call to Action Enabled", "Call to Action Disabled"), 
		"std" => "Call to Action Enabled"),
array(	"name" => "Call to Action Bar Text",
		"desc" => "Your call to action text or strapline you can use strong or em tags here only.",
		"id" => $shortname."_calltoaction_text",
		"type" => "text"),
array(	"name" => "Call to Action BUTTON Text",
		"desc" => "Your call to action BUTTON Text, Default: Contact Now",
		"id" => $shortname."_calltoaction_button_text",
		"type" => "text"),
array(	"name" => "Call to Action BUTTON URL",
		"desc" => "Your call to action BUTTON URL Location, ie:  /contact-us/   or  http://www.mysite.com/contact",
		"id" => $shortname."_calltoaction_button_url",
		"type" => "text"),
array(	"type" => "close"),
 
array(	"name" => "Breadcrumbs",
		"type" => "section"),
array(	"type" => "open"),
array(	"name" => "Breadcrumbs",
		"desc" => "Choose if you'd like to use breadcrumb navigation or not (enabled by default).",
		"id" => $shortname."_breadcrumbs_toggle",
		"type" => "select",
		"options" => array("Breadcrumbs Enabled", "Breadcrumbs Disabled"), 
		"std" => "Breadcrumbs Enabled"),
array(	"type" => "close"),

array(	"name" => "Pages",
		"type" => "section"),
array(	"type" => "open"),
array(	"name" => "Show Page Titles",
		"desc" => "Enable or Disable Page Titles (on by default)",
		"id" => $shortname."_page_titles",
		"type" => "select",
		"options" => array("Page Titles On", "Page Titles Off"), 
		"std" => "Page Titles On"),
		
array(	"name" => "Show Page Meta Information",
		"desc" => "Enable or Disable Page Meta Information - This is the post date, author info etc.. (off by default)",
		"id" => $shortname."_page_meta",
		"type" => "select",
		"options" => array("Page Meta On", "Page Meta Off"), 
		"std" => "Page Meta Off"),
array(	"type" => "close"),

array(	"name" => "Posts",
		"type" => "section"),
array(	"type" => "open"),	
array(	"name" => "Show Post Meta Information",
		"desc" => "Enable or Disable Post Meta Information - This is the post date, author info etc.. (off by default)",
		"id" => $shortname."_post_meta",
		"type" => "select",
		"options" => array("Post Meta On", "Post Meta Off"), 
		"std" => "Post Meta Off"),
array(	"type" => "close"),
);

function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=functions.php&saved=true");
die;
} 
else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=functions.php&reset=true");
die;}}
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');}

function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/inc/admin.css", false, "1.0", "all");
wp_enqueue_script("cwd_script", $file_dir."/inc/admin.js", false, "1.0");}

function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';?>
<div class="wrap cwd_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 <div class="cwd_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":?>
<?php break;case "close":?>
</div>
</div>
<br />
<?php break;case "title":?>
<p><?php echo $themename;?> is built for ease of use and simplicity.</p>
<p>To purchase help or support then visit: <a target="_blank" href="http://www.carnfieldwebdesign.co.uk/carnfieldpress/" title="Carnfield Web Design">www.carnfieldwebdesign.co.uk/carnfieldpress/</a></p>
<p>To donate to a charity we support then visit: <a target="_blank" href="http://www.sportinghearts.org.uk" title="Sporting HEARTS">www.sportinghearts.org.uk</a></p>
<p>Use the theme options panel to enable and disable options such as page titles and breadcrumbs.</p>
<p><strong>DO NOT use " in the option boxes as this will break the theme!</strong><br>
for example: This is our "New" Theme</p>
<?php break;case 'text':?>
<div class="cwd_input cwd_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php break;case 'textarea':?>
<div class="cwd_input cwd_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php break; case 'select':?>
<div class="cwd_input cwd_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php break;case "checkbox":?>
<div class="cwd_input cwd_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; case "section": $i++;?>
<div class="cwd_section">
<div class="cwd_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="cwd_options">
<?php break; }}?>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php }?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>