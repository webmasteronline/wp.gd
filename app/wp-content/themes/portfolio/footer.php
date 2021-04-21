<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<footer class="main-footer bg-dark">
    <div class="footer-wrap">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-3',
            'container_class' => 'footer-menu'
        ) );
    ?>
    <div class="social-wrap">
        <div class="share-wrap">
            <div class="svg-icon">
                <svg width="32" height="42" viewBox="0 0 32 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5876 22.377H24.6941C24.8636 22.8278 25.1291 23.2505 25.4919 23.6126C26.152 24.2714 27.0298 24.6345 27.9631 24.6345C28.8968 24.6345 29.7745 24.2714 30.4346 23.6126C31.7972 22.2527 31.7972 20.0397 30.4346 18.6795C29.7745 18.0207 28.8968 17.6579 27.9634 17.6579C27.0298 17.6579 26.152 18.0207 25.4919 18.6795C25.1291 19.0416 24.8639 19.4646 24.6944 19.9154H13.5876C13.419 19.0326 13.0742 18.2113 12.5891 17.4913L18.1884 11.9151C19.2639 12.68 20.5777 13.1315 21.9959 13.1315C25.6235 13.1315 28.5747 10.1863 28.5747 6.56573C28.5747 2.94545 25.6235 0 21.9959 0C18.3682 0 15.4173 2.94545 15.4173 6.56573C15.4173 7.88272 15.809 9.10967 16.4807 10.1386L10.8553 15.7408C9.79487 15.0099 8.5103 14.5802 7.12653 14.5802C3.49917 14.5802 0.547974 17.5256 0.547974 21.1462C0.547974 24.7665 3.49917 27.7119 7.12653 27.7119C8.52732 27.7119 9.82633 27.2713 10.8945 26.5238L16.2029 31.7055C15.4674 32.7655 15.0352 34.0502 15.0352 35.4341C15.0352 39.0547 17.9861 41.9998 21.6138 41.9998C25.2415 41.9998 28.1923 39.0547 28.1923 35.4341C28.1923 31.8138 25.2411 28.8684 21.6138 28.8684C20.2628 28.8684 19.0055 29.2776 17.9598 29.9774L12.6151 24.7604C13.0864 24.05 13.4222 23.2435 13.5876 22.377ZM27.2356 20.4201C27.4301 20.2262 27.6883 20.1192 27.9634 20.1192C28.2383 20.1192 28.4964 20.2262 28.691 20.4201C29.092 20.8203 29.092 21.4721 28.691 21.8723C28.4964 22.0662 28.2383 22.1732 27.9631 22.1732C27.6883 22.1732 27.4301 22.0662 27.2356 21.8723C26.8346 21.4721 26.8346 20.8203 27.2356 20.4201ZM21.9959 2.46127C24.2635 2.46127 26.1083 4.30249 26.1083 6.56573C26.1083 8.82897 24.2635 10.6702 21.9959 10.6702C19.7282 10.6702 17.8834 8.82897 17.8834 6.56573C17.8834 4.30249 19.7282 2.46127 21.9959 2.46127ZM3.01405 21.1462C3.01405 18.883 4.85887 17.0417 7.12653 17.0417C9.39419 17.0417 11.239 18.883 11.239 21.1462C11.239 23.4094 9.39419 25.2507 7.12653 25.2507C4.85887 25.2507 3.01405 23.4094 3.01405 21.1462ZM25.7263 35.4344C25.7263 37.6977 23.8814 39.5389 21.6138 39.5389C19.3461 39.5389 17.5013 37.6977 17.5013 35.4344C17.5013 33.1712 19.3461 31.33 21.6138 31.33C23.8814 31.33 25.7263 33.1712 25.7263 35.4344Z" fill="white"/>
                </svg>
            </div>
            <p class="text">Share</p>
        </div>           
        <ul class="icon-list">
            <li><a class="inst-icon" href="<?php echo portfolio_theme_option('instagram_link'); ?>" target="_blank"><?php echo portfolio_theme_option('instagram_svg');?></a></li>
            <li><a class="beh-icon" href="<?php echo portfolio_theme_option('behance_link'); ?>" target="_blank"><?php echo portfolio_theme_option('behance_svg');?></a></li>
            <li><a class="face-icon" href="<?php echo portfolio_theme_option('facebook_link'); ?>" target="_blank"><?php echo portfolio_theme_option('facebook_svg');?></a></li>
            <li><a class="tw-icon" href="<?php echo portfolio_theme_option('twitter_link'); ?>" target="_blank"><?php echo portfolio_theme_option('twitter_svg');?></a></li>
            <li><a class="vk-icon" href="<?php echo portfolio_theme_option('vk_link'); ?>" target="_blank"><?php echo portfolio_theme_option('vk_svg');?></a></li>
        </ul>
    </div>
        <ul class="attr-list">
               <li><div class="mail-icon"><?php echo portfolio_theme_option('mail_svg');?></div><p><?php echo portfolio_theme_option('mail_link');?></p></li>
               <li><div class="phone-icon"><?php echo portfolio_theme_option('phone_svg');?></div><p><?php echo portfolio_theme_option('phone_link');?></p></li>
               <li><div class="skype-icon"><?php echo portfolio_theme_option('skype_svg');?></div><p><?php echo portfolio_theme_option('skype_link');?></p></li>
           </ul>   
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
