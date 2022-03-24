<?php 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="recurring" class="services-card-sec recurring">
		<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1>Доставка из нашего ресторана</h1>

      <div class="btnBlock">
      <?php 
        $terms = get_terms(
          array(
            'taxonomy'   => 'ultracat',
            'orderby' => 'count',
            'order' => 'ESC',
            'hide_empty' => false,
            )
          );
          if ( ! empty( $terms ) && is_array( $terms ) ) {
            foreach ( $terms as $term ) { 
              $curTerm = $wp_query->queried_object;
              $class = ( $term->name == $curTerm->name ) ? 'btnBlock__link_active' : '';
              ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="btnBlock__link <?php echo $class; ?>">
                <?php echo $term->name; ?>
              </a>
              <?php
            }
          } 
        ?>
      </div>

      <div class="line-bg"></div>

      <div class="delivery-block">

        <h2 class="delivery-block__title"><?php single_cat_title( '', true );?></h2>

        <div class="prodCard__row">
          <?php
				    while(have_posts()):
					    the_post();
					    get_template_part('template-parts/product-elem');  
				    endwhile;
				  ?>
        </div>

      </div>

      <div class="delivery-block__descp room room_nopad">
        <?php the_content(); ?>
      </div>

      <a href="tel:89202601400" class="delivery-block__descp-link btn">Сделать заказ</a>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
