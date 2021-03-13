<?php get_header('front-page'); ?>
<section id="about">
	<div class="about-body">
		<div class="skills"><h3 class="title-block">My skills</h3></div>
		<div class="frontend bg-collor-dark">
			<div class="big-title">FRONTEND</div>
		</div>
		<div class="backend"></div>

	</div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
    <!-- post navigation-->
<?php else: ?>
    <!-- no post found -->
<?php endif; ?>

<?php get_footer(); ?>
