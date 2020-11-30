<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
    <header class="header-nav"> 
        <nav class="header-nav__nav">
        <!-- menu -->
            <div class="menu-top">
                <div class="menu-top__logo">
                    <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="menu-top__search">
                <?php echo do_shortcode("[aws_search_form]"); ?>
                </div>

                <div class="menu-top__nav">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'header_menu'
                        ));
                        wp_nav_menu(array(
                            'theme_location' => 'header_buttom_menu'
                        ));
                    ?>
                </div>
                
                <div class="menu-top__aside">
                        <!-- ex: cart link etc -->
                        <div class="menu-top__cart">
                            <?php
                            $cart_link = new WP_Query( array( 'page_id' => 11 ) );
                            while ($cart_link->have_posts()) {
                                $cart_link->the_post();
                            ?>
                            <a href="<?= the_permalink(); ?>">
                                <div class="cart__items">
                                    <i class="fas fa-shopping-cart"></i> 
                                    <p><?= WC()->cart->get_total(); ?></p>
                                    <p><?= WC()->cart->cart_contents_count; ?></p>
                                </div>    
                            </a>
                            <?php
                            } wp_reset_postdata();
                            ?>
                        </div>
                </div>
            </div>
            <!-- burger -->
            <div class="burger-icon">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            <div class="header-nav__bg"></div>
            <div class="menu-bottom">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_buttom_menu'
                ));
                ?>
            </div>
        <!-- menu end -->
        </nav>
    </header>
    <div class="content-wrapper">
