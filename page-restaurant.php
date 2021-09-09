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
						<h1 class="greetings__title title">Ресторан Олимп</h1>
						<p>
							Ресторан предлагает приятный интерьер,богатый выбор блюд и напитков. 
							Служба банкетов отеля "Олимп" по заказу сможет организовать 
							незабываемый праздник, юбилей или вечеринку.
						</p>
						<a href="#" class="restaurant__btn btn">Меню ресторана</a>
					</div>
				</div>
			</section>

			<section id="restaurant-specific" class="restaurant-specific">
				<div class="container">

					<div class="restaurant-specific__row specific__row d-flex">
						<div class="specific-item restaurant__specific-item-icon_01 d-flex">
							75 посадочных <br>
							мест
						</div>

						<div class="specific-item restaurant__specific-item-icon_02 d-flex">
							Современный <br>
							интерьер
						</div>

						<div class="specific-item restaurant__specific-item-icon_03 d-flex">
							Уникальное <br>
							меню
						</div>
					</div>

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

					</div>

				</div>
			</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
