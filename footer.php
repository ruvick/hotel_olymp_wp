		<footer id="footer" class="footer">
			<div class='footer__container container'>
				
				<div class="footer__row d-flex">

					<a href="<?bloginfo("url");?>" class="footer__logo logo-icon"></a>

					<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu menu__list',
					'container_class' => 'footer__menu menu__list','container' => false )); ?> 

					<div class="footer__line"></div>

					<div class="soc-block-icon">
						<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="soc-block-icon-link soc-icon-1"></a>
						<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="soc-block-icon-link soc-icon-2"></a>
						<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="soc-block-icon-link soc-icon-3"></a>
						<a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="soc-block-icon-link soc-icon-4"></a>
					</div> 

				</div>

			</div>
		</footer>
	</div>

	<?php wp_footer(); ?> 
</body>
</html>