<?php get_header(); ?>
<!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<?php
						$search_query = new WP_Query('s='.$s.'&showpost=-1');
						$search_keyword = wp_specialchars($s, 1);
						$search_count = $search_query->post_count;

					?>
					<ul class="page-header-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Search</li>
					</ul>
					<h1><?php printf(__('Có %1$s bài viết phù hợp với tìm kiếm của bạn.', 'wp'), $search_count); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
</header>
<!-- /Header -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<!-- post -->
						<div class="col-md-12">
							<div class="post post-row">
								<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
								<div class="post-body">
									<div class="post-meta">
										<?php
											$category_detail=get_the_category(get_the_ID());
											foreach($category_detail as $cd){
										?>
											<a class="post-category cat-<?php echo $cd->cat_name ?>" href="<?php echo get_category_link( $cd->term_id ); ?> ">
												<?php echo $cd->cat_name; ?>
											</a>
										<?php } ?>
										<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
									</div>
									<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></h3>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php endwhile ?>
					<div class="col-md-12">
						<?php custom_pagination(); ?>
					</div>
					<?php else: ?>
						<?php get_template_part('content', 'none'); ?>
					<?php endif; ?>
				</div>
			</div>
			
			<?php get_sidebar(); ?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<?php get_footer(); ?>