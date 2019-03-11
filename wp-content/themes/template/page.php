<?php get_header(); ?>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<?php wpb_set_post_views(get_the_ID()); wpb_get_post_views(get_the_ID());?>
	<!-- Page Header -->
	<div id="post-header" class="page-header">
		<div class="background-img" style="background-image: url('<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/post-page.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
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
						<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

							<?php get_template_part('content', get_post_format()); ?>

						<?php endwhile ?>
						<?php else: ?>
							<?php get_template_part('content', 'none'); ?>
						<?php endif; ?>
					</div>
				</div>

				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->
			</div>
			<!-- /Post content -->

			<!-- aside -->
			<?php get_sidebar(); ?>
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