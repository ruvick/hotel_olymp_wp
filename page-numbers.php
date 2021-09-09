<?php 

/*
Template Name: Страница Номера
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="card-action-sec recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1><?php the_title();?></h1>

			<div class="card-action__body">
				
				<div class="card-action__item d-flex">
					<div class="card-action__img">
						<img src="<?php echo get_template_directory_uri();?>/img/numbers/01.jpg" alt="">
					</div>
					<div class="card-action__descp">
						<h3 class="card-action__title title">
							Номер Lux
						</h3>
						<p class="card-action__paragrafy">
							Великолепный номер площадью 27 кв.м. 
							Предлагаем Вам погрузиться в атмосферу спокойствия в 
							сочетании с ощущением домашнего уюта.
						</p>
						<p class="card-action__price">4950<span>руб/сутки</span></p>
						<a href="room.html" class="card-action__btn btn">Подробнее</a>
					</div>
				</div>

				<div class="card-action__item d-flex">
					<div class="card-action__img">
						<img src="<?php echo get_template_directory_uri();?>/img/numbers/02.jpg" alt="">
					</div>
					<div class="card-action__descp">
						<h3 class="card-action__title title">
							Номер Джуниор СЮИТ
						</h3>
						<p class="card-action__paragrafy">
							Комфортабельный двухместный номер площадью 18 кв.м., 
							украшенный картинами и элементами деревянного декора, 
							предлагают особенную домашнюю атмосферу.
						</p>
						<p class="card-action__price">4500<span>руб/сутки</span></p>
						<a href="#" class="card-action__btn btn">Подробнее</a>
					</div>
				</div>

				<div class="card-action__item d-flex">
					<div class="card-action__img">
						<img src="<?php echo get_template_directory_uri();?>/img/numbers/03.jpg" alt="">
					</div>
					<div class="card-action__descp">
						<h3 class="card-action__title title">
							Номер СТАНДАРТ
						</h3>
						<p class="card-action__paragrafy">
							Прекрасные и уютные номера ,оснащены всем необходимым 
							для отдыха и работы широкого круга людей. 
							Номера восхищают дизайном и современной техникой.
						</p>
						<p class="card-action__price">3500<span>руб/сутки</span></p>
						<a href="#" class="card-action__btn btn">Подробнее</a>
					</div>
				</div>

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
