<?php 

/*
Template Name: Страница Бассейн и SPA комплекс
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="spa" class="spa-bg stock-bg">
		<div class="container">
			<div class="stock-bg__text-block text-block">
				<h1 class="greetings__title title">SPA и Бассейн</h1>
				<p>Все для Вашего комфортного отдыха</p>
			</div>
		</div>
	</section>

	<section id="card-action-sec" class="spa-content card-action-sec recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1>Бассейн на 18,5 м</h1>

			<div class="spa__descp">
				<?echo carbon_get_post_meta(get_the_ID(),"pool_descr"); ?>
			</div>

			<div class="spa__row">
				<div class="spa__item-img spa__item-img_big">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pool_img_big"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pool_img_1"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pool_img_2"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pool_img_3"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"pool_img_4"), 'full')[0];?>" alt="">
				</div>
			</div>

			<h2>Хамам</h2>

			<div class="spa__descp">
				<?echo carbon_get_post_meta(get_the_ID(),"hamam_descr"); ?>
			</div>

			<div class="spa__row">
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"hamam_img_1"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"hamam_img_2"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"hamam_img_3"), 'full')[0];?>" alt="">
				</div>
			</div>

			<h2>Сауна</h2>

			<div class="spa__descp">
				<?echo carbon_get_post_meta(get_the_ID(),"sauna_descr"); ?>
			</div>

			<div class="spa__row">
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sauna_img_1"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sauna_img_2"), 'full')[0];?>" alt="">
				</div>
				<div class="spa__item-img">
					<img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(),"sauna_img_3"), 'full')[0];?>" alt="">
				</div>
			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
