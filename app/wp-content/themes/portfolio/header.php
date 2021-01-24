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
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="category-head">
                    <div class="category-head-body">
                        <div class="logo-container">
                            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                <?php  echo portfolio_theme_option('logo_img_svg') ?>
                            </a>
                            <ul class="logo-title-desc">
                                <li><p class="site-title"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></p></li>
                                <li><p class="desc"><?php echo get_bloginfo( 'description' ); ?></p></li>
                            </ul>
                        </div>
                        <div class="header__burger">
                            <span></span>
                        </div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'container_class' => 'top-menu-categ'
                        ) );
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="header-title">
                    
                    
                </div>
            </div>

        </div>
    </header>



