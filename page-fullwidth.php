<?php
/*
Template Name: Full Width Page (NO Sidebar)
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="content">
	<div class="row">
        <div class="twelve columns" id="post-<?php the_ID(); ?>">
        
            <h1><?php the_title(); ?></h1>
            <!-- Uncomment for Page META Info
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            -->
            
            <div class="entry">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
        
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>