<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="home-page-loader-wrapper">
    <div class="loader">
        <img src="http://3.25.225.192/wp-content/uploads/2024/07/JCUBSB-logo.png" alt="Logo">
    </div>
</div>

<div class="content-wrapper">
    <header class="site-header">
        <div class="container">
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo-image">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="http://3.25.225.192/wp-content/uploads/2024/07/JCUBSB-logo.png" alt="header-logo">
                </a>
            </div>
            <div class="logo">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else { ?>
                    <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                <?php } ?>
            </div>
        </div>
    </header>
        
<nav class="fullscreen-menu" id="fullscreen-menu">
    <span class="close-menu" id="close-menu">&times;</span>
	<!-- logo image  -->
    <div class="nav-logo-container">
        <img src="http://3.25.225.192/wp-content/uploads/2024/07/JCUBSB-logo.png" alt="Navigation Logo" class="nav-logo">
    </div>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'main-1',
            'menu_class' => '',
            'container' => 'ul',
        ));
    ?>
</nav>



    <main class="site-main">
