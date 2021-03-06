<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-Сallback -->
<div class="popup popup_reserv"> 
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
			<div class="popup__item d-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/popup-img.jpg" alt="">
				<div class="popup__form-block">
					<h2><? echo pll_e("Заявка на обратный звонок");?></h2>
					<div class="SendetMsg" style="display:none;"> 
					<? echo pll_e("Ваше сообщение успешно отправлено.");?>
					</div>
					<div class="headen_form_blk">
						<p><? echo pll_e("Оставьте заявку и мы свяжемся с Вами в течении 15 минут");?></p> 
						<form action="#" class="popup__form">
							<input type="text" name="name" placeholder="<? echo pll_e("Имя");?>" id="form-reserv-name" class="popup__form-input input">
							<input type="tel" name="tel" placeholder="<? echo pll_e("Телефон");?>*" id="form-reserv-tel" class="popup__form-input input">
							<input type="text" name="email" placeholder="Email" id="form-reserv-email" class="popup__form-input input">
							<p><? echo pll_e("Заполняя данную форму вы соглашаетесь с");?> <a href="<?php echo get_permalink(452); ?>"><? echo pll_e("политикой конфиденциальности");?></a></p>
							<button class="popup__form-btn reservBtn btn"><? echo pll_e("Отправить заявку") ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->

<!-- Popup-Reserv -->
<div class="popup popup_reserv-number"> 
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
			<div class="popup__item d-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/reserv-number.jpg" alt="">
				<div class="popup__form-block popup__form-block-reserv">
					<h2><? echo pll_e("Заявка на обратный звонок");?></h2>
					<div class="SendetMsg" style="display:none;"> 
					<? echo pll_e("Ваше сообщение успешно отправлено.");?>
					</div>
					<div class="headen_form_blk">
						<p><? echo pll_e("Оставьте заявку и мы свяжемся с Вами в течении 15 минут");?></p> 
						<form action="#" class="popup__form reserv-number-form">
							<input type="text" name="name" placeholder="<? echo pll_e("Имя");?>" id="form-reserv-name-r" class="popup__form-input input">
							<input type="tel" name="tel" placeholder="<? echo pll_e("Телефон");?>*" id="form-reserv-tel-r" class="popup__form-input input">
							<input type="date" name="data" placeholder="Дата заезда" id="form-reserv-Ndata" class="popup__form-input reserv-number__data input">
							<select name="form[]" id="reserv-number-select" class="reserv-number__select input">
								<option value="Выберите номер">Выберите номер</option>
								<option value="Номер Lux" option="1">Номер Lux</option>
								<option value="Номер Джуниор СЮИТ" option="2">Номер Джуниор СЮИТ</option>
								<option value="Номер СТАНДАРТ" option="3">Номер СТАНДАРТ</option>
							</select>
							<p><? echo pll_e("Заполняя данную форму вы соглашаетесь с");?> <a href="<?php echo get_permalink(452); ?>"><? echo pll_e("политикой конфиденциальности");?></a></p>
							<button class="popup__form-btn reservNumbBtn btn"><? echo pll_e("Отправить заявку") ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->

<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close"><? _e("закрыть", "rubex"); ?></div>

		<div class="modalline" id="lineIcon">
		</div>

		<div class="modalline" id="lineMsg">
		</div>
	</div>
</div>

<div style="display: none;">
	<div class="box-modal box-modal-new box-modal-new__cust" id="question">
		<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
		<img src="<?php bloginfo("template_url") ?>/img/similar-01.jpg" loading="lazy" />
		<div class="formArctikBlk mod-zagr-tur">
			<h2>Заказать звонок <span class='tkName'></span></h2>
			<p>Наши специалисты свяжутся с Вами в течение 15 минут</p>

			<form action="#" class="form-question">
				<div class="SendetMsg" style="display:none">
					Ваше сообщение успешно отправлено.
				</div>
				<div class="headen_form_blk">
					<input type="text" name="name" placeholder="Имя*" id="form-question-name" class="form-question__input input">
					<input type="tel" name="tel" placeholder="Телефон*" id="form-question-tel" class="form-question__input input">
				</div>
				<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312); ?>">условиями обработки персональных данных</a>.</div>
				<button type="submit" class="newButton btn">Отправить</button>
			</form>

		</div>
	</div>
</div>