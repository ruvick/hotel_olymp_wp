<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section id="about" class="slider-about about">
		<div class="slider-about__item"><img src="<?php echo get_template_directory_uri();?>/img/about-bg.jpg" alt=""></div>
		<div class="slider-about__item"><img src="<?php echo get_template_directory_uri();?>/img/about-bg-2.jpg" alt=""></div>
		<div class="slider-about__item"><img src="<?php echo get_template_directory_uri();?>/img/about-bg-3.jpg" alt=""></div>
	</section>

	<section id="greetings" class="greetings">
		<div class="container"> 

			<div class="greetings__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<h1 class="greetings__title title">Добро пожаловать в отель «Олимп»</h1>
				<p>
					Отель состоит из двух корпусов. Второй корпус построен и запущен в 2021 году. Общее количество номеров 56. Это современный и элегантный отель, 
					ориентированный на деловых людей и туристов, обеспечивает комфортное проживание в роскошных номерах, оформленных в классическом стиле. Для гостей есть 
					возможность посетить изысканный ресторан, а так же в распоряжении наших гостей бассейн и SPA зона. Изысканное сочетание классического комфорта - вот то, 
					что привлекает гостей отеля.
				</p>
			</div>

			<div class="greetings__icon-block d-flex">

				<div class="advant__item advant-icon-01">
					<h5>
						Ухоженная охраняемая территория
					</h5>
				</div>

				<div class="advant__item advant-icon-02">
					<h5>
						Отдых для всей самьи
					</h5>
				</div>

				<div class="advant__item advant-icon-03">
					<h5>
						Собственный SPA комплекс
					</h5>
				</div>

				<div class="advant__item advant-icon-04">
					<h5>
						Ресторан c уникальным меню
					</h5>
				</div>

			</div>

		</div>
	</section>

	<section id="stock" class="stock">
		<div class="container">
			<h2>Акции и спецпредложения</h2>

			<div class="card-img__row d-flex">
				
				<div class="stock__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Романтические <br>
						выходные в Олимпе
					</h4>
				</div>		

				<div class="stock__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Посещение бассейна <br>
						при заказе сауны
					</h4>
				</div>		

				<div class="stock__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Незабываемая <br>
						свадебная церемония
					</h4>
				</div>		

				<div class="stock__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
						Рыбалка <br>
						гриль дом 
					</h4>
				</div>		

			</div>

		</div>
	</section>

	<section id="impressions" class="impressions">
		<div class="container">

			<div class="impressions__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_2" alt="">
				<h2 class="impressions__title title">Незабываемое торжество в  ресторане «Олимп»</h2>
				<p>
					Только самая изысканная кухня, богатый выбор блюд и напитков.
				</p>
			</div>

		</div>
	</section>

	<section id="offers" class="offers">
		<div class="container">

			<h2 class="offers__title title">Предложения для наших клиентов</h2>

			<div class="card-img__row d-flex">
				
				<div class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
						Панорамная <br>
						беседка над водой
					</h4>
				</div>		

				<div class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
						Бассейн и <br>
						SPA комплекс
					</h4>
				</div>		

				<div class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
						Ресторан <br>
						Банкетный зал
					</h4>
				</div>		

				<div class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
						Оборудованные <br>
						конференц-залы
					</h4>
				</div>		

				<div class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
						Дом для <br>
						всей семьи
					</h4>
				</div>		

			</div>

		</div>
	</section>

	<section id="contacts-bg" class="contacts-bg">
		<div class="container">

			<div class="contacts-bg__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_2" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_3" alt="">
				<div class="contacts-bg__row d-flex">

					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Бронирование</h3>
						<a href="tel:+79009388033" class="contacts-bg__tel">+7 900 938 80 33</a>
					</div>

					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Ресторан</h3>
						<a href="tel:+79009388033" class="contacts-bg__tel">+7 900 938 80 33</a>
					</div>

					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Конференц-зал</h3>
						<a href="tel:+79009388033" class="contacts-bg__tel">+7 900 938 80 33</a>
					</div>

				</div>

			</div>

		</div>
	</section>

	<section id="index-map" class="index-map">
		<div class="container">
			<div id="map" class="index-map__map map"></div>
		</div>
	</section>

</main>

<?php get_footer(); ?> 