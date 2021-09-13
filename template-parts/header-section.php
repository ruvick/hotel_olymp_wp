<header id="header" class="header">
	<div class="header__container container">

		<div class="header__row d-flex">

			<a href="http://hotel-olymp.ruvick.site" class="header__logo logo-icon"></a>

			<div class="header__nav-block">

				<div class="header__menu menu">
					<nav class="menu__body">
						<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?> 
					</nav>
				</div> 

				<a href="#reserv" class="header__btn _popup-link btn">Забронировать</a>

				<div class="header__lang-switch d-flex">
					<a href = "<? echo get_url_switcher("ru");?>" class="header__lang-switch-ru">Ru</a>
					<span class="header__lang-switch-delimiter">/</span>
					<a href = "<? echo get_url_switcher("en");?>" class="header__lang-switch-en">En</a>
				</div>

				


				<div class="menu__icon icon-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div>

		</div>

	</div>
</header>

<nav class="mob-menu">
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
	'container_class' => 'mob-menu__list','container' => false )); ?> 
</nav>