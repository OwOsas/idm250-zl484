<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            if (is_front_page()) {
                echo "Sylar Li";
            } else {
                wp_title("");
            }
            echo " | Interactive Designer"
            ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="header_sticky_container">
        <div id="header_container">
            <div id="header">
                <div id="site_logo" >
                    <?php the_custom_logo(); ?>
                    <!-- <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo_horizontal.svg"    alt="">
                    <img class="desktop" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""> -->
        </div>

                <div id="burger_menu"></div>
            </div>

            <?php wp_nav_menu(['theme_location' => 'primary_menu']); ?>

            <div class="deco desktop"></div>
        </div>
    </div>