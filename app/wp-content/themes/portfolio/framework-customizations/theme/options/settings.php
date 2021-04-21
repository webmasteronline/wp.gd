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
                'help' => __('Upload bg image on the front page to header', 'portfolio')
            ),
            'post_heart_icon' => array(
                'type' => 'textarea',
                'label' => __('Post Img SVG', 'portfolio'),
                'desc' => __('enter the SVG data', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio')
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
                'help' => __('Not have link enter #', 'portfolio'),
            ),
        ),
    ),
    'social' => array(
        'type' => 'tab',
        'title' => __('Social icon SVG', 'portfolio'),
        'options' => array(
            'facebook_link' => array(
                'type' => 'text',
                'label' => __('Facebook Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'facebook_svg' => array(
                'type' => 'textarea',
                'label' => __('Facebook SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'twitter_link' => array(
                'type' => 'text',
                'label' => __('Twitter Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'twitter_svg' => array(
                'type' => 'textarea',
                'label' => __('Twitter SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'behance_link' => array(
                'type' => 'text',
                'label' => __('Behance Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'behance_svg' => array(
                'type' => 'textarea',
                'label' => __('Behance SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'instagram_link' => array(
                'type' => 'text',
                'label' => __('Instagram Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'instagram_svg' => array(
                'type' => 'textarea',
                'label' => __('Instagram SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'vk_link' => array(
                'type' => 'text',
                'label' => __('VK Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'vk_svg' => array(
                'type' => 'textarea',
                'label' => __('VK SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'mail_link' => array(
                'type' => 'text',
                'label' => __('Mail Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'mail_svg' => array(
                'type' => 'textarea',
                'label' => __('Mail SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'phone_link' => array(
                'type' => 'text',
                'label' => __('Phone Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'phone_svg' => array(
                'type' => 'textarea',
                'label' => __('Phone SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
            'skype_link' => array(
                'type' => 'text',
                'label' => __('Skype Link', 'portfolio'),
                'desc' => __('Add Your Social Media Profile Links to Your Account ', 'portfolio'),
                'help' => __('Not have link, enter #, if you want see icon on the page', 'portfolio'),
            ),
            'skype_svg' => array(
                'type' => 'textarea',
                'label' => __('Skype SVG', 'portfolio'),
                'desc' => __('Copy and paste the SVG attributes here...', 'portfolio'),
                'help' => __('Copy and paste the SVG attributes here...', 'portfolio'),
            ),
        ),
    ),
);