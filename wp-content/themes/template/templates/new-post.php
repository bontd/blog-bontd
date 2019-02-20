<?php
	$get_post = new WP_Query(array(
		'post_type'			=>'post',
		'order' 			=> 'DESC',
		'posts_per_page'	=> 2,
	));
?>
<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
	<!-- post -->
	<div class="col-md-6">
		<div class="post post-thumb">
			<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
			<div class="post-body">
				<div class="post-meta">
					<?php
						$category_detail=get_the_category(get_the_ID());
						// echo '<pre>';
						// echo print_r($category_detail);die;
						foreach($category_detail as $cd){
					?>
						<a class="post-category cat-<?php echo $cd->cat_name; ?>" href="<?php echo get_category_link( $cd->term_id ); ?> ">
							<?php echo $cd->cat_name; ?>
						</a>
					<?php } ?>
					<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
				</div>
				<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></h3>
			</div>
		</div>
	</div>
	<!-- /post -->
<?php endwhile ; wp_reset_query() ;?>