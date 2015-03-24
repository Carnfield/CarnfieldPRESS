<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="content">
	<div class="row">
        <div class="eight columns" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<? global $options; foreach ($options as $value) { if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } } ?>
            <?php switch ($cp_post_meta) { case "Post Meta On":?>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <?php break; ?>
            <?php case "Post Meta Off":?>
            <?php break; ?>	        
            <?php }?>
            
		<div class="entry">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<?php the_tags( 'Tags: ', ', ', ''); ?>
		</div>
		
		<?php edit_post_link('Edit this entry','','.'); ?>	
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
        </div><!-- /eight columns -->
		
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>