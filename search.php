<?php get_header(); ?>
<div class="content">
	<div class="row">      
        <div class="eight columns">
        <h3>Search Results</h3>
        <p>Below are your search results for: <span class="secondary label"><?php the_search_query(); ?></span></p>
            <?php if (have_posts()) : ?>       
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h4><?php the_title(); ?></h4>
                <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                    <div class="entry">
                    <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
            <?php else : ?>
            <h2>No posts found.</h2>
            <?php endif; ?>
        </div><!-- /eight columns -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>