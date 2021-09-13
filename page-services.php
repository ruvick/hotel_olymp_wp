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

			<h1><?php the_title();?></h1>

			<div class="services__row d-flex">

				<a href = "<? echo pll_get_permalink(48); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Панорамная <br/>беседка над водой");?>
					</h4>
				</a>		 

				<a href = "<? echo pll_get_permalink(52); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Бассейн и <br/>SPA комплекс");?>
					</h4>
				</a>		 

				<a href = "<? echo pll_get_permalink(64); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Дом для <br/>всей семьи");?>
					</h4>
				</a>		 

				<a href = "<? echo pll_get_permalink(68); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Гриль Hous и <br/>рыбалка");?>
					</h4>
				</a>		 

				<a href = "<? echo pll_get_permalink(60); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Оборудованные <br/>конференц-залы");?>
					</h4>
				</a>		 

				<a href = "<? echo pll_get_permalink(40); ?>" class="services__card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Ресторан <br/>Банкетный зал");?>
					</h4>
				</a>		 

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
