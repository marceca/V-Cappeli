<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="/wp-content/themes/V-Capelli-Salon/assets/Scripts/Javascript/main.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/V-Capelli-Salon/dist/css/main.css" />
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed wrapper">
    <header id="header" role="banner">
    <section id="branding" class="header-wrapper">
        <img class="logo" src="/wp-content/themes/V-Capelli-Salon/assets/images/front-page/v-capelli-logo.png">
        <nav id="menu" role="navigation" class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </section>
    </header>
    <div id="container">