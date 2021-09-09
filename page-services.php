<?php 

/*
Template Name: Страница Наши услуги
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="services-card-sec recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1>Наши услуги</h1>

			<div class="services__row d-flex">

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Панорамная беседка <br>
						над водой
					</h4>
				</div>		

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Бассейн и <br>
						SPA комплекс
					</h4>
				</div>		

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Дом для Всей <br>
						семьи
					</h4>
				</div>		

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Рыбалка на осетров и <br>
						ГрильДом
					</h4>
				</div>		

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Оборудованные <br>
						Конференц-залы
					</h4>
				</div>		

				<div class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Ресторан <br>
						Банкетный зал
					</h4>
				</div>		

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
