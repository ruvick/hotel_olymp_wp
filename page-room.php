<?php 

/*
Template Name: Страница Номер
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="room" class="room recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
			?> 

			<h1><?php the_title();?></h1>

			<div class="slider-room">
				<?
				$pict_room = carbon_get_the_post_meta('offer_picture');
				if ($pict_room) {
					$pict_roomIndex = 0;
					foreach ($pict_room as $item) {
						?>
						<div class="slider-room__img">
							<img src="<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0]; ?>" alt="">
						</div>
						<?
						$pict_roomIndex++;
					}
				}
				?>
			</div>

			<div class="room__specific specific__row d-flex">

				<div class="room__specific-item-icon specific-item room__specific-item-icon_01 d-flex">
					<? echo carbon_get_post_meta(get_the_ID(),"room_size"); ?>
				</div> 

				<div class="room__specific-item-icon specific-item room__specific-item-icon_02 d-flex">
					<? echo carbon_get_post_meta(get_the_ID(),"room_number"); ?>
				</div>

				<div class="room__specific-item-icon specific-item room__specific-item-icon_03 d-flex">
					<? echo carbon_get_post_meta(get_the_ID(),"room_rooms"); ?>
				</div>
				
			</div>

			<?php the_content(); ?>

			<h2>В стоимость входит</h2>

			<? echo carbon_get_post_meta(get_the_ID(),"included_price"); ?>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
