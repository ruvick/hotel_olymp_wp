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
				<div class="slider-about__item">
					<img src="<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>" class="slider-about__item-pc" alt="">
					<img src="<?php echo wp_get_attachment_image_src($item['slider_img_mob'], 'full')[0]; ?>" class="slider-about__item-mob" alt="">
				</div>
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
				<h1 class="greetings__title title"><?php echo carbon_get_theme_option(get_feild_translate('about_home_title')); ?></h1>
				<p><?php echo carbon_get_theme_option(get_feild_translate('about_home')); ?></p>
			</div>

			<div class="greetings__icon-block d-flex">

				<div class="advant__item advant-icon-01">
					<h5>
						<? echo pll_e("Охраняемая и просторная <br> территория") ?>
					</h5>
				</div>

				<div class="advant__item advant-icon-02">
					<h5>
						<? echo pll_e("Отдых для <br> всей семьи") ?>
					</h5>
				</div>

				<div class="advant__item advant-icon-03">
					<h5>
						<? echo pll_e("SPA-комплекс <br> + бассейн 20 м") ?>
					</h5>
				</div>

				<div class="advant__item advant-icon-04">
					<h5>
						<? echo pll_e("Ресторан европейской <br> кухни") ?>
					</h5>
				</div>

			</div>

		</div>
	</section>

	<section id="stock" class="stock">
		<div class="container">
			<h2><? echo pll_e("Акции и спецпредложения") ?></h2>
			<?php $stock = carbon_get_theme_option('stock_complex');
			if (!empty($stock)) : ?>
				<?php foreach ($stock as $item) : ?>
					<?php if (!empty($item['checkbox_stock'])) {
						echo'<div class="card-img__row d-flex">
									<a href=" ' . wp_get_attachment_image_src($item["stock_img_1"], "full")[0] . ' " data-lightbox="gallery" class="stock__card-img card-img" style="background-image: url(' . wp_get_attachment_image_src($item["stock_img_1"], "full")[0] . ');">
										<div class="card-img__nuar"></div>
										<h4>' . $item[get_feild_translate('stock_title_1')] . '</h4>
									</a>		

									<a href=" ' . wp_get_attachment_image_src($item["stock_img_2"], "full")[0] . ' " data-lightbox="gallery" class="stock__card-img card-img" style="background-image: url(' . wp_get_attachment_image_src($item["stock_img_2"], "full")[0] . ');">
										<div class="card-img__nuar"></div>
										<h4>' . $item[get_feild_translate('stock_title_2')] . '</h4>
									</a>		
								</div>';
					} else {
						echo '<a href=" ' . wp_get_attachment_image_src($item["stock_img"], "full")[0] . ' " data-lightbox="gallery" class="card-img card-img__wide" style="background-image: url(' . wp_get_attachment_image_src($item["stock_img"], "full")[0] . ');">
										<div class="card-img__nuar"></div>
										<h4>' . $item[get_feild_translate('stock_title')] . '</h4>
									</a>';
					}
					?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>

	<section id="impressions" class="impressions">
		<div class="container">

			<div class="impressions__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_2" alt="">
				<h2 class="impressions__title title"><? echo pll_e("Незабываемое торжество в Ресторане «Олимп»") ?></h2>
				<a href="<?php echo get_permalink(40);?>" class="impressions__btn btn"><? echo pll_e("Подробнее") ?></a>
			</div>

		</div>
	</section>

	<section id="offers" class="offers">
		<div class="container">

			<h2 class="offers__title title"><? echo pll_e("Предложения для наших клиентов") ?></h2>

			<div class="card-img__row d-flex">

				<a href = "<? echo pll_get_permalink(48); ?>" class="offers__card-img card-img">
					<!-- <div class="card-img__nuar"></div> -->
					<h4>
					<? echo pll_e("Панорамная <br/>беседка над водой");?>
					</h4>
				</a>
				
				<a href = "<? echo pll_get_permalink(52); ?>" class="offers__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Бассейн и <br/>SPA комплекс");?>
					</h4>
				</a>

				<a href = "<? echo pll_get_permalink(60); ?>" class="offers__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Оборудованные <br/>конференц-залы");?>
					</h4>
				</a>

				<a href = "<? echo pll_get_permalink(64); ?>" class="offers__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Дом для <br/>всей семьи");?>
					</h4>
				</a>

				<a href = "<? echo pll_get_permalink(68); ?>" class="offers__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Ресторан <br/>Банкетный зал");?>
					</h4>
				</a>

				<a href = "<? echo pll_get_permalink(68); ?>" class="offers__card-img card-img">
					<div class="card-img__nuar"></div>
					<h4>
					<? echo pll_e("Рыбалка на <br/>озере");?>
					</h4>
				</a>

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/applic-section');?>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); ?> 