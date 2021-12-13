// Файлы Java Script -----------------------------------------------------------------------------------------------------

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}


function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

function set_size(sizeName) {
	let btn = document.getElementById('btn__to-card');
	btn.dataset.size = sizeName;
	console.log(sizeName);
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
	cart_recalc();
});

//--- Корзина -------------------------------------------------------------------------------------------------------------

let cart = [];
let cartCount = 0;

function cart_recalc() {
	cart = JSON.parse(localStorage.getItem("cart"));
	if (cart == null) cart = [];
	cartCount = 0;
	cartSumm = 0;
	for (let i = 0; i < cart.length; i++) {
		cartCount += Number(cart[i].count);

		cartSumm += Number(cart[i].count) * parseFloat(cart[i].price);
	}

	localStorage.setItem("cartcount", cartCount);
	localStorage.setItem("cartsumm", cartSumm);

	let elements = document.querySelectorAll('.bascet_counter');
	for (let elem of elements) {
		elem.innerHTML = cartCount;
	}

}

function add_tocart(elem, countElem) {


	let cartElem = {
		sku: elem.dataset.sku,
		size: elem.dataset.size,
		lnk: elem.dataset.lnk,
		price: elem.dataset.price,
		priceold: elem.dataset.oldprice,
		subtotal: elem.dataset.price,
		name: elem.dataset.name,
		count: (countElem == 0) ? elem.dataset.count : countElem,
		picture: elem.dataset.picture
	};

	if (cart.length == 0) {
		cart.push(cartElem);
	} else {
		let addet = true;
		for (let i = 0; i < cart.length; i++) {
			if ((cart[i].sku == cartElem.sku) && (cart[i].size == cartElem.size)) {
				cart[i].count++;
				cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
				addet = false;
				break;
			}
		}

		if (addet)
			cart.push(cartElem);
	}

	localStorage.setItem("cart", JSON.stringify(cart));
	cart_recalc();

	console.log(cartElem);
}
//------------------------------------------------------------------------------------------------------------


const iconMenu = document.querySelector(".icon-menu");
const body = document.querySelector("body");
const menuBody = document.querySelector(".mob-menu");
const menuListItemElems = document.querySelector(".mob-menu__list");
const mobsearch = document.querySelector(".mob-search");
const headsearch = document.querySelector(".header__search");

//BURGER
if (iconMenu) {
	iconMenu.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}

// Закрытие моб меню при клике на якорную ссылку
if (menuListItemElems) {
	menuListItemElems.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}


// Закрытие моб меню при клике вне области меню 
window.addEventListener('click', e => { // при клике в любом месте окна браузера
	const target = e.target // находим элемент, на котором был клик
	if (!target.closest('.icon-menu') && !target.closest('.mob-menu') && !target.closest('.mob-search') && !target.closest('.header__search') && !target.closest('._popup-link') && !target.closest('.popup')) { // если этот элемент или его родительские элементы не окно навигации и не кнопка
		iconMenu.classList.remove('active') // то закрываем окно навигации, удаляя активный класс
		menuBody.classList.remove('active')
		body.classList.remove('lock')
	}
})

// Плавная прокрутка
const smotScrollElems = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

smotScrollElems.forEach(link => {
	link.addEventListener('click', (event) => {
		event.preventDefault()
		console.log(event);

		const id = link.getAttribute('href').substring(1)
		console.log('id : ', id);

		document.getElementById(id).scrollIntoView({
			behavior: 'smooth'
		});
	})
});


// Отправка на печать -------------------------------------------------------------------------------------------------------------
function printit() {
	if (window.print) {
		window.print();
	} else {
		var WebBrowser =
			'<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
		document.body.insertAdjacentHTML("beforeEnd", WebBrowser);
		WebBrowser1.ExecWB(6, 2); //Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = "";
	}
}

// Отправка на генерацию PDF -------------------------------------------------------------------------------------------------------------
function generatePDF() {
	const element = document.getElementById('body');
	const opt = {
		margin: 1,
		filename: 'file.pdf',
		image: { type: 'jpeg', quality: 0.98 },
		html2canvas: { scale: 1 },
		jsPDF: { unit: 'in', format: 'a2', orientation: 'portrait' }
	};

	// New Promise-based usage:
	html2pdf().set(opt).from(element).save();
}

{/* <a href="#" class="card-wrap-properties-links-link" onclick="generatePDF();">Скачать страницу в PDF</p></a> */ }
// ----------------------------------------------------------------------------------------------------------------------------------------

//BodyLock для Popup на JS
function body_lock(delay) {
	let body = document.querySelector("body");
	if (body.classList.contains('lock')) {
		body_lock_remove(delay);
	} else {
		body_lock_add(delay);
	}
}
function body_lock_remove(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		setTimeout(() => {
			for (let index = 0; index < lock_padding.length; index++) {
				const el = lock_padding[index];
				el.style.paddingRight = '0px';
			}
			body.style.paddingRight = '0px';
			body.classList.remove("lock");
		}, delay);

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}
function body_lock_add(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		for (let index = 0; index < lock_padding.length; index++) {
			const el = lock_padding[index];
			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		}
		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.classList.add("lock");

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}

// Popup JS
let unlock = true;
let popup_link = document.querySelectorAll('._popup-link');
let popups = document.querySelectorAll('.popup');
for (let index = 0; index < popup_link.length; index++) {
	const el = popup_link[index];
	el.addEventListener('click', function (e) {
		if (unlock) {
			let item = el.getAttribute('href').replace('#', '');
			let video = el.getAttribute('data-video');
			popup_open(item, video);
		}
		e.preventDefault();
	})
}
for (let index = 0; index < popups.length; index++) {
	const popup = popups[index];
	popup.addEventListener("click", function (e) {
		if (!e.target.closest('.popup__body')) {
			popup_close(e.target.closest('.popup'));
		}
	});
}
function popup_open(item, video = '') {
	let activePopup = document.querySelectorAll('.popup._active');
	if (activePopup.length > 0) {
		popup_close('', false);
	}
	let curent_popup = document.querySelector('.popup_' + item);
	if (curent_popup && unlock) {
		if (video != '' && video != null) {
			let popup_video = document.querySelector('.popup_video');
			popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}
		if (!document.querySelector('.menu__body._active')) {
			body_lock_add(500);
		}
		curent_popup.classList.add('_active');
		history.pushState('', '', '#' + item);
	}
}
function popup_close(item, bodyUnlock = true) {
	if (unlock) {
		if (!item) {
			for (let index = 0; index < popups.length; index++) {
				const popup = popups[index];
				let video = popup.querySelector('.popup__video');
				if (video) {
					video.innerHTML = '';
				}
				popup.classList.remove('_active');
			}
		} else {
			let video = item.querySelector('.popup__video');
			if (video) {
				video.innerHTML = '';
			}
			item.classList.remove('_active');
		}
		if (!document.querySelector('.menu__body._active') && bodyUnlock) {
			body_lock_remove(500);
		}
		history.pushState('', '', window.location.href.split('#')[0]);
	}
}
let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
if (popup_close_icon) {
	for (let index = 0; index < popup_close_icon.length; index++) {
		const el = popup_close_icon[index];
		el.addEventListener('click', function () {
			popup_close(el.closest('.popup'));
		})
	}
}
document.addEventListener('keydown', function (e) {
	if (e.code === 'Escape') {
		popup_close();
	}
});


//Select
// let selects = document.getElementsByTagName('select');
// if (selects.length > 0) {
// 	selects_init();
// }
// function selects_init() {
// 	for (let index = 0; index < selects.length; index++) {
// 		const select = selects[index];
// 		select_init(select);
// 	}
// 	//select_callback();
// 	document.addEventListener('click', function (e) {
// 		selects_close(e);
// 	});
// 	document.addEventListener('keydown', function (e) {
// 		if (e.code === 'Escape') {
// 			selects_close(e);
// 		}
// 	});
// }
// function selects_close(e) {
// 	const selects = document.querySelectorAll('.select');
// 	if (!e.target.closest('.select') && !e.target.classList.contains('_option')) {
// 		for (let index = 0; index < selects.length; index++) {
// 			const select = selects[index];
// 			const select_body_options = select.querySelector('.select__options');
// 			select.classList.remove('_active');
// 			_slideUp(select_body_options, 100);
// 		}
// 	}
// }
// function select_init(select) {
// 	const select_parent = select.parentElement;
// 	const select_modifikator = select.getAttribute('class');
// 	const select_selected_option = select.querySelector('option:checked');
// 	select.setAttribute('data-default', select_selected_option.value);
// 	select.style.display = 'none';

// 	select_parent.insertAdjacentHTML('beforeend', '<div class="select select_' + select_modifikator + '"></div>');

// 	let new_select = select.parentElement.querySelector('.select');
// 	new_select.appendChild(select);
// 	select_item(select);
// }
// function select_item(select) {
// 	const select_parent = select.parentElement;
// 	const select_items = select_parent.querySelector('.select__item');
// 	const select_options = select.querySelectorAll('option');
// 	const select_selected_option = select.querySelector('option:checked');
// 	const select_selected_text = select_selected_option.text;
// 	const select_type = select.getAttribute('data-type');

// 	if (select_items) {
// 		select_items.remove();
// 	}

// 	let select_type_content = '';
// 	if (select_type == 'input') {
// 		select_type_content = '<div class="select__value icon-select-arrow"><input autocomplete="off" type="text" name="form[]" value="' + select_selected_text + '" data-error="Ошибка" data-value="' + select_selected_text + '" class="select__input"></div>';
// 	} else {
// 		select_type_content = '<div class="select__value icon-select-arrow"><span>' + select_selected_text + '</span></div>';
// 	}

// 	select_parent.insertAdjacentHTML('beforeend',
// 		'<div class="select__item">' +
// 		'<div class="select__title">' + select_type_content + '</div>' +
// 		'<div hidden class="select__options">' + select_get_options(select_options) + '</div>' +
// 		'</div></div>');

// 	select_actions(select, select_parent);
// }
// function select_actions(original, select) {
// 	const select_item = select.querySelector('.select__item');
// 	const selectTitle = select.querySelector('.select__title');
// 	const select_body_options = select.querySelector('.select__options');
// 	const select_options = select.querySelectorAll('.select__option');
// 	const select_type = original.getAttribute('data-type');
// 	const select_input = select.querySelector('.select__input');

// 	selectTitle.addEventListener('click', function (e) {
// 		selectItemActions();
// 	});

// 	function selectMultiItems() {
// 		let selectedOptions = select.querySelectorAll('.select__option');
// 		let originalOptions = original.querySelectorAll('option');
// 		let selectedOptionsText = [];
// 		for (let index = 0; index < selectedOptions.length; index++) {
// 			const selectedOption = selectedOptions[index];
// 			originalOptions[index].removeAttribute('selected');
// 			if (selectedOption.classList.contains('_selected')) {
// 				const selectOptionText = selectedOption.innerHTML;
// 				selectedOptionsText.push(selectOptionText);
// 				originalOptions[index].setAttribute('selected', 'selected');
// 			}
// 		}
// 		select.querySelector('.select__value').innerHTML = '<span>' + selectedOptionsText + '</span>';
// 	}
// 	function selectItemActions(type) {
// 		if (!type) {
// 			let selects = document.querySelectorAll('.select');
// 			for (let index = 0; index < selects.length; index++) {
// 				const select = selects[index];
// 				const select_body_options = select.querySelector('.select__options');
// 				if (select != select_item.closest('.select')) {
// 					select.classList.remove('_active');
// 					_slideUp(select_body_options, 100);
// 				}
// 			}
// 			_slideToggle(select_body_options, 100);
// 			select.classList.toggle('_active');
// 		}
// 	}
// 	for (let index = 0; index < select_options.length; index++) {
// 		const select_option = select_options[index];
// 		const select_option_value = select_option.getAttribute('data-value');
// 		const select_option_text = select_option.innerHTML;

// 		if (select_type == 'input') {
// 			select_input.addEventListener('keyup', select_search);
// 		} else {
// 			if (select_option.getAttribute('data-value') == original.value && !original.hasAttribute('multiple')) {
// 				select_option.style.display = 'none';
// 			}
// 		}
// 		select_option.addEventListener('click', function () {
// 			for (let index = 0; index < select_options.length; index++) {
// 				const el = select_options[index];
// 				el.style.display = 'block';
// 			}
// 			if (select_type == 'input') {
// 				select_input.value = select_option_text;
// 				original.value = select_option_value;
// 			} else {
// 				if (original.hasAttribute('multiple')) {
// 					select_option.classList.toggle('_selected');
// 					selectMultiItems();
// 				} else {
// 					select.querySelector('.select__value').innerHTML = '<span>' + select_option_text + '</span>';
// 					original.value = select_option_value;
// 					select_option.style.display = 'none';
// 				}
// 			}
// 			let type;
// 			if (original.hasAttribute('multiple')) {
// 				type = 'multiple';
// 			}
// 			selectItemActions(type);
// 		});
// 	}
// }
// function select_get_options(select_options) {
// 	if (select_options) {
// 		let select_options_content = '';
// 		for (let index = 0; index < select_options.length; index++) {
// 			const select_option = select_options[index];
// 			const select_option_value = select_option.value;
// 			if (select_option_value != '') {
// 				const select_option_text = select_option.innerHTML;
// 				select_options_content = select_options_content + '<div data-value="' + select_option_value + '" class="select__option">' + select_option_text + '</div>';
// 			}
// 		}
// 		return select_options_content;
// 	}
// }
// function select_search(e) {
// 	let select_block = e.target.closest('.select ').querySelector('.select__options');
// 	let select_options = e.target.closest('.select ').querySelectorAll('.select__option');
// 	let select_search_text = e.target.value.toUpperCase();

// 	for (let i = 0; i < select_options.length; i++) {
// 		let select_option = select_options[i];
// 		let select_txt_value = select_option.textContent || select_option.innerText;
// 		if (select_txt_value.toUpperCase().indexOf(select_search_text) > -1) {
// 			select_option.style.display = "";
// 		} else {
// 			select_option.style.display = "none";
// 		}
// 	}
// }
// function selects_update_all() {
// 	let selects = document.querySelectorAll('select');
// 	if (selects) {
// 		for (let index = 0; index < selects.length; index++) {
// 			const select = selects[index];
// 			select_item(select);
// 		}
// 	}
// }
// Файлы Java Script End -----------------------------------------------------------------------------------------------------

$ = jQuery;

// Файлы jQuery---------------------------------------------------------------------------------------------------------------

// Маска телефона
var inputmask_phone = { "mask": "+9(999)999-99-99" };
jQuery("input[type=tel]").inputmask(inputmask_phone);


// // Slider на главной
$('.slider-about').slick({
	arrows: false,
	dots: true,
	infinite: true,
	speed: 2000,
	slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
		responsive: [
		{
			breakpoint: 770,
			settings: {
				dots: false,
			}
		}
	]
});


// // Slider Номер
$('.slider-room').slick({
	arrows: false,
	dots: true,
	infinite: true,
	speed: 2000,
	slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true,
			responsive: [
		{
			breakpoint: 770,
			settings: {
				dots: false,
			}
		}
	]
});


	//CHECK
	$.each($('.check'), function (index, val) {
		if ($(this).find('input').prop('checked') == true) {
			$(this).addClass('active');
		}
	});
	$('body').off('click', '.check', function (event) { });
	$('body').on('click', '.check', function (event) {
		if (!$(this).hasClass('disable')) {
			var target = $(event.target);
			if (!target.is("a")) {
				$(this).toggleClass('active');
				if ($(this).hasClass('active')) {
					$(this).find('input').prop('checked', true);
				} else {
					$(this).find('input').prop('checked', false);
				}
			}
		}
	});


//Валидация + Отправщик
$('.reservBtn').click(function (e) {

	e.preventDefault();
	const name = $("#form-reserv-name").val();
	const tel = $("#form-reserv-tel").val();
	const email = $("#form-reserv-email").val();
	const pageTitle = document.title;
	const pageUrl = window.location.href;


	if (jQuery("#form-reserv-tel").val() == "") {
		jQuery("#form-reserv-tel").css("border", "1px solid red");
		return;
	}
	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendreserv',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
				email: email,
				ptitle:pageTitle,
				purl:pageUrl,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".popup__form-block .headen_form_blk").hide();
			jQuery('.popup__form-block .SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});



$('.callbackBtn').click(function (e) {

	e.preventDefault();
	const name = $("#form-callback-name").val();
	const tel = $("#form-callback-tel").val();

	if (jQuery("#form-callback-tel").val() == "") {
		jQuery("#form-callback-tel").css("border-bottom", "1px solid red");
		return;
	}
	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendphone',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".contacts__col .headen_form_blk").hide();
			jQuery('.contacts__col .SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});


// $('.reserv-number__select, .reserv-number__data').click(function(e){ 
// 	jQuery(this).css("border","1px solid red");
// });

$('.reservNumbBtn').click(function (e) {

	e.preventDefault();
	const name = $("#form-reserv-name-r").val();
	const tel = $("#form-reserv-tel-r").val();
	const date = $("#form-reserv-Ndata").val();
	var numbeR = $("#reserv-number-select").val();
	var number=  $('#reserv-number-select option:selected').text();
	const pageTitle = document.title;
	const pageUrl = window.location.href;


	if (jQuery("#form-reserv-tel-r").val() == "") {
		jQuery("#form-reserv-tel-r").css("border", "1px solid red");
		return;
	}

	if (jQuery("#form-reserv-Ndata").val() == ""){
		jQuery("#form-reserv-Ndata").css("border","1px solid red");
		return;
	}

	if (jQuery("#reserv-number-select").val() == "Выберите номер"){
		jQuery("#reserv-number-select").css("border","1px solid red");
		return;
	}

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendreservnum',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
				date: date,
				number: number,
				ptitle:pageTitle,
				purl:pageUrl,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".popup__form-block-reserv .headen_form_blk").hide();
			jQuery('.popup__form-block-reserv .SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});


  $('figure img').parent('a').attr("data-lightbox", 'gallery');
