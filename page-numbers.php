<?php 

/*
Template Name: Страница Номера
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="card-action-sec recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1><?php the_title();?></h1>

			<div class="card-action__body">
					<?php
				$page_children = new WP_Query(
					array(
						'post_type' => 'page',
						'post_parent' => '24',
						'order'       => 'ASC',
					)
				);
				if ($page_children->have_posts()) :
					while ($page_children->have_posts()) : $page_children->the_post();
						?>
						<div class="card-action__item d-flex">
							<div class="card-action__img">
								<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="">
							</div>
							<div class="card-action__descp">
								<h3 class="card-action__title title">
									<?php the_title(); ?>
								</h3>
								<p class="card-action__paragrafy"><?echo carbon_get_post_meta(get_the_ID(),"offer_smile_descr"); ?></p>
								<p class="card-action__price"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?><span>руб/сутки</span></p>
								<a href="<?php the_permalink(); ?>" class="card-action__btn btn">Подробнее</a> 
							</div>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_query();
				?>
			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
