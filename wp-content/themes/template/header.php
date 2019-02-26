<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php
        global $tp_options;
    ?>
    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <?php
                        if($tp_options['logo-on'] == 1) {
                    ?>
                        <a href="<?php echo esc_url(home_url('/'));?>" class="logo">
                            <img src="<?php echo $tp_options['logo-image']['url']; ?>">
                        </a>
                    <?php } ?>
                    </div>
                    <!-- /logo -->
                    <!-- nav -->
                    <?php wp_menu('primary-menu'); ?>
                    <!-- /nav -->
                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button type="button" class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button type="button" class="search-btn"><i class="fa fa-search"></i></button>
                        <form method="get" action="<?php echo home_url( '/' );?>">
                            <div class="search-form">
                                <input type="text" class="search-input" id="s" name="s" placeholder="Enter Your Search ..." />
                                <button type="button" class="search-close"><i class="fa fa-times"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->
            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row nav-aside-menu">
                    <?php wp_menu('primary-menu'); ?>
                </div>
                <!-- /nav -->
                <!-- widget posts -->
                <div class="section-row">
                    <h3><?php echo __('Bài viết xem nhiều','wp'); ?></h3>
                    <?php
                        $get_post = new WP_Query(array(
                            'posts_per_page' => 3, 
                            'meta_key' => 'wpb_post_views_count', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC'  
                        ));
                    ?>
                    <?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
                        <div class="post post-widget">
                            <a class="post-img" href="<?php echo esc_url( get_permalink() ); ?>">
                                <?php echo the_post_thumbnail();?>
                            </a>
                            <div class="post-body">
                                <h3 class="post-title">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a>
                                </h3>
                            </div>
                        </div>
                    <?php endwhile ; wp_reset_query() ;?>
                </div>
                <!-- /widget posts -->
                <!-- social links -->
                <div class="section-row">
                    <h3><?php echo __('Follow us','wp'); ?></h3>
                    <ul class="nav-aside-social">
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
                <!-- /social links -->
                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->