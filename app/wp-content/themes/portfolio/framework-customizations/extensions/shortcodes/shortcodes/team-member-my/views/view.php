<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
?>
<div class="fw-team">
	<div class="fw-team-image <?php if ( !empty($atts['box_img_class']) ) echo $atts['box_img_class']?>">
        <?php if ( !empty($atts['title']) ): ?>
            <h3><?php echo $atts['title']; ?></h3>
        <?php endif; ?>
        <a href="<?php echo esc_attr($image); ?>" <?php if ( !empty($atts['link']) ) echo "class='{$atts['link']}'" ?> >
        <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['title']); ?>"  />
        </a>
    </div>
</div>
<?php //debug($atts); ?>

