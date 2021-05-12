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
            'arrow_button_icon' => array(
                'type' => 'html',
                'html' => '<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z" fill="black"/>
                            </svg>',
            ),
            'post_arrow_button_icon' => array(
            'type' => 'textarea',
            'label' => __('Arrow Post item Button Img SVG', 'portfolio'),
            'desc' => __('enter the SVG data', 'portfolio'),
            'help' => __('Copy and paste the SVG attributes here...', 'portfolio')
            ),
            'arrow_right_icon' => array(
                'type' => 'html',
                'html' => '<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M16.0505 0.216712C15.757 -0.0668295 15.2891 -0.0586551 15.0056 0.234862C14.7291 0.521243 14.7291 0.9752 15.0056 1.26151L30.7389 16.9963L15.0041 32.7296C14.7106 33.0131 14.7025 33.4809 14.986 33.7745C15.2695 34.068 15.7373 34.0761 16.0309 33.7926C16.037 33.7867 16.0431 33.7806 16.049 33.7745L32.3055 17.518C32.594 17.2295 32.594 16.7617 32.3055 16.4731L16.0505 0.216712Z" fill="#009688"/>
                            <path d="M19.0064 16.4732L2.74991 0.216712C2.45639 -0.0668295 1.98858 -0.0586551 1.70504 0.234862C1.4285 0.521243 1.4285 0.9752 1.70504 1.26158L17.4384 16.9963L1.70359 32.7296C1.41007 33.0131 1.40196 33.4809 1.68544 33.7745C1.96898 34.068 2.43672 34.0761 2.7303 33.7926C2.73647 33.7867 2.7425 33.7806 2.74845 33.7745L19.0049 17.518C19.2937 17.2299 19.2944 16.7621 19.0064 16.4732Z" fill="#009688"/>
                            <path d="M15.5274 33.9917C15.1193 33.9925 14.7879 33.6622 14.7871 33.2541C14.7868 33.0573 14.8649 32.8685 15.0042 32.7296L30.739 16.9963L15.0042 1.26302C14.7207 0.969503 14.7289 0.501692 15.0224 0.21815C15.3087 -0.0583939 15.7627 -0.0583939 16.049 0.21815L32.3055 16.4746C32.594 16.7632 32.594 17.2309 32.3055 17.5195L16.0491 33.7759C15.9106 33.9141 15.723 33.9917 15.5274 33.9917Z" fill="#C8C8C8"/>
                            <path d="M2.22684 33.9916C1.81875 33.9923 1.48734 33.662 1.48657 33.2539C1.48623 33.0572 1.56437 32.8684 1.70368 32.7295L17.4384 16.9962L1.70368 1.26291C1.41474 0.973966 1.41474 0.505531 1.70368 0.216586C1.99262 -0.0723582 2.46106 -0.0723582 2.75 0.216586L19.0065 16.4731C19.2949 16.7616 19.2949 17.2293 19.0065 17.5179L2.75 33.7743C2.61139 33.9134 2.42317 33.9916 2.22684 33.9916Z" fill="#C8C8C8"/>
                            </g></svg>',
            ),
            'post_arrow_right_icon' => array(
            'type' => 'textarea',
            'label' => __('Arrow Post item Button Img SVG', 'portfolio'),
            'desc' => __('enter the SVG data', 'portfolio'),
            'help' => __('Copy and paste the SVG attributes here...', 'portfolio')
            ),
            'arrow_left_icon' => array(
                'type' => 'html',
                'html' => '<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M17.9495 33.7833C18.243 34.0668 18.7109 34.0587 18.9944 33.7651C19.2709 33.4788 19.2709 33.0248 18.9944 32.7385L3.26109 17.0037L18.9959 1.27041C19.2894 0.986866 19.2975 0.519123 19.014 0.225536C18.7305 -0.0679818 18.2627 -0.0760842 17.9691 0.207386C17.963 0.213344 17.9569 0.219372 17.951 0.225536L1.69451 16.482C1.40605 16.7705 1.40605 17.2383 1.69451 17.5269L17.9495 33.7833Z" fill="#009688"/>
                            <path d="M14.9936 17.5268L31.2501 33.7833C31.5436 34.0668 32.0114 34.0587 32.295 33.7651C32.5715 33.4788 32.5715 33.0248 32.295 32.7384L16.5616 17.0036L32.2964 1.27041C32.5899 0.986866 32.598 0.519123 32.3146 0.225536C32.031 -0.0679818 31.5633 -0.0760842 31.2697 0.207386C31.2635 0.213344 31.2575 0.219372 31.2515 0.225536L14.9951 16.482C14.7063 16.7701 14.7056 17.2379 14.9936 17.5268Z" fill="#009688"/>
                            <path d="M18.4726 0.00831216C18.8807 0.00754926 19.2121 0.337849 19.2129 0.745945C19.2132 0.942684 19.1351 1.13146 18.9958 1.27042L3.26101 17.0037L18.9958 32.737C19.2793 33.0305 19.2711 33.4983 18.9776 33.7818C18.6913 34.0584 18.2373 34.0584 17.951 33.7818L1.6945 17.5254C1.40604 17.2368 1.40604 16.7691 1.6945 16.4805L17.9509 0.224102C18.0894 0.0858993 18.277 0.00831214 18.4726 0.00831216Z" fill="#C8C8C8"/>
                            <path d="M31.7732 0.00841897C32.1813 0.00765607 32.5127 0.337955 32.5134 0.746052C32.5138 0.942791 32.4356 1.13157 32.2963 1.27053L16.5616 17.0038L32.2963 32.7371C32.5853 33.026 32.5853 33.4945 32.2963 33.7834C32.0074 34.0724 31.5389 34.0724 31.25 33.7834L14.9935 17.5269C14.7051 17.2384 14.7051 16.7707 14.9935 16.4821L31.25 0.225662C31.3886 0.0866279 31.5768 0.00841895 31.7732 0.00841897Z" fill="#C8C8C8"/>
                            </g>
                            </svg>',
            ),
            'post_arrow_left_icon' => array(
            'type' => 'textarea',
            'label' => __('Arrow Button Img SVG', 'portfolio'),
            'desc' => __('enter the SVG data', 'portfolio'),
            'help' => __('Copy and paste the SVG attributes here...', 'portfolio')
            ),
        ),
    ),
);