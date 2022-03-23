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
        <a href="#" class="btnBlock__link">Салаты</a>
        <a href="#" class="btnBlock__link">Закуски</a>
        <a href="#" class="btnBlock__link">Первые блюда</a>
        <a href="#" class="btnBlock__link">Горячие блюда</a>
      </div>

      <div class="line-bg"></div>

      <div class="delivery-block">

        <h2 class="delivery-block__title">Салаты</h2>

        <div class="prodCard__row">

        <div class="prodCard__column">
          <div class="prodCard__box">
            <div class="prodCard__box-img">
              <img src="<?php echo get_template_directory_uri();?>/img/delivery/01.jpg" alt="">
            </div>
            <div class="prodCard__box-descp">
              <h4 class="prodCard__box-descp-title">САЛАТ ВИШНЯ</h4>
              <p class="prodCard__box-descp-subtitle">
                с говяжьей печенью
                печень, микс салатов
              </p>
              <div class="prodCard__box-descp-flex">
                <p class="prodCard__box-descp-flex-weight">215 г.</p>
                <p class="prodCard__box-descp-flex-price rub">360 </p>
              </div>
            </div>
          </div>
        </div>

        <div class="prodCard__column">
          <div class="prodCard__box">
            <div class="prodCard__box-img">
              <img src="<?php echo get_template_directory_uri();?>/img/delivery/02.jpg" alt="">
            </div>
            <div class="prodCard__box-descp">
              <h4 class="prodCard__box-descp-title">САЛАТ ВИШНЯ</h4>
              <p class="prodCard__box-descp-subtitle">
                с говяжьей печенью
                печень, микс салатов
              </p>
              <div class="prodCard__box-descp-flex">
                <p class="prodCard__box-descp-flex-weight">215 г.</p>
                <p class="prodCard__box-descp-flex-price rub">360 </p>
              </div>
            </div>
          </div>
        </div>

        <div class="prodCard__column">
          <div class="prodCard__box">
            <div class="prodCard__box-img">
              <img src="<?php echo get_template_directory_uri();?>/img/delivery/03.jpg" alt="">
            </div>
            <div class="prodCard__box-descp">
              <h4 class="prodCard__box-descp-title">САЛАТ ВИШНЯ</h4>
              <p class="prodCard__box-descp-subtitle">
                с говяжьей печенью
                печень, микс салатов
              </p>
              <div class="prodCard__box-descp-flex">
                <p class="prodCard__box-descp-flex-weight">215 г.</p>
                <p class="prodCard__box-descp-flex-price rub">360 </p>
              </div>
            </div>
          </div>
        </div>

        <div class="prodCard__column">
          <div class="prodCard__box">
            <div class="prodCard__box-img">
              <img src="<?php echo get_template_directory_uri();?>/img/delivery/04.jpg" alt="">
            </div>
            <div class="prodCard__box-descp">
              <h4 class="prodCard__box-descp-title">САЛАТ ВИШНЯ</h4>
              <p class="prodCard__box-descp-subtitle">
                с говяжьей печенью
                печень, микс салатов
              </p>
              <div class="prodCard__box-descp-flex">
                <p class="prodCard__box-descp-flex-weight">215 г.</p>
                <p class="prodCard__box-descp-flex-price rub">360 </p>
              </div>
            </div>
          </div>
        </div>

        </div>

      </div>

      <div class="delivery-block">

<h2 class="delivery-block__title">Горячие блюда</h2>

<div class="prodCard__row">

<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php echo get_template_directory_uri();?>/img/delivery/05.jpg" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title">РУЛЬКА ПО БАВАРСКИ</h4>
      <p class="prodCard__box-descp-subtitle">
        с говяжьей печенью
        печень, микс салатов
      </p>
      <div class="prodCard__box-descp-flex">
        <p class="prodCard__box-descp-flex-weight">215 г.</p>
        <p class="prodCard__box-descp-flex-price rub">360 </p>
      </div>
    </div>
  </div>
</div>

<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php echo get_template_directory_uri();?>/img/delivery/06.jpg" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title">ЖУЛЬЕН С КУРИЦЕЙ</h4>
      <p class="prodCard__box-descp-subtitle">
        с говяжьей печенью
        печень, микс салатов
      </p>
      <div class="prodCard__box-descp-flex">
        <p class="prodCard__box-descp-flex-weight">215 г.</p>
        <p class="prodCard__box-descp-flex-price rub">360 </p>
      </div>
    </div>
  </div>
</div>

<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php echo get_template_directory_uri();?>/img/delivery/07.jpg" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title">ЛОСОСЬ В СОУСЕ</h4>
      <p class="prodCard__box-descp-subtitle">
        с говяжьей печенью
        печень, микс салатов
      </p>
      <div class="prodCard__box-descp-flex">
        <p class="prodCard__box-descp-flex-weight">215 г.</p>
        <p class="prodCard__box-descp-flex-price rub">360 </p>
      </div>
    </div>
  </div>
</div>

<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php echo get_template_directory_uri();?>/img/delivery/08.jpg" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title">САЛАТ ВИШНЯ</h4>
      <p class="prodCard__box-descp-subtitle">
        с говяжьей печенью
        печень, микс салатов
      </p>
      <div class="prodCard__box-descp-flex">
        <p class="prodCard__box-descp-flex-weight">215 г.</p>
        <p class="prodCard__box-descp-flex-price rub">360 </p>
      </div>
    </div>
  </div>
</div>

</div>

<div class="delivery-block__descp room room_nopad">
  <?php the_content(); ?>
</div>

</div>

		</div>
	</section>

	<?php get_template_part('template-parts/contacts-section');?>

	<?php get_template_part('template-parts/map-section');?>

</main>

<?php get_footer(); 
