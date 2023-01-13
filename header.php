<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Play.Learn.Code.Repeat()">
    <meta name="author" content="Marek Gacek">
    <link rel="shortcut icon" href="/wp-content/themes/gameend/assets/images/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">


    <!-- <link rel="stylesheet" href="/wp-content/themes/gameend_wp_theme/style.css">
    <link rel="stylesheet" href="/wp-content/themes/gameend_wp_theme/css/hamburger.css"> -->




    <script src="https://kit.fontawesome.com/41fdd41dda.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="nav">
        <div class="nav__container wrapper">
            <div class="navbar">
                <div class="header">
                    <h2><a href='<?php echo home_url(); ?>'>
                            <?php echo get_bloginfo('name'); ?>
                        </a></h2>

                    <img src="/wp-content/themes/gameend_wp_theme/assets/images/logo.png" alt="logo">
                </div>
                <div class="navbar__categories desktop">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                    );
                    ?>
                    </ul>
                </div>
            </div>
            <div class="social desktop">
                <a target="_blank" href="https://www.linkedin.com/in/marek-gacek" ><i class="fab fa-linkedin-in fa-fw"></i></a>
                <a target="_blank" href="https://github.com/gacmen45" ><i class="fab fa-github fa-fw"></i></a>
                <a target="_blank" href="https://codepen.io/gacmen45" ><i class="fab fa-codepen fa-fw"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCGZteRCWiQCrpBLL5m5h7-Q"><i
                        class="fa-brands fa-youtube" ></i></a>

            </div>
            <button class="hamburger hamburger--stand " type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class='sidebar active'>
                <div class="navbar__categories sidebar__categories">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                    );
                    ?>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                    <a href="#"><i class="fab fa-github fa-fw"></i></a>
                    <a href="#"><i class="fab fa-codepen fa-fw"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>

                </div>

            </div>
        </div>


    </nav>
    <!-- <main class='main wrapper'> -->