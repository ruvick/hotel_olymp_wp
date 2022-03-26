<?php 

/*
Template Name: Страница Доставка
Template Post Type: page
*/

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
            $cat_index = 0;
            foreach ( $terms as $term ) { 
              // $curTerm = $wp_query->queried_object;
              // $class = ( $term->name == $curTerm->name ) ? 'btnBlock__link_active' : '';
              ?>
                <a href="#razdel_menu_<?echo $cat_index;?>" class="btnBlock__link">
                  <?php echo $term->name; ?>
                </a>
              <?php
              $cat_index++;
            }
          } 
        ?>
      </div>



      <div class="line-bg"></div>
          
      <? 
        if ( ! empty( $terms ) && is_array( $terms ) ) {
          $cat_index = 0;
          foreach ( $terms as $term ) { 
      ?> 
        <div class="delivery-block">
          <h2 id = "razdel_menu_<?echo $cat_index;?>" class="delivery-block__title"><?php echo $term->name; ?></h2>
          <div class="prodCard__row"> 
              <?
                			// $my_posts = get_posts( array(
                      //   'numberposts' => -1,
                      //   'post_type'   => 'ultra',
                      //   'category' => $term->term_id
                      // ) );
                
                      $my_posts = new WP_Query( array(
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'ultracat',
                            'field'    => 'id',
                            'terms'    => $term->term_id
                          )
                        )
                      ) );
                      // foreach ($my_posts->posts as $element) {
                      //   $param = ["element" => $element];
                      //   get_template_part('template-parts/product', 'elem', $param); 
                      // }

                      while ( $my_posts->have_posts() ) {
                        $my_posts->the_post();
                      
                        get_template_part('template-parts/product', 'elem'); 
                      }
                      wp_reset_postdata();
              ?>
          </div>
        </div>
      <?
            $cat_index++;
          }
        }
      ?>



      <div class="delivery-block">

<div class="delivery-block__descp room room_nopad">
  <?php the_content(); ?>
</div>

<a href="tel:89202601400" class="delivery-block__descp-link btn">Сделать заказ</a>

</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
