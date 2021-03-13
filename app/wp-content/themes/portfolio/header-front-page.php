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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php //debug(fw_get_db_settings_option('social')); ?>
<?php wp_body_open(); ?>
    <?php  $url=portfolio_theme_option('top_bg_img');  ?>
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
    <header class="main-head main-color-bg parallax-window" data-parallax="scroll" data-image-src="<?php echo $url['url'];?>" data-z-index="1" data-position="top center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-container">
                            <?php if ( portfolio_theme_option('logo_img_svg') ) : ?>
                            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                <?php  echo portfolio_theme_option('logo_img_svg') ?>                                
                            </a>
                        <?php endif; ?>
                            <ul class="logo-title-desc">
                                <li><p class="site-title"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></p></li>
                                <li><p class="desc"><?php echo get_bloginfo( 'description' ); ?></p></li>
                            </ul>
                    
                    <button class="toggle-mnu">
						<span class="sandwich">
							<span class="sw-topper">&nbsp;</span>
							<span class="sw-bottom">&nbsp;</span>
							<span class="sw-footer">&nbsp;</span>
						</span>
                    </button>
                    </div>
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
                    <div class="container-fluid">
                        <div class="top-text">
                            <h1 id="main-title" class="title"><?php //echo get_bloginfo( 'name' );
                                echo get_theme_mod('portfolio_main_tittle');
                                 ?></h1>
                            <p><?php echo get_bloginfo( 'description' ); ?></p>
                        </div>
                        <div class="main-button"><a  href="<?php echo esc_attr( esc_url( get_page_link(134) ) ) ?>" class="button" target="_blank">Contact me</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-wrap">
            <ul>
                <li><a href="<?php echo portfolio_theme_option('facebook_link'); ?>" target="_blank"><?php echo portfolio_theme_option('facebook_svg');?></a></li>
                <li><a href="<?php echo portfolio_theme_option('twitter_link'); ?>" target="_blank"><?php echo portfolio_theme_option('twitter_svg');?></a></li>
                <li><a href="<?php echo portfolio_theme_option('behance_link'); ?>" target="_blank"><?php echo portfolio_theme_option('behance_svg');?></a></li>
                <li><a href="<?php echo portfolio_theme_option('instagram_link'); ?>" target="_blank"><?php echo portfolio_theme_option('instagram_svg');?></a></li>
                <li><a href="<?php echo portfolio_theme_option('vk_link'); ?>" target="_blank"><?php echo portfolio_theme_option('vk_svg');?></a></li>
            </ul>
        </div>
    </header>



