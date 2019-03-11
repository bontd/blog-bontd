<?php
    /*
      Template Name: Profile
    */
    get_header();
    global $tp_options;
?>
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/linears-icon/style.css" rel="stylesheet">

<!-- Extra plugin css -->
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/animate-css/animate.css" rel="stylesheet">

<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/style.css" rel="stylesheet">
<link href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/default.css" title="default">
<link rel="alternate stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/orange.css" title="orange">
<link rel="alternate stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/pink.css" title="pink">
<link rel="alternate stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/violet.css" title="violet">
<link rel="alternate stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/blue.css" title="blue">
<link rel="alternate stylesheet" href="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/css/colors/past.css" title="past">
<!--================Total container Area =================-->
<div class="container main_container">
    <div class="content_inner_bg row m0">
        <section class="about_person_area pad" id="about">
            <div class="row">
                <div class="col-md-5">
                    <div class="person_img text-center">
                        <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/img/avatar.jpg" alt="">
                        <a class="download_btn" href="#"><span>Download Resume</span></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row person_details">
                        <h3>Hi I'm <span><?php echo $tp_options['name-profile'] ?></span></h3>
                        <h4><?php echo $tp_options['position-profile'] ?></h4>
                        <p><?php echo $tp_options['description-profile'] ?></p>
                        <div class="person_information">
                            <ul>
                                <li><a href="#">Age</a></li>
                                <li><a href="#">Nationality</a></li>
                                <li><a href="#">Address</a></li>
                                <li><a href="#">Phone</a></li>
                                <li><a href="#">Skype</a></li>
                                <li><a href="#">Email</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><?php echo $tp_options['age-profile'] ?></a></li>
                                <li><a href="#"><?php echo $tp_options['nationality-profile'] ?></a></li>
                                <li><a href="#"><?php echo $tp_options['address-profile'] ?></a></li>
                                <li><a href="#"><?php echo $tp_options['phone-profile'] ?></a></li>
                                <li><a href="#"><?php echo $tp_options['skype-profile'] ?></a></li>
                                <li><a href="#"><?php echo $tp_options['email-profile'] ?></a></li>
                                <li><a href="<?php echo $tp_options['website-profile'] ?>"><?php echo $tp_options['website-profile'] ?></a></li>
                            </ul>
                        </div>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="myskill_area pad" id="skill">
            <div class="main_title">
                <h2>My Skill</h2>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInUp animated">
                    <div class="skill_text">
                        <h4><?php echo $tp_options['title-skills-profile'] ?></h4>
                        <p><?php echo $tp_options['descript-skills-profile'] ?></p>
                    </div>
                    <div class="skill_item_inner">
                        <?php for($i=1;$i<5;$i++) { ?>
                            <div class="single_skill">
                                <h4><?php echo $tp_options['title-skill-'.$i] ?></h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $tp_options['value-skill-'.$i] ?>" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress_parcent"><span class="counter"><?php echo $tp_options['value-skill-'.$i] ?></span>%</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated">
                    <div class="skill_text">
                        <!-- <h4><?php echo $tp_options['title-skills-profile'] ?></h4>
                        <p><?php echo $tp_options['descript-skills-profile'] ?></p> -->
                        <h4>Web Design Skills</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <div class="skill_item_inner">
                        <?php for($i=5;$i<9;$i++) { ?>
                            <div class="single_skill">
                                <h4><?php echo $tp_options['title-skill-'.$i] ?></h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $tp_options['value-skill-'.$i] ?>" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress_parcent"><span class="counter"><?php echo $tp_options['value-skill-'.$i] ?></span>%</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="education_area pad" id="education">
            <div class="main_title">
                <h2>2012 - NOW</h2>
            </div>
            <div class="education_inner_area">
                <?php echo $tp_options['education'] ?>
            </div>
        </section>
        <section class="service_area" id="service">
            <div class="main_title">
                <h2>SERVICES</h2>
            </div>
            <div class="service_inner row">
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-wordpress" aria-hidden="true"></i>
                        <a href="#"><h4>Wordpress Development</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-paint-brush" aria-hidden="true"></i>
                        <a href="#"><h4>Creative Design</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <a href="#"><h4>Mobile Apps Development</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-maxcdn" aria-hidden="true"></i>
                        <a href="#"><h4>Social Media Marketing</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                        <a href="#"><h4>Professional Photography</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_item wow fadeIn animated">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <a href="#"><h4>Website Development</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits, sed do mod, tempor ets incididunt ut labore et dolore magna aliqua. Ut enim adtiesm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Portfolio</h2>
            </div>
            <div class="porfolio_menu">
                <ul class="causes_filter">
                    <li class="active" data-filter="*"><a href="">All</a></li>
                    <li data-filter=".photo"><a href="">Photography</a></li>
                    <li data-filter=".design"><a href="">Design</a></li>
                    <li data-filter=".marketing"><a href="">Marketing</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="portfolio_list_inner">
                    <div class="col-md-4 photo marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-1.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 design">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-2.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 photo marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-3.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 design marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-4.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 photo">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-5.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 marketing">
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/portfolio/portfolio-6.png" alt="">
                            </div>
                            <div class="portfolio_title">
                                <a href="#"><h4>Dreams visualization</h4></a>
                                <h5>Photography</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="news_area pad" id="news">
            <div class="main_title">
                <h2>News</h2>
            </div>
            <div class="news_inner_area">
                <div class="row">
                    <div class="col-md-4">
                        <div class="twitter_area wow fadeInLeft animated">
                            <div class="w_title">
                                <h3><i class="fa fa-twitter"></i>Twitter</h3>
                            </div>
                            <ul>
                                <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                                <li><a href="#">@themexart:</a> Lorem ipsum dolors sit amets consectetur adipicing elit sed do eiusmod tempor incididunt ut labore.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_slider_area wow fadeInUp animated">
                            <div class="w_title">
                                <h3>Blog</h3>
                            </div>
                            <div class="blog_slider_inner">
                                <div class="item">
                                    <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/blog/blog-1.jpg" alt="">
                                    <a href="#"><h3>The Importance of User Experience</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                </div>
                                <div class="item">
                                    <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/blog/blog-2.jpg" alt="">
                                    <a href="#"><h3>The Importance of User Experience</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                </div>
                                <div class="item">
                                    <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/blog/blog-3.jpg" alt="">
                                    <a href="#"><h3>The Importance of User Experience</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <h5>Posted by <a href="http://rocky.obaidul.com">Rocky</a> at 04 Feb, 2017</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="instagram_area wow fadeInRight animated">
                            <div class="w_title">
                                <h3><i class="fa fa-instagram"></i>Instagram</h3>
                            </div>
                            <ul>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-6.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-7.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-8.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/img/instagram/instagram-9.jpg" alt=""></a></li>
                            </ul>
                            <a class="follow_btn" href="#"><i class="fa fa-instagram"></i> Follow on Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="contact_area pad" id="contact">
            <div class="main_title">
                <h2>Contact Us</h2>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="left_contact_details wow fadeInUp animated">
                        <div class="contact_title">
                            <h3>Contact Info</h3>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the et majori have suffered alteration in some form, by injected humour, Domised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4>Address</h4>
                                <p>Freedom Way, Jersey City, NJ 07305, USA</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4>Skype</h4>
                                <p>sumon.backpiper</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <h4>Email</h4>
                                <p>backpiper.com@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_from_area wow fadeInUp animated">
                        <div class="contact_title">
                            <h3>Send Message</h3>
                        </div>
                        <div class="row">
                            <form action="contact_process.php" method="post" id="contactForm">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="First Name*">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="last" id="last" placeholder="Last Name*">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" rows="1" id="message" name="message" placeholder="Write Message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-default contact_btn" type="submit"><span>Send Massage</span></button>
                                </div>
                            </form>
                            <div id="success">
                                <p>Your text message sent successfully!</p>
                            </div>
                            <div id="error">
                                <p>Sorry! Message not sent. Something went wrong!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--================End Total container Area =================-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/counter-up/waypoints.min.js"></script>
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/counter-up/jquery.counterup.min.js"></script>
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/vendors/animate-css/wow.min.js"></script>

<script src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/profile/js/theme.js"></script>
<?php get_footer(); ?>