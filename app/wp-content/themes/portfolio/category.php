<?php


get_header();
?>
    <section class="s-portfolio bg-dark">
        <div class="container-fluid ">
            <div class="filter_div controls">
                <div class="row categories">
                    <ul>
                        <?php
                        $id = 7;
                        $term_link = get_term_link($id, ''); ?>
                        <li class=" active cat" data-filter="all" id="all"><?php echo '<a href="'. $term_link .'"> ВСЕ РАБОТЫ </a>' ?></li>
                        <?php
                        $cat_args = array(
                            'exclude' => array(1,7),
                            'option_all' => 'ALL'
                        );
                        $categories = get_categories($cat_args);

                        foreach ($categories as $cat) :
                            ?>
                            <li class="filter" ><a data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>" id="frontend"><?php echo $cat->name ?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="js-filter">
                <div class="masonry-container " id="portfolio_grid">
                    <div class="d-flex justify-content-center">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-sm-12 col-md-4 portfolio-item grid-item  <?php
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
                                        <a id="popup-cont" href="#" class="popup-content">Просмотреть</a>
                                    </div>
                                </div>
                                <div class="hidden">
                                    <div class="port-descr">
                                        <div class="modal-box-content">
                                            <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                            <h3><?php the_title(); ?></h3>
                                            <img src="<?php
                                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                                            echo $large_image_url[0];
                                            ?>" alt="<?php the_title(); ?>" />
                                            <?php the_content(); ?>
                                            <?php $count = $query->post_count; ?>
                                            <?php $i++;?>
                                            <?php if ($count == 2 || $count > 1) {?>
                                                <div class="port-item-but">
                                                    <div class="prew"><a href="#" class="popup-content">предыдущий</a></div>
                                                    <a href="<?php the_permalink(); ?>">подробнее...</a>
                                                    <?php if ($count !== $i) {?>
                                                    <div class="next"><a href="#" class="popup-content">следующий</a></div>
                                                    <?php }else{ ?>
                                                        <div class="next"><a href="#" class="popup-content">последний</a></div>
                                                        <?php }?>
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
                        <?php else: ?>
                            <!-- no post found -->
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>

    </section>

<?php
get_footer();
?>