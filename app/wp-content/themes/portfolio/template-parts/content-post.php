<?php
if ( has_post_thumbnail() ){
    $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
}else{
    $img_url = 'https://picsum.photos/1280/864';
}
?>




<div class="post">


			<div class="left-col">
				<div class="taxonomy">
					<?php 
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
						}
						?>
							<?php if(get_field('main_title')): ?><h2><?php the_field('main_title') ?></h2><?php endif; ?>
						<div class="hashtag">
							<?php
								wp_tag_cloud(array(
								'smallest'  => 20,
								'largest'   => 20,								
								'unit'      => 'px',
								));
								//debug($cur_terms);
							?>
					</div>
				</div>
				<div class="post-content">
					<?php the_content(''); ?>
					<a  href="<?php echo esc_attr( esc_url( get_page_link(134) ) ) ?>" class="button-post" target="_blank">Contact me</a>
				</div>
				<div class="img-box-mob">
            <img src="<?php echo $img_url[0]; ?>" alt="" width="<?php echo $img_url[1] ?>">
						<div class="heart-like"><?php  $icon=portfolio_theme_option('post_heart_icon') ?>
							<?php echo getPostLikeLink(get_the_ID(),$icon); ?>
						</div>
        </div>

				<div class="feed-b-box">
					<div class="title-box"><h3>Would be grateful for your feedback</h3></div>
					<?php
                    echo do_shortcode('[WPCR_INSERT POSTID="$post->ID" NUM="0"]');
					?>

				</div>
			</div>
			<div class="right-col">
				<div class="img-box">
										<?php if(get_field('long_img_post')){ ?>
							 			<img src="<?php the_field('long_img_post'); ?>" alt="" width="<?php //echo $img_url[1] ?>">
							 			<?php }else{ ?>
                    <img src="<?php echo $img_url[0]; ?>" alt="" width="<?php echo $img_url[1] ?>">
                    <?php } ?>
                    <div class="heart-like"><?php  $icon=portfolio_theme_option('post_heart_icon') ?>
                    <?php echo getPostLikeLink(get_the_ID(),$icon); ?>
                    </div>
                </div>
			</div>
			
</div>
	<?php 
		$a=do_shortcode('[WPCR_SHOW POSTID='.$post->ID.' NUM="10"]');
		if (strpos($a, 'wpcr3_caps') !== false) {?>
		<h3 class="feed-review-title">Feedbacks</h3>
<div class="feed-b-review">
	<?php echo do_shortcode('[WPCR_SHOW POSTID='.$post->ID.' NUM="10"]');?>
</div>
<?php } ?>
<?php //echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="3"]'); ?>
	