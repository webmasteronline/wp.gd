<?php

/*
Plugin Name: Ajax вывод постов по категориям
Plugin URI: http://zabaykin.ru
Description: Visualization of assistant invoice API
Version: 1.0.0
Author: zabaykin
Author URI: http://zabaykin.ru/
*/

function portfolio_scripts() {
    // Register the script
   // wp_register_script( 'custom-script', plugins_url( 'js/ajax.js', __FILE__ ), array('jquery'), false, true );

    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'load_more_posts' ),
    );
    wp_localize_script( 'portfolio-scripts', 'blog', $script_data_array );

    // Enqueued script with localized data.
    wp_enqueue_script( 'portfolio-scripts' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
?>

<div class="container-fluid">
    <div class="filter_div controls">
        <div class="row">
            <ul>
                <li class="filter active" data-filter="all" id="all"><a href="">Все работы</a></li>
                <li class="filter" data-filter=".frontend"><a href="" id="frontend">Фронтенд</a></li>
                <li class="filter" data-filter=".backend"><a href="" id="backend">Бэкенд</a></li>
                <li class="filter" data-filter=".design"><a href="" id="design">Дизайн</a></li>
                <li class="filter" data-filter=".other"><a href="" id="other">Мелкие работы</a></li>
            </ul>
        </div>
    </div>

    <div class="masonry-container" id="portfolio_grid">
        <div class="d-flex justify-content-center" id="row_append">

<?php
    add_action('wp_ajax_load_posts_by_ajax','load_posts_by_ajax_callback');
    add_action( 'wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback' );

    function load_posts_by_ajax_callback(){
        $name = empty( $_POST['catname'] ) ? 's_portfolio' : esc_attr( $_POST['catname'] );
        $query = new WP_Query(array(
            'category_name' => $name,
        ));
        return $query;

    }
    $query = load_posts_by_ajax_callback();
?>

<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    <div class="mix col-md-3 col-4 portfolio-item grid-item  <?php
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
            foreach($tags as $tag) {
                echo ' ' . $tag->name;
            }
        }
        ?>">
            <?php the_post_thumbnail(); ?>
            <div class="port-item-cont">
                <div class="wrapper">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="#" class="popup-content">Просмотреть</a>
                </div>
            </div>
            <div class="hidden">
                <div class="port-descr">
                    <div class="modal-box-content">
                        <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <img src="<?php
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                        echo $large_image_url[0];
                        ?>" alt="<?php the_title(); ?>" />
                    </div>
                </div>
            </div>

	</div>
<?php endwhile; ?>
	<!-- post navigation-->
<?php else: ?>
	<!-- no post found -->
<?php endif; ?>



        </div>
    </div>
</div>
