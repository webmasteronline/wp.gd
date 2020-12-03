<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'div_wrapper'       => array(
        'type' => 'checkbox',
        'label' => __( 'Wrap in div ?', 'fw' ),
        'text' => __( '', 'fw' ),
    ),
    'div_wrapper_class' => array(
        'type'  => 'text',
        'label' => __('div Wrapper Class', 'fw'),
        'desc' => __('div Wrapper Class', 'fw'),
    ),
	'div_icon'       => array(
		'type' => 'icon',
		'label' => __( 'div Icon', 'fw' )
	),
	'div_content'    => array(
		'type'  => 'text',
		'label' => __( 'div Content', 'fw' ),
		'desc'  => __( 'div Content', 'fw' ),
	),
    'div_class' => array(
        'type'  => 'text',
        'label' => __('div Class', 'fw'),
        'desc' => __('div Class', 'fw'),
    ),
    'div_id' => array(
        'type'  => 'text',
        'label' => __('div ID', 'fw'),
        'desc' => __('div ID', 'fw'),
    ),
    'div_data_attrs' => array(
        'type'  => 'text',
        'label' => __('div Attributes', 'fw'),
        'desc' => __('div Attributes (data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50")', 'fw'),
    ),
);