<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php echo get_template_directory_uri();?>/img/delivery/01.jpg" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title"><? the_title();?></h4>
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


<!-- <div class="prod-card__body d-flex">
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
		<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
	</a>

	<div class="prod-card__text d-flex">
		<h4><? the_title();?></h4>
		<p class="prod-card__price"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</p>
	</div>
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__btn btn"><? echo pll_e("Подробнее") ?></a> 
</div> -->