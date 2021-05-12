<?php get_header('front-page'); ?>
<section id="about">
	<div class="about-body">

		<div class="frontend-wrap">
			<div class="frontend bg-collor-dark">
				<div class="big-title">FRONTEND</div>
				<ul class="skill-list">
					<?php if(get_field('skills_frontend_1')): ?><li><?php the_field('skills_frontend_1') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_2')): ?><li><?php the_field('skills_frontend_2') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_3')): ?><li><?php the_field('skills_frontend_3') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_4')): ?><li><?php the_field('skills_frontend_4') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_5')): ?><li><?php the_field('skills_frontend_5') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_6')): ?><li><?php the_field('skills_frontend_6') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_7')): ?><li><?php the_field('skills_frontend_7') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_8')): ?><li><?php the_field('skills_frontend_8') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_9')): ?><li><?php the_field('skills_frontend_9') ?></li><?php endif; ?>
				</ul>
			</div>
			<div class="skills">
				<div class="skilss-wrap">
					<p class="title-block">My skills</p>
					<p class="text">All my knowledge and skills were acquired at the university and through many years of experience and practice</p>
				</div>
			</div>
		</div>
		<div class="backend-wrap">

			<div class="skills">
				<div class="skilss-wrap">
					<p class="title-block">Hi, I’m Dmitriy</p>
					<p class="text">I was born and live in a beautiful country - Moldova. This is a place of power for me. I am married and have a wonderful son. He is my incentive for growth and development in the professional field.<br>
					My main area of ​​work is layout: converting design layouts (PSD, Figma, Adobe XD) into HTML code, landing on CMS WordPress...</p>
					<!--<div class="but-wrap"><a class="button-lite" href="#">want to know more  <?php echo portfolio_theme_option('post_arrow_button_icon');?></a></div>-->
				</div>
			</div>
		
			<div class="backend bg-collor-grey">
				<ul class="skill-list">
					<?php if(get_field('skills_frontend_1')): ?><li><?php the_field('skills_backend_1') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_2')): ?><li><?php the_field('skills_backend_2') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_3')): ?><li><?php the_field('skills_backend_3') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_4')): ?><li><?php the_field('skills_backend_4') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_5')): ?><li><?php the_field('skills_backend_5') ?></li><?php endif; ?>
					<?php if(get_field('skills_frontend_6')): ?><li><?php the_field('skills_backend_6') ?></li><?php endif; ?>
				</ul>
				<div class="big-title">BACKEND</div>
			</div>
		</div>

	</div>
</section>
<section id="resume">
	<div class="resume-body">
		<div class="resume-item bg-collor-grey">
			<ul class="resume-list">
				<li>
					<span class="date">2003-2008</span>
					<h4 class="item-title">State politehnic University of Jitomir</h4>
					<p class="item-desc">Faculty of Applied Programming and Automated Systems</p>
				</li>
				<li>
					<span class="date">2008-2019</span>
					<h4 class="item-title">LLC “Brilliant Dancewear”</h4>
					<p class="item-desc">Creation and further technical support of the site</p>
				</li>
				<li>
					<span class="date">2016-now</span>
					<h4 class="item-title">JSC “ProfiPlus”</h4>
					<p class="item-desc">Creation and further technical support of the site</p>
				</li>
				<li>
					<span class="date">2008-2020</span>
					<h4 class="item-title">Freelance on “UpWork”</h4>
					<p class="item-desc">Freelancing on the UpWork international platform for 12 years</p>
				</li>
				<li>
					<span class="date">2020-now</span>
					<h4 class="item-title">Freelance on “Freelancer” </h4>
					<p class="item-desc">Start of freelancing on the international Freelancer platform</p>
				</li>
			</ul>
		</div>
		<div class="resume-title"><div class="big-title">Resume</div></div>
	</div>
</section>
<section id="portfolio" class="portfolio-s">
	<div class="title-wrap">
		<p class="title-block">Portfolio</p>
		<p class='desc'>The portfolio includes sites converted from PSD to HTML. Some of them are based on WordPress and OpenCart. Also there are works on Web design and Graphic design are presented here.</p>
	</div>
	<div class="portfolio-wrap container-fluid">
		<div class="portfolio-wrap-bg">	</div>
	    <div class="filter_div controls">
	      <div class="categories">
	          <ul class="portf-cat">
	              <li class="filter js-filter-item active" data-filter="all" id="all"><a href="">All</a></li>
	              <?php
	              $cat_args = array(
	                      'exclude' => array(1,7),
	                      'option_all' => 'ALL'
	              );
	              $categories = get_categories($cat_args);

	              foreach ($categories as $cat) :
	              ?>
	                  <li class="filter js-filter-item" data-filter=".frontend"><a data-category="<?php echo $cat->term_id; ?>" href="<?php echo get_category_link($cat->term_id); ?>" id="frontend"><?php echo $cat->name ?></a></li>
	              <?php
	              endforeach;
	              ?>
	          </ul>
	      </div>
	    </div>
	    <?php
			$query = new WP_Query(array(
			    'post_type' => 'post',
			    'posts_per_page' => $number,
			));
			?>
		<div class="js-filter">
		    <div class="masonry-container " id="portfolio_grid">
		        <div class="d-flex justify-content-center">

<?php $count_item = 0; ?>
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<?php $count_item++; ?>
		    <div class="col-sm-12 col-md-4 portfolio-item grid-item  <?php
		        $tags = wp_get_post_tags($post->ID);
		        if ($tags) {
		            foreach($tags as $tag) {
		                echo ' ' . $tag->name;
		            }
		        }
		        ?>">
            <?php the_post_thumbnail(); ?>
            <div class="port-item-cont">
                <div class="wrapper">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a id="popup-cont" href="#" class="popup-content"></a>
                </div>
            </div>
            <div class="hidden">
                <div class="port-descr">
                    <div class="modal-box-content">
                        <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                        echo $large_image_url[0];
                        ?>" alt="<?php the_title(); ?>" />
                        <?php //the_content(); ?>
                        <?php $count = $query->post_count; ?>
                        <?php if ($count == 2 || $count > 2) {?>
                            <div class="port-item-but">
                            	
                                 <div class="prew"><?php if ($count_item !== 1 ) {?><a href="#" class="popup-content"><?php echo portfolio_theme_option('post_arrow_left_icon');?></a><?php } ?></div>
                                
                                <a class="button-lite" href="<?php the_permalink(); ?>">подробнее<?php echo portfolio_theme_option('post_arrow_button_icon');?></a>
                                
                                <div class="next"><?php if ($count_item !== $count ) {?><a href="#" class="popup-content"><?php echo portfolio_theme_option('post_arrow_right_icon');?></a><?php } ?></div>
                            		
                            </div>
                        <?php }elseif ($count == 1) {?>
                            <div class="port-item-but justify-content-center">
                                <a class="button-lite" href="<?php the_permalink(); ?>">подробнее<?php echo portfolio_theme_option('post_arrow_button_icon');?></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>

			</div>
		<?php endwhile; ?>
			<!-- post navigation-->
		<?php else: ?>
			<!-- no post found -->
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>	
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
