	<section id="contacts-bg" class="contacts-bg">
		<div class="container">
			<div class="contacts-bg__text-block text-block">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_2" alt="">
				<img src="<?php echo get_template_directory_uri();?>/img/text-block-logo.png" class="text-block__logo text-block__logo_3" alt="">
				<div class="contacts-bg__row d-flex">
					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Бронирование</h3>
						<? $tel1 = carbon_get_theme_option("as_phone_1"); if (!empty($tel1)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel1); ?>" class="contacts-bg__tel"><? echo $tel1; ?></a><?}?> 
					</div>
					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Ресторан</h3>
						<? $tel2 = carbon_get_theme_option("as_phone_2"); if (!empty($tel2)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>" class="contacts-bg__tel"><? echo $tel2; ?></a><?}?> 
					</div>
					<div class="contacts-bg__col">
						<h3 class="contacts-bg__title title">Конференц-зал</h3>
						<? $tel3 = carbon_get_theme_option("as_phone_3"); if (!empty($tel3)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel3); ?>" class="contacts-bg__tel"><? echo $tel3; ?></a><?}?> 
					</div>
				</div>
			</div>
		</div>
	</section>