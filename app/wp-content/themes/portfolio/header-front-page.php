<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <?php  $url=portfolio_theme_option('top_bg_img');  ?>
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
    <header class="main-head main-color-bg parallax-window" data-parallax="scroll" data-image-src="<?php echo $url['url'];?>" data-z-index="1" data-position="top center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-container">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <?php  //echo portfolio_theme_option('logo_img_svg') ?>
                        </a>
                    </div>
                    <button class="toggle-mnu">
						<span class="sandwich">
							<span class="sw-topper">&nbsp;</span>
							<span class="sw-bottom">&nbsp;</span>
							<span class="sw-footer">&nbsp;</span>
						</span>
                    </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container_class' => 'top-mnu'
                    ) );
                    ?>

                </div>
            </div>
        </div>
        <div class="top-wrapper">
            <div class="top-descr">
                <div class="top-centered">
                    <div class="top-text">
                        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                        <p><?php echo get_bloginfo( 'description' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>



