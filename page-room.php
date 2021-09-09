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
				<div class="slider-room__img">
					<img src="<?php echo get_template_directory_uri();?>/img/room/room-sl-01.jpg" alt="">
				</div>
				<div class="slider-room__img">
					<img src="<?php echo get_template_directory_uri();?>/img/room/room-sl-01.jpg" alt="">
				</div>
				<div class="slider-room__img">
					<img src="<?php echo get_template_directory_uri();?>/img/room/room-sl-01.jpg" alt="">
				</div>
				<div class="slider-room__img">
					<img src="<?php echo get_template_directory_uri();?>/img/room/room-sl-01.jpg" alt="">
				</div>
				<div class="slider-room__img">
					<img src="<?php echo get_template_directory_uri();?>/img/room/room-sl-01.jpg" alt="">
				</div>
			</div>

			<div class="room__specific specific__row d-flex">
				<div class="room__specific-item-icon specific-item room__specific-item-icon_01 d-flex">
					23 м2
				</div> 

				<div class="room__specific-item-icon specific-item room__specific-item-icon_02 d-flex">
					3 места
				</div>

				<div class="room__specific-item-icon specific-item room__specific-item-icon_03 d-flex">
					2 комнаты
				</div>
			</div>

			<p>
				Прекрасные и уютные номера ,оснащены всем необходимым для отдыха и работы широкого круга людей.
				Номера восхищают дизайном и современной техникой. Общая площадь 13 кв.м. Номера оснащены двумя кроватями (90смх195см) 
				с гипоаллергенным матрацем и постельным бельём высокого качества.
			</p>
			<p>
				Объемные и удобные кресла располагают к чтению и комфорту. Картины с видом города дополняют оформление комнат, 
				придавая очарование традиционного дизайна.
			</p>
			<p>
				Гостей ждет богатство использованных в отделке материалов, рабочий стол, бесплатный Интернет.
			</p>
			<p>
				Ванная комната оборудованна душем , декорированна зеркалами, пол  с подогревом. В распоряжении гостей махровые  халаты, 
				тапочки, а также фирменные косметические принадлежности.
			</p>

			<h2>В стоимость входит</h2>

			<ul>
				<li>Завтрак «шведский стол»</li>
				<li>Бесплатный высокоскоростной Wi-Fi доступ в Интернет</li>
				<li>Побудка к определенному времени</li>
				<li>Минеральная вода</li>
				<li>Чайные принадлежности</li>
				<li>Сейф</li>
			</ul>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
