<?php
if ( has_post_thumbnail() ){
    $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
}else{
    $img_url = 'https://picsum.photos/1280/864';
}
?>




<div class="post">
	<div class="container-fluid">
		<div class="row">
			<div class="col-5 left-col">
				<div class="taxonomy">
					<?php 
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
						}
						?>
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
				</div>
				<div class="feed-b-box">
					<h3>Would be grateful for your feedback</h3>
					<?php
echo do_shortcode('[WPCR_INSERT POSTID="$post->ID" NUM="3" SHOWFORM="1"]');
					?>
<?php //echo do_shortcode('[WPCR_SHOW POSTID="$post->ID" NUM="3" SHOWFORM="1"]'); ?>
				</div>
			</div>
			<div class="col-7">
				<div class="img-box"><img src="<?php echo $img_url[0]; ?>" alt="" width="<?php echo $img_url[1] ?>"></div>
			</div>
		</div>
	</div>
</div>