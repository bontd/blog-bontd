<?php get_header(); ?>
<?php
	$search_query = new WP_Query('s='.$s.'&showpost=-1');
	$search_keyword = wp_specialchars($s, 1);
	$search_count = $search_query->post_count;
	printf(__('We found %1$s articles for your search query.', 'wplayout'), $search_count);

?>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	abc
<?php endwhile ?>
<?php else: ?>
	<?php get_template_part('content', 'none'); ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>