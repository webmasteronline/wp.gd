<?php
/*
Template Name: contacts
*/
get_header();
?>
<div class="contact-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
    <!-- post navigation-->
<?php else: ?>
    <!-- no post found -->
<?php endif; ?>
</div>
<?php
get_footer();
