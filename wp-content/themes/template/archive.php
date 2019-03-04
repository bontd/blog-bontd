<?php get_header(); ?>
 <!-- Page Header -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<ul class="page-header-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>JavaScript</li>
					</ul>
					<?php 
						$tags = get_tags(); 
						echo '<pre>';
    					echo print_r($tags);die;
					?>
					<h1>JavaScript</h1>
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
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs Class</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
								
					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					
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
					
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>
					</div>
					<!-- /post -->
					
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Microsoftâs TypeScript Fills A Long-standing Void In JavaScript</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs Class</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>
					</div>
					<!-- /post -->
					
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>
					</div>
					<!-- /post -->
					
					<div class="col-md-12">
						<div class="section-row">
							<button class="primary-button center-block">Load More</button>
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