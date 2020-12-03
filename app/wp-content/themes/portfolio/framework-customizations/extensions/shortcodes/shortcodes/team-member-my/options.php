<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image' => array(
		'label' => __( 'Team Member Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'title'  => array(
		'label' => __( 'Team Member Name', 'fw' ),
		'desc'  => __( 'Name of the person', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'link'  => array(
		'label' => __( 'Add Class Link IMages', 'fw' ),
		'desc'  => __( 'Add Class Link IMages', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'box_img_class'  => array(
		'label' => __( 'Add Team Member box class', 'fw' ),
		'desc'  => __( 'Add Team Member box class', 'fw' ),
		'type'  => 'text',
		'value' => ''
	)
);