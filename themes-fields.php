<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) ) 
    ->add_tab('Главная', array(
      // Field::make( 'image', 'as_logo', 'Логотип в шапке')
      //   ->set_width(30),
      // Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
      //   ->set_width(30),
      Field::make('text', 'about_home_title', 'Заголовок на главной'),
      Field::make('rich_text', 'about_home', 'О нашей компании'),

      Field::make('text', 'about_home_title_en', 'Заголовок на главной (Eng)'),
      Field::make('rich_text', 'about_home_en', 'О нашей компании (Eng)')
    ))
  ->add_tab('Слайдер', array(
    Field::make('complex', 'slider_index', 'Слайдер на главной')
      ->add_fields(array(
        Field::make('image', 'slider_img', 'Картинка слайдера')
          ->set_width(50),
        Field::make('image', 'slider_img_mob', 'Картинка слайдера моб')
          ->set_width(50),
      ))
  ))
    ->add_tab('Акции', array(
      Field::make('complex', 'stock_complex', 'Вывод акций на главной')
      ->add_fields(array(
        Field::make('image', 'stock_img', 'Картинка')
          ->set_width(30),
        Field::make('text', 'stock_title', 'Заголовок')
          ->set_width(30),
        Field::make('text', 'stock_title_en', 'Заголовок (Eng)')
          ->set_width(30),
        Field::make("checkbox", "checkbox_stock", "Выводить две акции"),
        // ->help_text('Меняет местами картинку и текст"'),
        Field::make('image', 'stock_img_1', 'Картинка 1')
          ->set_width(30),
        Field::make('text', 'stock_title_1', 'Заголовок 1')
          ->set_width(30),
        Field::make('text', 'stock_title_1_en', 'Заголовок 1  (Eng)')
          ->set_width(30),
        Field::make('image', 'stock_img_2', 'Картинка 2')
          ->set_width(30),
        Field::make('text', 'stock_title_2', 'Заголовок 2')
          ->set_width(30),
        Field::make('text', 'stock_title_2_en', 'Заголовок 2  (Eng)')
          ->set_width(30),
      ))
  ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_1', __( 'Телефон Бронирование' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон Ресторан' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_3', __( 'Телефон Конференц-зал' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_4', __( 'Телефон Дополнительный 1' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_5', __( 'Телефон Дополнительный 2' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address_en', __( 'Адрес (Eng)' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        // Field::make( 'text', 'as_face', __( 'facebook' ) )
        //   ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );
    Container::make('post_meta', 'ultra_product_cr', 'Дополнительные поля')
    ->show_on_template(array('page-room.php'))
      ->add_fields(array(   
        Field::make( 'complex', 'offer_picture', "Галерея товара" )
      ->add_fields( array(
        Field::make('image', 'gal_img', 'Изображение' )->set_width(30),
        Field::make('text', 'gal_img_sku', 'ID для модификации')->set_width(30),
        Field::make('text', 'gal_img_alt', 'alt и title')->set_width(30)        
      ) ),
      Field::make('textarea', 'offer_smile_descr', 'Краткое описание')->set_width(100), 
      Field::make('text', 'offer_price', 'Стоимость номера')->set_width(50),
      Field::make('text', 'room_size', 'Площадь номера')->set_width(50),
      Field::make('text', 'room_number', 'Колличество мест в номере')->set_width(50),
      Field::make('text', 'room_rooms', 'Колличество комнат в номере')->set_width(50),
      Field::make('rich_text', 'included_price', 'В стоимость входит')->set_width(100),
    ));
    Container::make('post_meta', 'services_sample', 'Дополнительные поля')
    ->show_on_template(array('page-services-sample.php', 'page-restaurant.php'))
      ->add_fields(array(   
        Field::make('image', 'sample_img_vertical', 'Картинка вертикальная' )->set_width(50),
        Field::make('image', 'sample_img_horizontal', 'Картинка горизонтальная' )->set_width(50),
        Field::make('image', 'sample_img_small_1', 'Картинка маленькая 1' )->set_width(50),
        Field::make('image', 'sample_img_small_2', 'Картинка маленькая 2' )->set_width(50),
    ));

    Container::make('post_meta', 'services_sample_2', 'Дополнительные картинки')
    ->show_on_template(array('page-services-sample.php', 'page-restaurant.php'))
      ->add_fields(array(   
        Field::make('image', 'sample_2_img_vertical', 'Картинка вертикальная' )->set_width(50),
        Field::make('image', 'sample_2_img_horizontal', 'Картинка горизонтальная' )->set_width(50),
        Field::make('image', 'sample_2_img_small_1', 'Картинка маленькая 1' )->set_width(50),
        Field::make('image', 'sample_2_img_small_2', 'Картинка маленькая 2' )->set_width(50),
    ));

    Container::make('post_meta', 'page-spa', 'Поля для бассейна')
    ->show_on_template(array('page-spa.php'))
      ->add_fields(array(   
        Field::make('rich_text', 'pool_descr', 'Описание бассейна')->set_width(100), 
        Field::make('image', 'pool_img_big', 'Картинка большая' )->set_width(20),
        Field::make('image', 'pool_img_1', 'Картинка 1' )->set_width(20),
        Field::make('image', 'pool_img_2', 'Картинка 2' )->set_width(20),
        Field::make('image', 'pool_img_3', 'Картинка 3' )->set_width(20),
        Field::make('image', 'pool_img_4', 'Картинка 4' )->set_width(20),
    ));
    Container::make('post_meta', 'page-spa', 'Поля для хамам')
    ->show_on_template(array('page-spa.php'))
      ->add_fields(array(   
        Field::make('rich_text', 'hamam_descr', 'Описание хамам')->set_width(100), 
        Field::make('image', 'hamam_img_1', 'Картинка 1' )->set_width(20),
        Field::make('image', 'hamam_img_2', 'Картинка 2' )->set_width(20),
        Field::make('image', 'hamam_img_3', 'Картинка 3' )->set_width(20),
    ));
    Container::make('post_meta', 'page-spa', 'Поля для сауны')
    ->show_on_template(array('page-spa.php'))
      ->add_fields(array(   
        Field::make('rich_text', 'sauna_descr', 'Описание сауны')->set_width(100), 
        Field::make('image', 'sauna_img_1', 'Картинка 1' )->set_width(20),
        Field::make('image', 'sauna_img_2', 'Картинка 2' )->set_width(20),
        Field::make('image', 'sauna_img_3', 'Картинка 3' )->set_width(20),
    ));

    Container::make('post_meta', 'page-restorant', 'Поля для ресторана')
    ->show_on_template(array('page-restaurant.php'))
      ->add_fields(array(   
        Field::make('text', 'rest_head', 'Заголовок' )->set_width(100),
        Field::make('rich_text', 'rest_subtext', 'Текст про ресторан' )->set_width(100),
        Field::make('file', 'rest_menu', 'Меню ресторана' )->set_width(20),
    ));

?>