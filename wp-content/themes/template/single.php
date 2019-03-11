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
							$categories_singer = get_the_category();
	    					$category_id = $categories_singer[0]->term_id;
	    					$category_name = $categories_singer[0]->name;
	    					// echo '<pre>';
	    					// echo print_r($categories_singer);die;
							$category_detail=get_the_category(get_the_ID());
							foreach($category_detail as $cd){
								$name = $cd->cat_name;
								$link = get_category_link( $cd->term_id );
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
			<div class="col-md-9">
				<div class="section-row sticky-container">
					<div class="main-post">
						<?php the_content(); ?>
					</div>
					<div class="post-shares sticky-shares">
						<a href="https://www.facebook.com/sharer/sharer.php?u=#<?php echo esc_url( get_permalink() ); ?>" target="_blank" class="share-facebook">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank" class="share-twitter">
							<i class="fa fa-twitter"></i>
						</a>
						<!-- <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a> -->
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
						<div class="media" style="display: flex;">
							<div class="media-left" style="display: inline-block;">
								<div class="media-object-figure">
									<?php echo get_avatar( get_the_author_meta('user_email')); ?>
								</div>
							</div>
							<div class="media-body" style="flex: 1">
								<div class="media-heading">
									<h3><?php the_author_nickname(); ?></h3>
								</div>
								<p>
									<?php
										$description = get_the_author_description();
										echo str_replace("/","<br>",$description);
									?>
								</p>
								<ul class="author-social">
									<?php if($tp_options['facebook']){?>
			                            <li><a href="<?php echo $tp_options['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			                        <?php } ?>
			                        <?php if($tp_options['twitter']){?>
			                            <li><a href="<?php echo $tp_options['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			                        <?php } ?>
			                        <?php if($tp_options['google']){?>
			                            <li><a href="<?php echo $tp_options['google'] ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			                        <?php } ?>
			                        <?php if($tp_options['pinterest']){?>
			                            <li><a href="<?php echo $tp_options['pinterest'] ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
			                        <?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /author -->

				<!-- comments -->
				<div class="section-row">
					<div class="post-comments">
						<div class="fb-comments" xid="<?php the_ID(); ?> data-width="100%" data-numposts="10"></div>
					</div>
				</div>
				<!-- /comments -->
			</div>
			<!-- /Post content -->

			<!-- aside -->
			<div class="col-md-3">
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
						<h2><?php echo __('Bài viết cùng tags', 'wp'); ?></h2>
					</div>
					
					<?php
				        $tags = wp_get_post_tags(get_the_ID());
				        if ($tags) 
				        {
				            $tag_ids = array();
				            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
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
													<?php echo wp_trim_words(get_the_title(),10); ?>
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
						<h2><?php echo __('Bài viết cùng thể loại', 'wp'); ?></h2>
					</div>
					<?php
						$args=array(
							'cat' => $category_id,
							'post__not_in' => array(get_the_ID()),
							'showposts'=>2, // Số bài viết bạn muốn hiển thị.
							'caller_get_posts'=>1
						);
						$my_query = new wp_query($args);
						if( $my_query->have_posts() ) { while ($my_query->have_posts()){ $my_query->the_post();?>
								<div class="post post-thumb">
									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php echo $category_name; ?>" href="<?php echo get_category_link( $category_id ); ?> ">
												<?php echo $category_name; ?>
											</a>
											<span class="post-date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
										</div>
										<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php
							}
						}
					?>
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