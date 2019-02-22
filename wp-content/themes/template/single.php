<?php
  /*
   Template Name: list category
   */
   remove_filter ('the_content', 'wpautop');
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<?php wpb_set_post_views(get_the_ID()); wpb_get_post_views(get_the_ID());?>
	<!-- Page Header -->
	<div id="post-header" class="page-header">
		<div class="background-img" style="background-image: url('<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/post-page.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="post-meta">
						<?php
							$category_detail=get_the_category(get_the_ID());
							foreach($category_detail as $cd){
						?>
							<a class="post-category cat-<?php echo $cd->cat_name; ?>" href="<?php echo get_category_link( $cd->term_id ); ?> ">
								<?php echo $cd->cat_name; ?>
							</a>
						<?php } ?>
						<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
					</div>
					<h1><?php the_title();?></h1>
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
			<!-- Post content -->
			<div class="col-md-8">
				<div class="section-row sticky-container">
					<div class="main-post">
						<?php the_content(); ?>
					</div>
					<div class="post-shares sticky-shares">
						<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a>
					</div>
				</div>

				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->
				
				<!-- author -->
				<div class="section-row">
					<div class="post-author">
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/author.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h3>John Doe</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /author -->

				<!-- comments -->
				<div class="section-row">
					<div class="section-title">
						<h2>3 Comments</h2>
					</div>

					<div class="post-comments">
						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>John Doe</h4>
									<span class="time">March 27, 2018 at 8:00 am</span>
									<a href="#" class="reply">Reply</a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>John Doe</h4>
											<span class="time">March 27, 2018 at 8:00 am</span>
											<a href="#" class="reply">Reply</a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<!-- /comment -->
							</div>
						</div>
						<!-- /comment -->

						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>John Doe</h4>
									<span class="time">March 27, 2018 at 8:00 am</span>
									<a href="#" class="reply">Reply</a>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<!-- /comment -->
					</div>
				</div>
				<!-- /comments -->

				<!-- reply -->
				<div class="section-row">
					<div class="section-title">
						<h2>Leave a reply</h2>
						<p>your email address will not be published. required fields are marked *</p>
					</div>
					<form class="post-reply">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<span>Name *</span>
									<input class="input" type="text" name="name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Email *</span>
									<input class="input" type="email" name="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Website</span>
									<input class="input" type="text" name="website">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="input" name="message" placeholder="Message"></textarea>
								</div>
								<button class="primary-button">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /reply -->
			</div>
			<!-- /Post content -->

			<!-- aside -->
			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->

				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Most Read</h2>
					</div>
					
					<?php
				        $tags = wp_get_post_tags(get_the_ID());
				        if ($tags) 
				        {
				            $tag_ids = array();
				            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							// lấy danh sách các tag liên quan
				            $args=array(
				            'tag__in' => $tag_ids,
				            'post__not_in' => array(get_the_ID()),
				            'showposts'=>4,
				            'caller_get_posts'=>1
				            );
				            $my_query = new wp_query($args);
				            if( $my_query->have_posts() ) 
				            {
				                while ($my_query->have_posts()) 
				                {
				                    $my_query->the_post();
				                    ?>
				                    <div class="post post-widget">
										<a class="post-img" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
											<?php echo the_post_thumbnail();?>
										</a>
										<div class="post-body">
											<h3 class="post-title">
												<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
													<?php the_title(); ?>
												</a>
											</h3>
										</div>
									</div>
				                    <?php
				                }
				            }
				        }
				    ?>
				</div>
				<!-- /post widget -->

				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Featured Posts</h2>
					</div>
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/post-2.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-3" href="#">Jquery</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
						</div>
					</div>

					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/post-1.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href="#">JavaScript</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
						</div>
					</div>
				</div>
				<!-- /post widget -->
				
				<!-- catagories -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Catagories</h2>
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
				
				<!-- archive -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Archive</h2>
					</div>
					<div class="archive-widget">
						<ul>
							<li><a href="#">January 2018</a></li>
							<li><a href="#">Febuary 2018</a></li>
							<li><a href="#">March 2018</a></li>
						</ul>
					</div>
				</div>
				<!-- /archive -->
			</div>
			<!-- /aside -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<?php endwhile ?>
<?php else: ?>
	<?php get_template_part('content', 'none'); ?>
<?php endif; ?>
<?php get_footer(); ?>