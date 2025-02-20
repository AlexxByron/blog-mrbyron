<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Blog_Mrbyron
 */

get_header();
?>

<!--================= Back offcanvas Start Here =================-->
<div class="back-offcanvas"></div>
<div class="back-canvas">
    <div class="close-btn">
        <a id="nav-close" class="nav-close">
            <div class="back-close">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>
    <div class="offback-logo">
        <a href="<?php echo home_url(); ?>" class="logo-text">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
        </a>
    </div>
    <div class="offcanvas-text">
        <p>Education every new parents knows the feeling nothing more than for everyone to get at some sleep. But at least you’ve got Google. Start building your first prototype today!</p>
    </div>

    <div class="back-title back-small-title">
        <h2>Get in Touch</h2>
    </div>
    <div class="canvas-contact">
        <div class="address-area">
            <div class="address-list">
                <div class="info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                </div>
                <div class="info-content">
                    <h4 class="title">Address</h4>
                    <em>06 Mymen KR. New York City</em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div class="info-content">
                    <h4 class="title">Email</h4>
                    <em><a href="mailto:backtheme@gmail.com">backtheme@gmail.com</a></em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                        <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <div class="info-content">
                    <h4 class="title">Phone</h4>
                    <em>+02596 5874 59857</em>
                </div>
            </div>
        </div>
        <ul class="social-links">                                    
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        </ul>
    </div>
</div>
<!--================= Back offcanvas End Here=================-->

<!--================= Header Section Start Here =================-->
<header id="back-header" class="back-header">
    <!--================= Topbar Section Start Here =================-->
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
    <!--================= Topbar Section End Here =================-->
    <div class="menu-part">
        <div class="container">
            <!--================= Back Menu Start Here =================-->
            <div class="back-main-menu">
                <nav>
                    <!--================= Menu Toggle btn =================-->
                    <div class="menu-toggle">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>" class="logo-text">
                                <img class="back-logo-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
                                <img class="back-logo-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="searchbar-part back-search-mobile"> 
                            <ul>
                                <li class="back-dark-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light1">
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <line x1="12" y1="1" x2="12" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="23"></line>
                                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                        <line x1="1" y1="12" x2="3" y2="12"></line>
                                        <line x1="21" y1="12" x2="23" y2="12"></line>
                                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark1">
                                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                    </svg>
                                </li>
                                <li class="back_search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </li>
                                <li class="back-sign"><a href="<?php echo wp_login_url(); ?>">Sign In</a></li>
                                <li id="nav-expanders" class="nav-expander bar">
                                    <span class="back-hum1"></span>
                                    <span class="back-hum2"></span>
                                    <span class="back-hum3"></span>
                                </li>
                            </ul>                                 
                            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                                <input type="search" class="form-input" placeholder="Search Here" value="<?php echo get_search_query(); ?>" name="s">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--================= Menu Structure =================--> 
                    <div class="back-inner-menus">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'back-menus back-sub-shadow',
                            'container'      => false,
                        ) );
                        ?>
                        <div class="searchbar-part back-search-desktop"> 
                            <ul>
                                <li class="back-dark-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light">
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <line x1="12" y1="1" x2="12" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="23"></line>
                                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                        <line x1="1" y1="12" x2="3" y2="12"></line>
                                        <line x1="21" y1="12" x2="23" y2="12"></line>
                                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark">
                                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                    </svg>
                                </li>
                                <li class="back_search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </li>
                                <li class="back-sign"><a href="<?php echo wp_login_url(); ?>">Sign In</a></li>
                                <li id="nav-expander" class="nav-expander bar">
                                    <span class="back-hum1"></span>
                                    <span class="back-hum2"></span>
                                    <span class="back-hum3"></span>
                                </li>
                            </ul>                                  
                            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                                <input type="search" class="form-input" placeholder="Search Here" value="<?php echo get_search_query(); ?>" name="s">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>                                
                    </div>                            
                </nav>
            </div>
            <!--=================  Back Menu End Here  =================-->
        </div>
    </div>
</header>
<!--================= Header Section End Here =================-->

<!--================= Back Wrapper Start Here =================-->
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title"><?php echo ( is_home() ? 'Blog' : get_the_archive_title() ); ?></h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li><?php echo ( is_home() ? 'Blog' : get_the_archive_title() ); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <!--================= Blog Section Start Here =================-->
    <div class="back__blog__area back-blog-page pt-70 pb-60">
        <div class="container">
            <div class="row">
                <!-- Main Blog Posts -->
                <div class="col-lg-8">
                    <div class="blog-grid">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <div class="single-blog">
                                <div class="inner-blog">
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php the_title(); ?>">
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="top-part">
                                            <li>
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                                <?php the_author(); ?>
                                            </li>
                                            <li class="date-part">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg>
                                                <?php echo get_the_date(); ?>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                                </svg>
                                                <?php echo get_comments_number(); ?> <?php _e( 'Comments', 'textdomain' ); ?>
                                            </li>
                                        </ul>

                                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="blog-desc"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="back-btn-border"><?php _e( 'Read More', 'textdomain' ); ?> <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
                        <?php endif; ?>
                    </div> 
                    <!--================= Pagination Section Start Here =================-->
                    <ul class="back-pagination">
                        <li><?php previous_posts_link( __( 'Previous', 'textdomain' ) ); ?></li>
                        <li><?php next_posts_link( __( 'Next', 'textdomain' ) ); ?></li>
                    </ul>
                    <!--================= Pagination Section End Here =================-->  
                </div>
                <!-- Sidebar Section -->
                <div class="col-lg-4">
                    <div class="back-sidebar pl-30 md-pl-0 back-hero-area back-latest-posts back-whats-posts">
                        <?php get_search_form(); ?>

                        <div class="back-title back-small-title">
                            <h2>Get in Touch</h2>
                        </div>

                        <ul class="social-area">
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <span>Followers <em>750</em></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <span>Fans <em>1236</em></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <span>Likes <em>523</em></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                    <span>Comments <em>790</em></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <span>Followers <em>1025</em></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <span>Subscribers <em>590M</em></span>
                                </div>
                            </li>
                        </ul>

                        <div class="back-title back-small-title pt-30">
                            <h2>Latest News</h2>
                        </div>
                        <ul class="back-hero-bottom">
                            <li>
                                <div class="image-areas">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dont/1.jpg" alt="image"></a>                                
                                </div>
                                <div class="back-btm-content">
                                    <a href="#" class="back-cates">Politics</a>
                                    <h3><a href="#">Time can never stop for anyone</a></h3> 
                                    <ul>
                                        <li class="back-date">by <a href="#">Jon Deo</a></li>                                                    
                                    </ul>                                        
                                </div> 
                            </li>
                            <li>
                                <div class="image-areas">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dont/2.jpg" alt="image"></a>
                                </div> 
                                <div class="back-btm-content">
                                    <a href="#" class="back-cates">Music</a>
                                    <h3><a href="#">Everyone loves to listen to music</a></h3> 
                                    <ul>
                                        <li class="back-date">by <a href="#">Jon Deo</a></li>                                                    
                                    </ul>                                        
                                </div>
                            </li>
                            <li>
                                <div class="image-areas">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dont/3.jpg" alt="image"></a>
                                </div> 
                                <div class="back-btm-content">
                                    <a href="#" class="back-cates">Lifestyle</a>
                                    <h3><a href="#">10 easy habits to make your life</a></h3> 
                                    <ul>
                                        <li class="back-date">by <a href="#">Jon Deo</a></li>                                                    
                                    </ul>                                        
                                </div>
                            </li>
                            <li>
                                <div class="image-areas">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dont/4.jpg" alt="image"></a>                              
                                </div>
                                <div class="back-btm-content">
                                    <a href="#" class="back-cates">Travel</a>
                                    <h3><a href="#">World trending best 10 website</a></h3> 
                                    <ul>
                                        <li class="back-date">by <a href="#">Jon Deo</a></li>                                                    
                                    </ul>                                        
                                </div> 
                            </li>
                        </ul> 
                        <div class="back-add pt-15">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats/add.jpg" alt="add-image">
                        </div>

                        <div class="back-title back-small-title pt-50">
                            <h2>Follow Us</h2>                                
                        </div>    
                        <ul class="back-instragram">
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/1.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/2.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/3.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/4.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/5.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instragram/6.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        </ul> 

                        <div class="back-title back-small-title pt-50">
                            <h2>Comments</h2>
                        </div>
                        <div class="widget back-recent-comments">
                            <ul class="recent-comments">
                                <li>
                                    <span class="post-images"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/1.jpg" alt="post"></span>
                                    <div class="titles">                                                    
                                        <h4>John Doe</h4>
                                        <span>14 January, 2022</span>
                                        <p>Having no content in post should have adverse..</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="post-images"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/2.jpg" alt="post"></span>
                                    <div class="titles">                                                    
                                        <h4>Chauffina Carr</h4>
                                        <span>10 April, 2022</span>
                                        <p>We use these tests all time! Killer stuff!</p>
                                    </div>                                               
                                </li>
                                <li>
                                    <span class="post-images"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/author/3.jpg" alt="post"></span>
                                    <div class="titles">
                                        <h4>Jim Séchen</h4>
                                        <span>16 July, 2022</span>
                                        <p>Thanks for all the comments, everyone!</p>
                                    </div>                                                
                                </li>                                            
                            </ul>
                        </div>  

                        <div class="back-title back-small-title pt-50">
                            <h2>Tags</h2>
                        </div>
                        <div class="widget widget-tags">
                            <ul class="tags">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">SEO Marketing</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Solutions</a></li>
                                <li><a href="#">UX</a></li>
                                <li><a href="#">Case Study</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Insights</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Blog Section End Here =================-->
</div>        
<!--================= Back Wrapper End Here =================-->

<!--================= Footer Section Start Here =================-->
<footer id="back-footer" class="back-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-1">
                        <div class="footer-logo white">
                            <a href="<?php echo home_url(); ?>" class="logo-text">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/light-logo.png" alt="logo">
                            </a>
                        </div>
                        <h5 class="footer-subtitle">We have lots of courses and programs from the main market experts.</h5>
                        <h6 class="back-follow-us">Follow us</h6>
                        <ul class="social-links">                                    
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>                                
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">Tags Cloud</h3>
                        <div class="footer-tag">
                            <ul>
                                <li><a href="<?php echo home_url('/about'); ?>">Technology</a></li>
                                <li><a href="<?php echo home_url('/coureses-grid'); ?>">Sports</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="<?php echo home_url('/profile'); ?>">Health</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Education</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Business</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Lifestyle</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Entertainment</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Themes</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>">Plugins</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">Quick links</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Browse Library</a></li>
                                <li><a href="#">TV News</a></li>
                                <li><a href="#">Music News</a></li>
                                <li><a href="<?php echo home_url('/blog'); ?>">News & Blog</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Advertise</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget-3">
                        <h3 class="footer-title">Newsletter</h3>
                        <h5 class="footer-subtitle">Subscribe to our mailing list to <br>get the new updates!</h5>
                        <form class="back-newsletter" action="<?php echo home_url('/'); ?>" method="post">
                            <input type="email" placeholder="Enter Your Email" name="newsletter_email">
                            <button type="submit">Subscribe</button>
                        </form>                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">  
        <div class="container">                  
            <div class="back-copy-left">@ 2022 All Copyright Reserved. Developed by <a href="#">BackTheme</a></div>
            <div class="back-copy-right">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php
get_sidebar();
get_footer();
?>
