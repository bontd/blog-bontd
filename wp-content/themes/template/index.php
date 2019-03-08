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
		<div class="row">	
			<?php get_template_part('templates/new-post'); ?>
		</div>
		<!-- /row -->
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2><?php echo __('Recent Posts','wp'); ?></h2>
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
					<h2><?php echo __('Featured Posts','wp'); ?></h2>
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
							<h2><?php echo __('Most Read','wp'); ?></h2>
						</div>
					</div>
					<?php get_template_part('templates/most-read'); ?>
					
					<!-- <div class="col-md-12">
						<div class="section-row">
							<button class="primary-button center-block js-load-more">Load More</button>
						</div>
					</div> -->
				</div>
			</div>

			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="wp-content/themes/template/assets/img/ad-1.jpg" alt="">
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
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->
<!-- <script>
	$(document).ready(function(){
		$('.js-load-more').click(function(){
			var id = $(this).attr('id');
	        var url = "<?php echo esc_url(home_url('/'));?>";
	        console.log(url);
	        $.ajax({
	            url: url,
	            type: "post",
	            dataType: "html",
	            data: {id: id},
	            beforeSend: function () {
	                // $(placeholder).addClass('loading');
	            },
	            success: function (response) {
	                console.log(response);
	            },
	            error: function (jqXHR, textStatus, errorThrown) {
	                
	            }
	        });
		});
	})
</script> -->
<?php get_footer(); ?>
