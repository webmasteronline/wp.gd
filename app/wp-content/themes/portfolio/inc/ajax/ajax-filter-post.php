<?php
add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {

    $category = $_POST['category'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    if(isset($category)){
        $args['category__in'] = array($category);
    }

    $query = new WP_Query($args);
?>
    <div class="masonry-container " id="portfolio_grid">
        <div class="d-flex justify-content-center">
<?php
if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    <div class="col-sm-12 col-md-4 portfolio-item grid-item ">
            <?php the_post_thumbnail(); ?>
            <div class="port-item-cont">
                <div class="wrapper">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a id="popup-cont" href="#" class="popup-content">Просмотреть</a>
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
                        <?php $count = $query->post_count; ?>
                        <?php if ($count == 2 || $count > 2) {?>
                            <div class="port-item-but">
                                <div class="prew"><a href="#" class="popup-content">предыдущий</a></div>
                                <a href="<?php the_permalink(); ?>">подробнее...</a>
                                <div class="next"><a href="#" class="popup-content">следующий</a></div>
                            </div>
                        <?php }elseif ($count == 1) {?>
                            <div class="port-item-but">
                                <a href="<?php the_permalink(); ?>">подробнее...</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>

	</div>
<?php endwhile; ?>
	<!-- post navigation-->
<?php endif; ?>
        </div>
    </div>

<?php

    wp_reset_postdata();
    die();
}
?>
