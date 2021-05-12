<div class="content-page-wrap">
<section id="portfolio" class="portfolio-s">
    <div class="title-wrap">
        <p class="title-block">Portfolio</p>
        <p class='desc'>The portfolio includes sites converted from PSD to HTML. Some of them are based on WordPress and OpenCart. Also there are works on Web design and Graphic design are presented here.</p>
    </div>
    <div class="portfolio-wrap container-fluid">
        <div class="portfolio-wrap-bg"> </div>
        <div class="filter_div controls">
          <div class="categories">
              <ul class="portf-cat">
                  <li class="filter js-filter-item active" data-filter="all" id="all"><a href="">All</a></li>
                  <?php
                  $cat_args = array(
                          'exclude' => array(1,7),
                          'option_all' => 'ALL'
                  );
                  $categories = get_categories($cat_args);

                  foreach ($categories as $cat) :
                  ?>
                      <li class="filter js-filter-item" data-filter=".frontend"><a data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>" id="frontend"><?php echo $cat->name ?></a></li>
                  <?php
                  endforeach;
                  ?>
              </ul>
          </div>
        </div>
        <?php
            $query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => $number,
            ));
            ?>
        <div class="js-filter">
            <div class="masonry-container " id="portfolio_grid">
                <div class="d-flex justify-content-center">

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