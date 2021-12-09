<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    
    

    <!-- uikit css -->
    <link rel="stylesheet" type="text/css" href="/uikit/css/uikit.min.css">
    

    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;600;900&display=swap" rel="stylesheet">

    <!-- custom css-->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="stylesheet" href="/uikit/css/components/slidenav.css">
    <link rel="stylesheet" href="/uikit/css/components/dotnav.css">
    




    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="uk-navbar">
            <div class="logo">
                <img src="<?php bloginfo('template_directory' ); ?>/assets/images/logo.png" alt="">
            </div>

            <ul class="uk-navbar-nav">
                <div class="number">
                    <p> 24 Hour Service | <b> 877-601-3473</b> </p>
                    <a href="">
                        <div class="button">
                            <p>GET A QUOTE</p>
                        </div>
                    </a>
                </div>
                <li><a  href=""><b>Products & services</b></a></li>
                <li><a href=""><b>why aaa</b></a></li>
                <li><a href=""><b>Careers</b></a></li>
                <li><a href=""><b>News</b></a></li>
                <li><a href=""><b>Portals</b></a></li>
                <li><a href=""><b>Contact us</b></a></li>
            </ul>
        </nav>
    </header>









    <!--<header>
        <div class="header">
            <div class="logo">
                <img src="<?php bloginfo('template_directory' ); ?>/assets/images/logo.png" alt="">
            </div>
                <div class="menu">
                    <div class="number">
                        <p> 24 Hour Service | <b> 877-601-3473</b> </p>
                        <a href="">
                            <div class="button">
                                <p>GET A QUOTE</p>
                            </div>
                        </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="">Products & services</a></li>
                            <li><a href="">Why aaa</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">Portals</a></li>
                            <li><a href="">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
        </div>
        
    </header>-->

    




