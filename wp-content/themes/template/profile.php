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
                        <?php
                            if($tp_options['avatar-on'] == 1) {
                        ?>
                            <img src="<?php echo $tp_options['avatar-image']['url']; ?>">
                        <?php }else { ?>
                            <img src="<?php echo esc_url(home_url('/'));?>wp-content/themes/template/assets/img/avatar.jpg" alt="">
                        <?php } ?>

                        <!-- <a class="download_btn" href="#"><span>Download Resume</span></a> -->
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
                            <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li> -->
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
                <!-- <?php echo $tp_options['education'] ?> -->
                <?php
                    $get_post = new WP_Query(array(
                    'post_type'=>'timeline',
                    'posts_per_page'=> 20));
                ?>
                <?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
                    <div class="education_item wow fadeInUp animated" data-line="P">
                        <h6><?php echo get_field('timeline_start'); ?>-<?php echo get_field('timeline_end'); ?></h6>
                        <a href="#"><h4><?php the_title();?></h4></a>
                        <h5><?php the_excerpt(); ?></h5>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile ; wp_reset_query() ;?>
            </div>
        </section>
        <section class="portfolio_area pad" id="portfolio">
            <div class="main_title">
                <h2>Project Detail</h2>
            </div>
            <div class="porfolio_menu">
                <ul class="causes_filter">
                    <li class="active" data-filter="*"><a href="">All</a></li>
                    <?php
                        global $wpdb;
                        $results = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM wp_postmeta WHERE meta_key LIKE "option_type"', OBJECT );
                        // echo '<pre>';
                        // echo print_r($results);die;
                        foreach ($results as $value) {
                    ?>
                        <li data-filter=".<?php echo $value->meta_value; ?>"><a href=""><?php echo $value->meta_value; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="row mb-3">
                <div class="portfolio_list_inner">
                    <?php
                        $get_post = new WP_Query(array(
                        'post_type'=>'project',
                        'order' => 'DESC',
                        'posts_per_page'=> 50));
                    ?>
                    <?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
                        <div class="col-md-4 <?php echo get_field('option_type'); ?>">
                            <div class="portfolio_item">
                                <div class="portfolio_img">
                                    <?php echo the_post_thumbnail();?>
                                </div>
                                <div class="portfolio_title">
                                    <a href="<?php echo get_field('url'); ?>" target="_blank"><h4><?php the_title();?></h4></a>
                                    <h5><?php echo get_field('option_type'); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ; wp_reset_query() ;?>
                    
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