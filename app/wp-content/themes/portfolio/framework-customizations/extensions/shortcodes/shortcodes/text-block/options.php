<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
    'div_class' => array(
        'type'  => 'text',
        'label' => __('Class Div Text Block', 'fw'),
        'desc' => __('div Class', 'fw'),
    ),
);
