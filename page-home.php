<?php
/*
Template Name: Homepage (NO Sidebar)
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="homepage" class="content">
	<div class="row">
        <div class="headline">
        <h2><?php the_field('top_headline');?></h2>
        </div>
    
        <div class="six columns">
        <?php the_field('top_left_image_or_slider');?>
        </div>
            
        <div class="six columns">
        <?php the_field('top_right_intro_text');?>
        </div> 
	</div>
</div>

<?php include (TEMPLATEPATH . '/bar-calltoaction.php'); ?>          
            
<div class="triblock lightgrey content">
	<div class="row">
        <div class="four columns">
        <?php the_field('top_right_intro_text');?>
        </div>
        
        <div class="four columns">
        <?php the_field('top_right_intro_text');?>
        </div>
        
        <div class="four columns">
        <?php the_field('top_right_intro_text');?>
        </div>
        <div class="clr"></div>
	</div>
</div>
    
        
	<?php endwhile; endif; ?>
    <div class="clr"></div>
</div>
<?php get_footer(); ?>