<div class="col-md-4">
	<!-- post widget -->
	<div class="aside-widget">
		<div class="section-title">
			<h2><?php echo __('Bài viết xem nhiều', 'wp'); ?></h2>
		</div>
		<?php 
			$popularpost = new WP_Query( array( 
				'posts_per_page' => 5, 
				'meta_key' => 'wpb_post_views_count', 
				'orderby' => 'meta_value_num', 
				'order' => 'DESC'  
			) );
			// echo '<pre>';
			// echo print_r($popularpost);die;
			while ( $popularpost->have_posts() ) : $popularpost->the_post();
			 ?>
			<div class="post post-widget">
				<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
				<div class="post-body">
					<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words(get_the_title(),10); ?></a></h3>
				</div>
			</div>
		<?php
			endwhile;
		?>
	</div>
	<!-- /post widget -->

	<!-- post widget -->
	<div class="aside-widget">
		<div class="section-title">
			<h2><?php echo __('bài viết khác', 'wp'); ?></h2>
		</div>
		<?php 
			$viewport = new WP_Query( array(
				'posts_per_page' => 2,
				'meta_key' => 'wpb_post_views_count',
				'orderby' => 'meta_value_num',
				'order' => 'DESC'
			) );
			// echo '<pre>';
			// echo print_r($popularpost);die;
			while ( $viewport->have_posts() ) : $viewport->the_post();?>
				<div class="post post-thumb">
					<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
					<div class="post-body">
						<div class="post-meta">
							<?php
								$category_detail=get_the_category(get_the_ID());
								foreach($category_detail as $cd){
							?>
								<a class="post-category cat-<?php echo $cd->term_id ?>" href="<?php echo get_category_link( $cd->term_id ); ?> ">
									<?php echo $cd->cat_name; ?>
								</a>
							<?php } ?>
							<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
						</div>
						<h3 class="post-title"><a href="blog-post.html"><?php the_title(); ?></a></h3>
					</div>
				</div>
		<?php
			endwhile;
		?>
	</div>
	<!-- /post widget -->
	
	<!-- ad -->
	<div class="aside-widget text-center">
		<a href="#" style="display: inline-block;margin: auto;">
			<img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/img/ad-1.jpg" alt="">
		</a>
	</div>
	<!-- /ad -->

	<!-- catagories -->
	<div class="aside-widget">
		<div class="section-title">
			<h2><?php echo __('Loại bài viết','wp'); ?></h2>
		</div>
		<div class="category-widget">
			<ul>
				<?php
				$categories = get_categories( array(
		            'orderby' => 'id',
		            'parent'  => 0,
		        ) );
		        foreach ( $categories as $cd ) { 
				?>
					<li>
						<a href="<?php echo get_category_link( $cd->term_id ); ?>" class="cat-<?php echo $cd->cat_name ?>">
							<?php echo $cd->cat_name; ?>
							<span>
								<?php
									$term = get_term( $cd->term_id, 'category' );
									echo $term->count;
								?>
							</span>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<!-- /catagories -->
	
	<!-- tags -->
	<div class="aside-widget">
		<div class="tags-widget">
			<ul>
				<?php 
					$tags = get_tags();
					foreach ( $tags as $tag ) { 
				?>
					<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo $tag->name; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<!-- /tags -->
</div>