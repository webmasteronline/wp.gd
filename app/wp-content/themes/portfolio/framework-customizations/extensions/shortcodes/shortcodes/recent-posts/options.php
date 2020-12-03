<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'posts_number'       => array(
		'type' => 'text',
		'label' => __( 'Posts Number', 'fw' ),
		'text' => __( 'Выводит на страницу указанное каличество постов', 'fw' ),
	),
);