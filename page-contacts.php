<?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );    
			}
			?> 

			<div class="contacts__row d-flex">

				<div class="contacts__col">
					<h1><? the_title();?></h1>  

					<ul>
						<li>307250, Россия, п. Иванино, ул. Ленина, 26</li>
						<li>Широта: 51°39′5.72″N (51.651588)</li>
						<li>Долгота: 35°35′7.71″E (35.585474)</li>
						<li><a href="tel:7(47131)21251">+7 (47131) 2-12-51</a></li>
						<li><a href="tel:7(47131)21255">+7 (47131) 2-12-55</a></li>
						<li><a href="mailto:gk.energotex@mail.ru">gk.energotex@mail.ru</a></li>
					</ul>
				</div>

				<div class="contacts__col">
					<h2>Заказать обратный звонок</h2>
					<div class="SendetMsg" style="display:none;">
						Ваше сообщение успешно отправлено.
					</div>
					<div class="headen_form_blk">
						<form action="#" class="contacts__form">
							<input type="text" name="name" placeholder="Имя" id="form-callback-name" class="contacts__input input">
							<input type="tel" name="tel" placeholder="Телефон" id="form-callback-tel" class="contacts__input-phone input__phone">
							<div class="contacts__form-check check">
								<input type="checkbox" value="1" name="form[]"> 
								<p>
									Я даю согласие с политикой конфиденциальности <br>
									и обработки персональных данных
								</p>
							</div>
							<button class="contacts__btn newButton btn">Отправить</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
