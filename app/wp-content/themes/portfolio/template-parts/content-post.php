<?php
if ( has_post_thumbnail() ){
    $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
}else{
    $img_url = 'https://picsum.photos/1280/864';
}
?>

<h2><?php the_title(); ?></h2>


<div class="post">
	<div class="container-fluid">
		<div class="row">
			<div class="col-5 left-col">
				<div class="taxonomy">
					<?php 
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
						}

						wp_tag_cloud('');
						//debug($cur_terms);

					?>
				</div>
				<?php the_content(''); ?>
			</div>
			<div class="col-7">
				<div class="img-box"><img src="<?php echo $img_url[0]; ?>" alt="" width="<?php echo $img_url[1] ?>"></div>
			</div>
		</div>
	</div>
</div>