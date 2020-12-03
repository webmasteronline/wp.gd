<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$number = abs((int)$atts['posts_number']) ? $atts['posts_number'] : -1 ; /* Если будет истена до занка ? ($atts= положительное число) то $number принимает значение =$atts['posts_number']) в противном случае после : запишем в переменную число 3   */

?>
<?php
$query = new WP_Query(array(
    'posts_per_page' => $number,
));
?>

<div class="container-fluid">
    <div class="filter_div controls">
        <div class="row">
            <ul>
                <li class="filter active" data-filter="all" id="all">Все работы</li>
                <li class="filter" data-filter=".front_end" id="front_end">Фронтенд</li>
                <li class="filter" data-filter=".back_end" id="back_end">Бэкенд</li>
                <li class="filter" data-filter=".desine" id="desine">Дизайн</li>
                <li class="filter" data-filter=".small_work" id="small_work">Мелкие работы</li>
            </ul>
        </div>
    </div>

    <div class="masonry-container" id="portfolio_grid">
        <div class="d-flex justify-content-center ">
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
