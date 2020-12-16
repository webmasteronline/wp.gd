<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */


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
        <div class="d-flex justify-content-center ">

<?php
    add_action('wp_ajax_category','ajax_show_portfolio_item');
    add_action( 'wp_ajax_nopriv_category', 'ajax_show_portfolio_item' );

    function ajax_show_portfolio_item(){
        $name = empty( $_POST['cat_name'] ) ? 's_portfolio' : esc_attr( $_POST['cat_name'] );
        $query = new WP_Query(array(
            'category_name' => $name,
        ));
        return $query;
        wp_die();
    }
    $query = ajax_show_portfolio_item();
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

<?php wp_reset_postdata(); ?>

        </div>
    </div>
</div>
