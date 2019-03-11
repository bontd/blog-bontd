<?php get_header(); ?>
<!-- Page Header -->
	<div id="post-header" class="page-header">
		<div class="background-img" style="background-image: url('<?php echo esc_url(home_url('/'));?>/wp-content/themes/template/assets/img/post-page.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
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
			<div class="col-md-12">
				<div class="section-row sticky-container p-0">
					<div class="main-post">
						<?php
							_e('<h2 class="text-center">404 NOT FOUND</h2>', 'Error');
							_e('<p class="text-center">The article you were looking for was not found, but maybe try looking again!', 'Error');
						?>
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
			<!-- /aside -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<?php get_footer(); ?>