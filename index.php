<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section id="about" class="slider-about about">
		<?
		$pict = carbon_get_theme_option('slider_index');
		if ($pict) {
			$pictIndex = 0;
			foreach ($pict as $item) {
				?>
				<div class="slider-about__item"><img src="<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>" alt=""></div>
				<?
				$pictIndex++;
			}
		}
		?>
	</section> 

	<section id="greetings" class="greetings">
		<div class="container"> 

			<div class="greetings__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<h1 class="greetings__title title"><?php echo carbon_get_theme_option('about_home_title'); ?></h1>
				<p><?php echo carbon_get_theme_option('about_home'); ?></p>
			</div>

			<div class="greetings__icon-block d-flex">

				<div class="advant__item advant-icon-01">
					<h5>
						Охраняемая и просторная <br> территория
					</h5>
				</div>

				<div class="advant__item advant-icon-02">
					<h5>
						Отдых для всей семьи
					</h5>
				</div>

				<div class="advant__item advant-icon-03">
					<h5>
						SPA-комплекс <br> + бассейн 20 м
					</h5>
				</div>

				<div class="advant__item advant-icon-04">
					<h5>
						Ресторан европейской <br> кухни
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

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); ?> 