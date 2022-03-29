<div class="prodCard__column">
  <div class="prodCard__box">
    <div class="prodCard__box-img">
      <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="">
    </div>
    <div class="prodCard__box-descp">
      <h4 class="prodCard__box-descp-title"><? the_title();?></h4>
      <? $smileDesc = carbon_get_post_meta(get_the_ID(),"offer_smile_descr");	
				if (!empty($smileDesc)) { ?>
          <p class="prodCard__box-descp-subtitle"><? echo $smileDesc; ?></p>
			<? } ?>
      <div class="prodCard__box-descp-flex">
        <? $weight = carbon_get_post_meta(get_the_ID(),"offer_weight");	
						if (!empty($weight)) { ?>
            <p class="prodCard__box-descp-flex-weight"><? echo $weight; ?> г.</p>
				<? } ?>
        <? $offerPrice = carbon_get_post_meta(get_the_ID(),"offer_price");	
						if (!empty($offerPrice)) { ?>
            <p class="prodCard__box-descp-flex-price rub"><? echo $offerPrice; ?> </p>
				<? } ?>
      </div>
    </div>
  </div>
</div>			
