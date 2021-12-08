<?php 

/*
Template Name: Страница Ресторан
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

			<section id="restaurant" class="restaurant stock-bg">
				<div class="container">
					<div class="restaurant__text-block text-block">
						<h1 class="greetings__title title"><?echo carbon_get_the_post_meta("rest_head");?></h1>
						
						<?echo  apply_filters( 'the_content', carbon_get_the_post_meta("rest_subtext"));?>

						<a target = "_blank" href="<?echo wp_get_attachment_url(carbon_get_the_post_meta("rest_menu"));?>" class="restaurant__btn btn"><? echo pll_e("Меню ресторана") ?></a>
					</div>
				</div>
			</section>

			<section id="restaurant-specific" class="restaurant-specific">
				<div class="container">

					<div class="restaurant-specific__row specific__row d-flex">
						<div class="specific-item restaurant__specific-item-icon_01 d-flex">
						<? echo pll_e("Банкет до 80 <br/>человек") ?>
						</div>

						<div class="specific-item restaurant__specific-item-icon_02 d-flex">
						<? echo pll_e("Музыкальное и световое <br/>оборудование") ?>
						</div>

						<div class="specific-item restaurant__specific-item-icon_03 d-flex">
						<? echo pll_e("Каминный <br/>зал") ?>
						</div>
					</div>
<!-- 
					<div class="restaurant-img__row d-flex">
						
							<div class="restaurant__img-big">
								<img src="<?php echo get_template_directory_uri();?>/img/restaurant/01.jpg" alt="">
							</div>

						<div class="restaurant__col d-flex">
							<div class="restaurant__img">
								<img src="<?php echo get_template_directory_uri();?>/img/restaurant/02.jpg" alt="">
							</div>
							<div class="restaurant__img">
								<img src="<?php echo get_template_directory_uri();?>/img/restaurant/03.jpg" alt="">
							</div>
							<div class="restaurant__img">
								<img src="<?php echo get_template_directory_uri();?>/img/restaurant/04.jpg" alt="">
							</div>
						</div>

					</div> -->

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

	<?php get_template_part('template-parts/applic-section');?>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
