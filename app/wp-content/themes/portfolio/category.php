<?php


get_header();
?>
<div class="category-page">
    <section class="portfolio-s">
        <div class="title-wrap">
            <p class="title-block"><?php if( is_category() )
                $cat_name = get_queried_object()->name;
    echo trim($cat_name); ?></p>            
        </div>
        <div class="portfolio-wrap container-fluid ">
            <div class="portfolio-wrap-bg"></div>
            <div class="filter_div controls">
            </div>
            <div class="js-filter">
                <div class="masonry-container " id="portfolio_grid">
                    <div class="d-flex justify-content-center">
                                            <?php
                    $category = get_queried_object();

                    //debug($category->term_id);
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        );

                        if(isset($category)){
                            $args['category__in'] = $category->term_id;
                        }
                        //debug($args);
                        $query = new WP_Query($args);
                  
                    ?>  
                        <?php $count_item = 0; ?>
                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                            <?php $count_item++; ?>
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
                                        <a id="popup-cont" href="#" class="popup-content"></a>
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
                                            <?php //the_content(); ?>
                                            <?php $count = $query->post_count; ?>
                                            <?php if ($count == 2 || $count > 2) {?>
                                                <div class="port-item-but">
                                                    
                                                    <div class="prew"><?php if ($count_item !== 1 ) {?><a href="#" class="popup-content"><?php echo portfolio_theme_option('post_arrow_left_icon');?></a><?php } ?></div>
                                                    
                                                    <a class="button-lite" href="<?php the_permalink(); ?>">подробнее<?php echo portfolio_theme_option('post_arrow_button_icon');?></a>
                                                    
                                                    <div class="next"><?php if ($count_item !== $count ) {?><a href="#" class="popup-content"><?php echo portfolio_theme_option('post_arrow_right_icon');?></a><?php } ?></div>
                                                        
                                                </div>
                                            <?php }elseif ($count == 1) {?>
                                                <div class="port-item-but justify-content-center">
                                                    <a class="button-lite" href="<?php the_permalink(); ?>">подробнее<?php echo portfolio_theme_option('post_arrow_button_icon');?></a>
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
</div>
<?php
//get_sidebar();
get_footer();
?>