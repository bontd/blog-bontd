<!-- Footer -->
<footer id="footer">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-5">
				<div class="footer-widget">
					<div class="footer-logo">
						<a href="index.html" class="logo"><img src="wp-content/themes/template/assets/img/logo.png" alt=""></a>
					</div>
					<ul class="footer-nav">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Advertisement</a></li>
					</ul>
					<div class="footer-copyright">
						<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="row">
					<div class="col-md-6">
						<div class="footer-widget">
							<h3 class="footer-title">About Us</h3>
							<ul class="footer-links">
								<li><a href="about.html">About Us</a></li>
								<li><a href="#">Join Us</a></li>
								<li><a href="contact.html">Contacts</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-widget">
							<h3 class="footer-title">Catagories</h3>
							<ul class="footer-links">
								<li><a href="category.html">Web Design</a></li>
								<li><a href="category.html">JavaScript</a></li>
								<li><a href="category.html">Css</a></li>
								<li><a href="category.html">Jquery</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title">Join our Newsletter</h3>
					<div class="footer-newsletter">
						<form>
							<input class="input" type="email" name="newsletter" placeholder="Enter your email">
							<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
						</form>
					</div>
					<ul class="footer-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</footer>
<!-- /Footer -->
<?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		// Fixed Nav
		var lastScrollTop = 0;
		$(window).on('scroll', function() {
			var wScroll = $(this).scrollTop();
			if ( wScroll > $('#nav').height() ) {
				if ( wScroll < lastScrollTop ) {
					$('#nav-fixed').removeClass('slide-up').addClass('slide-down');
				} else {
					$('#nav-fixed').removeClass('slide-down').addClass('slide-up');
				}
			}
			lastScrollTop = wScroll
		});

		// Aside Nav
		$(document).click(function(event) {
			if (!$(event.target).closest($('#nav-aside')).length) {
				if ( $('#nav-aside').hasClass('active') ) {
					$('#nav-aside').removeClass('active');
					$('#nav').removeClass('shadow-active');
				} else {
					if ($(event.target).closest('.aside-btn').length) {
						$('#nav-aside').addClass('active');
						$('#nav').addClass('shadow-active');
					}
				}
			}
		});

		$('.nav-aside-close').on('click', function () {
			$('#nav-aside').removeClass('active');
			$('#nav').removeClass('shadow-active');
		});
		// Search Nav
		$('.search-btn').click(function () {
			$('.search-form').addClass('active');
		});

		$('.search-close').click(function () {
			$('.search-form').removeClass('active');
		});

		// Sticky Shares
		var $shares = $('.sticky-container .sticky-shares'),
		$sharesHeight = $shares.height(),
		$sharesTop,
		$sharesCon = $('.sticky-container'),
		$sharesConTop,
		$sharesConleft,
		$sharesConHeight,
		$sharesConBottom,
		$offsetTop = 80;

		function setStickyPos () {
			if ($shares.length > 0) {
				$sharesTop = $shares.offset().top
				$sharesConTop = $sharesCon.offset().top;
				$sharesConleft = $sharesCon.offset().left;
				$sharesConHeight = $sharesCon.height();
				$sharesConBottom = $sharesConHeight + $sharesConTop;
			}
		}

		function stickyShares (wScroll) {
			if ($shares.length > 0) {
				if ( $sharesConBottom - $sharesHeight - $offsetTop < wScroll ) {
					$shares.css({ position: 'absolute', top: $sharesConHeight - $sharesHeight , left:0});
				} else if ( $sharesTop < wScroll + $offsetTop ) {
					$shares.css({ position: 'fixed', top: $offsetTop, left: $sharesConleft });
				} else {
					$shares.css({position: 'absolute', top: 0, left: 0});
				}
			}
		}

		$(window).on('scroll', function() {
			stickyShares($(this).scrollTop());
		});

		$(window).resize(function() {
			setStickyPos();
			stickyShares($(this).scrollTop());
		});

		setStickyPos();
	})
</script>
</body>
</html>
