<?php get_header(); ?>
 <!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<ul class="page-header-breadcrumb">
						<li><a href="<?php echo esc_url(home_url('/'));?>">Home</a></li>
						<li>
							<?php
					            if ( is_tag() ) :
					                    printf( __('%1$s','wp'), single_tag_title( '', false ) );
					            elseif ( is_category() ) :
					                    printf( __('%1$s','wp'), single_cat_title( '', false ) );
					            elseif ( is_day() ) :
					                    printf( __('%1$s','wp'), the_time('l, F j, Y') );
					            elseif ( is_month() ) :
					                    printf( __('%1$s','wp'), the_time('Y:F') );
					            elseif ( is_year() ) :
					                    printf( __('%1$s','wp'), the_time('Y') );
					            endif;
					        ?>
						</li>
					</ul>
					<h1>
						<?php
				            if ( is_tag() ) :
				                    printf( __('%1$s','wp'), single_tag_title( '', false ) );
				            elseif ( is_category() ) :
				                    printf( __('%1$s','wp'), single_cat_title( '', false ) );
				            elseif ( is_day() ) :
				                    printf( __('%1$s','wp'), the_time('l, F j, Y') );
				            elseif ( is_month() ) :
				                    printf( __('%1$s','wp'), the_time('Y:F') );
				            elseif ( is_year() ) :
				                    printf( __('%1$s','wp'), the_time('Y') );
				            endif;
				        ?>
					</h1>
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
				<div class="row" id="posts">
					<?php
						$array1 = array_slice($wp_query->posts, 0, 1);
						$array2 = array_slice($wp_query->posts, 1, 2);
						$array3 = array_slice($wp_query->posts, 3, 10);
						// $array4 = array_slice($wp_query->posts, 0, 100);
						// echo '<pre>';
						// echo print_r($array3);exit;
					?>
					<?php foreach($array1 as $value) {?>
					<!-- post -->
					<div class="col-md-12 clone">
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo get_post_permalink($value->ID); ?>"><?php echo get_the_post_thumbnail($value->ID);?></a>
							<div class="post-body">
								<div class="post-meta">
									<?php
										$category_detail=get_the_category($value->ID);
										foreach($category_detail as $cd){
									?>
										<a class="post-category cat-<?php echo $cd->cat_name ?>" href="<?php echo get_category_link( $cd->term_id ); ?> ">
											<?php echo $cd->cat_name; ?>
										</a>
									<?php } ?>
									<span class="post-date"><?php echo $value->post_date; ?></span>
								</div>
								<h3 class="post-title"><a href="<?php echo get_post_permalink($value->ID); ?>"><?php echo $value->post_title; ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>

		            <?php foreach($array2 as $value) {?>
					<!-- post -->
					<div class="col-md-6 clone">
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo get_post_permalink($value->ID); ?>"><?php echo get_the_post_thumbnail($value->ID);?></a>
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
									<span class="post-date"><?php echo $value->post_date; ?></span>
								</div>
								<h3 class="post-title"><a href="<?php echo get_post_permalink($value->ID); ?>"><?php echo $value->post_title; ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>
					
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
					<?php foreach ($array3 as $value) { ?>
						<!-- post -->
						<div class="col-md-12 clone">
							<div class="post post-row">
								<a class="post-img" href="<?php echo get_post_permalink($value->ID); ?>"><?php echo get_the_post_thumbnail($value->ID);?></a>
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
										<span class="post-date"><?php echo $value->post_date; ?></span>
									</div>
									<h3 class="post-title"><a href="<?php echo get_post_permalink($value->ID); ?>"><?php echo $value->post_title; ?></a></h3>
									<p><?php echo $value->description; ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					<?php } ?>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="section-row load_more text-center">
							<?php if ( $wp_query->max_num_pages > 1 ) : ?>
								<?php next_posts_link( 'Load More' ); ?>
								<script type="text/javascript">
									jQuery(document).ready(function(){
										jQuery('.load_more a').on('click', function(e){
											e.preventDefault();
											var link = jQuery(this).attr('href');
											jQuery('.load_more').html('<span class="loader">Loading More Posts...</span>');
											$.get(link, function(data) {
												var post = $("#posts .clone ", data);
												$('#posts').append(post);
											});
											jQuery('.load_more').load(link+' .load_more a');
										});
									});
								</script>
							<?php endif;  ?>
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