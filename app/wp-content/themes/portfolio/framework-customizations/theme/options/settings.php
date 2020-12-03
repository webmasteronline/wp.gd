<?php if (!defined('FW')) die('Forbidden');

$options = array(
    /*    'footer_text' => array(
            'type' => 'text',
            'label' => __('Text in Footer', 'portfolio'),
        ),*/
    'general' => array(
        'type' => 'tab',
        'title' => __('General', 'portfolio'),
        'options' => array(
            'logo_img_svg' => array(
                'type' => 'textarea',
                'label' => __('Top Logo Img SVG', 'portfolio'),
                'desc' => __('enter the SVG data', 'portfolio'),
                'help' => __('Some help...', 'portfolio')
            ),
            'top_bg_img' => array(
                'type' => 'upload',
                'label' => __('Image Header', 'portfolio'),
                'desc' => __('Image Header', 'portfolio'),
                'help' => __('Some ...', 'portfolio')
            ),
        ),
    ),
    'colors' => array(
        'type' => 'tab',
        'title' => __('Site colors', 'portfolio'),
        'options' => array(
            'header_color' => array(
                'type' => 'color-picker',
                'value' => '#ffffff',
                'label' => __('Color Header', 'portfolio'),
                'desc' => __('Choose header color', 'portfolio'),
                'help' => __('Some color', 'portfolio'),
            ),
        ),
    ),
);