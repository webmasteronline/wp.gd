<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'span_wrapper'       => array(
		'type' => 'checkbox',
		'label' => __( 'Wrap in div ?', 'fw' ),
		'text' => __( '', 'fw' ),
	),
	'span_wrapper_class'       => array(
		'type' => 'text',
		'label' => __( 'Wrapper Class', 'fw' ),
	),
	'span_icon'       => array(
		'type' => 'icon',
		'label' => __( 'span Icon', 'fw' ),
	),
	'span_content'    => array(
		'type'  => 'text',
		'label' => __( 'span Content', 'fw' ),
		'desc'  => __( 'span Content', 'fw' ),
	),
    'span_class' => array(
        'type'  => 'text',
        'label' => __('span Class', 'fw'),
        'desc' => __('span Class', 'fw'),
    ),
    'span_id' => array(
        'type'  => 'text',
        'label' => __('span ID', 'fw'),
        'desc' => __('span ID', 'fw'),
    ),
    'span_data_attrs' => array(
        'type'  => 'text',
        'label' => __('span Attributes', 'fw'),
        'desc' => __('span Attributes (data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50")', 'fw'),
    ),
);