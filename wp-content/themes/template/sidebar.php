<div class="col-md-4">
	<!-- post widget -->
	<div class="aside-widget">
		<div class="section-title">
			<h2>Most Read</h2>
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
				<a class="post-img" href="blog-post.html"><?php echo the_post_thumbnail();?></a>
				<div class="post-body">
					<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
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
			<h2>Featured Posts</h2>
		</div>
		<div class="post post-thumb">
			<a class="post-img" href="blog-post.html"><img src="wp-content/themes/template/assets/img/post-2.jpg" alt=""></a>
			<div class="post-body">
				<div class="post-meta">
					<a class="post-category cat-3" href="category.html">Jquery</a>
					<span class="post-date">March 27, 2018</span>
				</div>
				<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
			</div>
		</div>

		<div class="post post-thumb">
			<a class="post-img" href="blog-post.html"><img src="wp-content/themes/template/assets/img/post-1.jpg" alt=""></a>
			<div class="post-body">
				<div class="post-meta">
					<a class="post-category cat-2" href="category.html">JavaScript</a>
					<span class="post-date">March 27, 2018</span>
				</div>
				<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
			</div>
		</div>
	</div>
	<!-- /post widget -->
	
	<!-- ad -->
	<div class="aside-widget text-center">
		<a href="#" style="display: inline-block;margin: auto;">
			<img class="img-responsive" src="wp-content/themes/template/assets/img/ad-1.jpg" alt="">
		</a>
	</div>
	<!-- /ad -->
</div>