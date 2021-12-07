<?php 

/*
Template Name: Страница Типовой шаблон
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="recurring sample content">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1><?php the_title();?></h1>

			<div class="sample__descp">
				<?php the_content(); ?>
			</div>

			<div class="sample__row restaurant-img__row d-flex <? if (!empty(carbon_get_post_meta(get_the_ID(),"sample_2_img_vertical"))) echo "no_b_m"?>">

				<div class="restaurant__img-big">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_img_vertical"), 'full')[0];?>" alt="">
				</div>

				<div class="restaurant__col d-flex">
					<div class="restaurant__img">
						<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_img_small_1"), 'full')[0];?>" alt="">
					</div>
					<div class="restaurant__img">
						<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_img_small_2"), 'full')[0];?>" alt="">
					</div>
					<div class="restaurant__img">
						<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_img_horizontal"), 'full')[0];?>" alt="">
					</div>
				</div>

			</div>

			<? if (!empty(carbon_get_post_meta(get_the_ID(),"sample_2_img_vertical"))) {?>
				<div class="sample__row restaurant-img__row d-flex">

					<div class="restaurant__img-big">
						<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_2_img_vertical"), 'full')[0];?>" alt="">
					</div>

					<div class="restaurant__col d-flex">
						<div class="restaurant__img">
							<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_2_img_small_1"), 'full')[0];?>" alt="">
						</div>
						<div class="restaurant__img">
							<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_2_img_small_2"), 'full')[0];?>" alt="">
						</div>
						<div class="restaurant__img">
							<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sample_2_img_horizontal"), 'full')[0];?>" alt="">
						</div>
					</div>

				</div>
			<?}?>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
