<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content', 'post');

endwhile; ?>
<!--    <div class="container">
        <div class="portfolio-description">
        <div class="row">
            <div class="col">

                <?php /*while (have_posts()) : the_post(); */?>
                    <?php /*
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle"></span> <span class="nav-title"><span class="title">%title</span><i class="fas fa-arrow-alt-circle-left"></i></span>',
                            'next_text' => '<span class="nav-subtitle"></span> <span class="nav-title"><span class="title">%title</span><i class="fas fa-arrow-alt-circle-right"></i></span>',
                        )
                    );
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                    comments_template();
                    }
                endwhile; */?>
            </div>
        </div>
        </div>
    </div>-->


<?php
get_footer();
?>