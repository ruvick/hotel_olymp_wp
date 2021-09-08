<header id="header" class="header">
	<div class="header__container container">

		<div class="header__row d-flex">

			<a href="index.html" class="header__logo logo-icon"></a>

			<div class="header__nav-block">

				<div class="header__menu menu">
					<nav class="menu__body">
						<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?> 
					</nav>
				</div>

				<a href="#" class="header__btn btn">Забронировать</a>

				<div class="header__lang-switch d-flex">
					<button class="header__lang-switch-ru">Ru</button>
					<span class="header__lang-switch-delimiter">/</span>
					<button class="header__lang-switch-en">En</button>
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