<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Mrbyron
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blog-mrbyron'); ?></a>
    <header id="back-header" class="back-header">
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="toolbar-text">
                            <div class="latest-news-title">LATEST NEWS</div>
                            <div class="latest-news">
                                <div class="back-topbar-slider owl-carousel">
                                    <div>Because you deserve nothing but the truth</div>
                                    <div>Pandemic impact mental health global view</div>
                                    <div>Drunk driving law by on country and arrest</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="toolbar-content">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="back-follow">Follow Us</li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-part">
            <div class="container">
                <div class="back-main-menu">
                    <nav>
                        <div class="menu-toggle">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>" class="logo-text">
                                    <img class="back-logo-dark" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo">
                                    <img class="back-logo-light" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/light-logo.png" alt="logo">
                                </a>
                            </div>
                            <button type="button" id="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'backmenu', 'container_class' => 'back-inner-menus', 'menu_class' => 'back-menus back-sub-shadow')); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Aquí continúa el contenido de tu sitio -->
</div>
<?php wp_footer(); ?>
</body>
</html>
