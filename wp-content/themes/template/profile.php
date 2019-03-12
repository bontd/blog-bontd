<?php
    /*
      Template Name: Profile
    */
    get_header();
    global $tp_options;
    // echo '<pre>';
    // echo print_r($tp_options);die;
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
                        <h4><?php echo $tp_options['title-skills-design-profile'] ?></h4>
                        <p><?php echo $tp_options['descript-skills-design-profile'] ?></p>
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
        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Portfolio</h2>
            </div>
            <div class="porfolio_menu">
                <ul class="causes_filter">
                    <li class="active" data-filter="*"><a href="">All</a></li>
                    <li data-filter=".html-css"><a href="">HTML & CSS</a></li>
                    <li data-filter=".wordpress"><a href="">Wordpress</a></li>
                    <li data-filter=".webview"><a href="">Webview</a></li>
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