<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php if ( !empty($atts['div_class']) ): ?>
	<div <?php if ( !empty($atts['div_class']) )  echo " class='{$atts['div_class']}'"?> >
<?php endif; ?>
<?php echo do_shortcode( $atts['text'] ); ?>
<?php if ( !empty($atts['div_class']) ): ?>
	</div>
<?php endif; ?>
