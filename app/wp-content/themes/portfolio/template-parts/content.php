<?php
if ( has_post_thumbnail() ){
    $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
}else{
    $img_url = 'https://picsum.photos/1280/864';
}
?>

<div class="">
    <h2><?php the_title(); ?></h2>
    <div class="img-box"><img src="<?php echo $img_url[0]; ?>" alt=""></div>
    <?php the_content(''); ?>
</div>
