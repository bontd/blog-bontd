<?php get_header(); ?>
<?php 
		$categories = get_the_category();
		// echo '<pre>'; print_r($categories);
		$category_id = $categories[0]->term_id;
		$category_name = $categories[0]->name;
		// echo $category_id;
	?>
 <!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<ul class="page-header-breadcrumb">
						<li><a href="<?php echo esc_url(home_url('/'));?>">Home</a></li>
						<li><?php echo $category_name; ?></li>
					</ul>
					<h1><?php echo $category_name; ?></h1>
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
					<?php
						$get_post = new WP_Query(array(
						 'post_type'=>'post',
						 'post_status'=>'publish',
						 'order' => 'DESC',
						 'cat' => $category_id,
						 'posts_per_page'=> 1));
					?>
					<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
						<!-- post -->
						<div class="col-md-12">
							<div class="post post-thumb">
								<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-<?php echo $category_id; ?>" href="#"><?php echo $category_name; ?></a>
										<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
									</div>
									<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></h3>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php endwhile ; wp_reset_query() ;?>
					
					<?php
						$get_post = new WP_Query(array(
							'post_type'=>'post',
							'post_status'=>'publish',
							'order' => 'DESC',
							'cat' => $category_id,
							'posts_per_page'=> 2,
							'offset'	=> 1
						));
					?>
					<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?php echo $category_id; ?>" href="#"><?php echo $category_name; ?></a>
									<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
								</div>
								<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endwhile ; wp_reset_query() ;?>
					
					<div class="clearfix visible-md visible-lg"></div>
					
					<!-- ad -->
					<div class="col-md-12">
						<div class="section-row">
							<a href="#">
								<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
					</div>
					<!-- ad -->
					
					<?php
						$get_post = new WP_Query(array(
							'post_type'=>'post',
							'post_status'=>'publish',
							'order' => 'DESC',
							'cat' => $category_id,
							'posts_per_page'=> 5,
							'offset'	=> 3
						));
					?>
					<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo the_post_thumbnail();?></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?php echo $category_id; ?>" href="#"><?php echo $category_name; ?></a>
									<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
								</div>
								<h3 class="post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></h3>
								<p><?php the_excerpt();?></p>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endwhile ; wp_reset_query() ;?>
					
					<div class="col-md-12">
						<div class="section-row">
							<?php custom_pagination(); ?>
						</div>
					</div>
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