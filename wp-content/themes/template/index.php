<?php
	/*
	  Template Name: home
	*/
    get_header();
?>
</header>
<!-- /Header -->
<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row new-post">	
			<?php get_template_part('templates/new-post'); ?>
		</div>
		<!-- /row -->
		<!-- row -->
		<div class="row d-flex flex-wrap">
			<div class="col-md-12">
				<div class="section-title">
					<h2><?php echo __('Bài viết gần đây','wp'); ?></h2>
				</div>
			</div>
			<?php get_template_part('templates/recent-post'); ?>
		</div>
		<!-- /row -->
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row d-flex flex-wrap">
					<?php get_template_part('templates/recent-post-offset'); ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<!-- section -->
<div class="section section-grey">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2><?php echo __('Các bài viết khác','wp'); ?></h2>
				</div>
			</div>
			<?php get_template_part('templates/featured-post'); ?>
			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><?php echo __('Đọc nhiều nhất','wp'); ?></h2>
						</div>
					</div>
					<?php get_template_part('templates/most-read'); ?>
				</div>
			</div>

			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<?php get_footer(); ?>
