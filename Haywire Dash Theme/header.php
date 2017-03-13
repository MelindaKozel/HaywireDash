<!DOCTYPE html>
<html lang="en">
<head>
    <title>Haywire Dash - Home</title>
    <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>

    <!-- =============== Navigation ================= -->

    <header id="top"> 
        <div class="container">
            <div class="shifter">
                <div id="logo">
                    <a href="<?php bloginfo('url')?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/HeaderLogo.png" alt="Haywire Dash Logo" /></a>
                </div>
                <nav>
                <ul><?php wp_nav_menu( array( 'Header Menu' => 'header-menu' ) ); ?></ul>
                </nav>
                

                <nav id="hamburger" ><!-- <img src="images/hamburger-menu-icon-01.png" alt="Hamburger Menu"> -->
                    <a href="#" id="hamburgerlink" aria-label="Open the navigational menu">
                        <div class="burger-bar burger-top" role="presentation"></div>   
                        <div class="burger-bar burger-middle" role="presentation"></div>   
                        <div class="burger-bar burger-bottom" role="presentation"></div>   
                    </a>
                </nav>

                <!--Main nav ends; mobile nav begins -->

                <nav id="mobilemenu">
                    <div class="container">
                        <ul>
                            <?php wp_nav_menu( array( 'Mobile Menu' => 'mobile-menu' ) ); ?>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

    </header>