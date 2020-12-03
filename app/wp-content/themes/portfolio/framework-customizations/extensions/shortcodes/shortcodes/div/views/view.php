<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php //debug($atts); ?>
<?php if ( !empty($atts['div_wrapper']) ): ?>
    <div <?php if ( !empty($atts['div_wrapper_class']) )  echo " class='{$atts['div_wrapper_class']}'"?> >
<?php endif; ?>
    <div
        <?php if ( !empty($atts['div_class']) ) echo "class='{$atts['div_class']}'" ?>
        <?php if ( !empty($atts['div_id']) ) echo "id='{$atts['div_id']}'" ?>
        <?php if ( !empty($atts['div_data_attrs']) ) echo $atts['div_data_attrs'] ?>
    >
        <?php if ( !empty($atts['div_icon']) ): ?>
            <i class="<?php echo $atts['div_icon']; ?>"></i>
        <?php endif; ?>

        <?php if ( !empty($atts['div_content']) ) echo $atts['div_content'] ?>
    </div>
<?php if ( !empty($atts['div_wrapper']) ): ?>
    </div>
<?php endif; ?>

