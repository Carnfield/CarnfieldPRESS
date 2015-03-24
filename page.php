<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="content">
	<div class="row">
        <div class="eight columns" id="post-<?php the_ID(); ?>">        
			<? global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } } ?>
			<?php switch ($cp_page_titles) { case "Page Titles On":?>
            <h1><?php the_title(); ?></h1>
            <?php break; ?>
            <?php case "Page Titles Off":?>
            <?php break; ?>	        
            <?php }?>
            
            
            <?php switch ($cp_page_meta) { case "Page Meta On":?>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <?php break; ?>
            <?php case "Page Meta Off":?>
            <?php break; ?>	        
            <?php }?>
            
            <div class="entry">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
        
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
        </div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>