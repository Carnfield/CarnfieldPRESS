<?php get_header(); ?>
<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class( 'eight columns') ?>>
		
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

		<div class="entry">
		<?php the_content(); ?>
		</div>

		<div class="postmetadata">
			<?php the_tags('Tags: ', ', ', '<br />'); ?>
			Posted in <?php the_category(', ') ?> | 
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div><!-- .eight columns -->

	<?php get_sidebar(); ?>
</div><!-- row -->

<?php get_footer(); ?>
