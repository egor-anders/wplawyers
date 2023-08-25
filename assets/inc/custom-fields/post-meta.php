<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields()
{
  Container::make('theme_options', 'Шапка + основные настройки')
    ->add_fields(
      array(
        Field::make('text', 'brand', 'Название/Title')->set_required(true)->set_attribute('placeholder', 'Куликов и партнеры'),
        Field::make('text', 'brand-descr', 'Краткое описание')->set_required(true)->set_attribute('placeholder', 'Защита от субсидиарной ответственности
        и арбитражные споры'),
        Field::make('rich_text', 'description', 'Полное описание для поисковика')->set_required(true)->set_attribute('placeholder', 'Защита от субсидиарной ответственности
        и арбитражные споры'),
        Field::make("text", "mail", "Почта")
        ->set_required(true),
        Field::make('text', 'phone-visual', 'Телефон в дизайне')->set_required(true)->set_attribute('placeholder', '+7 (495) 648-40-30'),
        Field::make('text', 'phone', 'Телефон без скобок и пробелов')->set_required(true)->set_attribute('placeholder', '+74956484030'),
        Field::make('text', 'whatsapp', 'Ссылка на whatsapp')->set_required(true)->set_default_value('https://wa.me/+74956484030')->set_attribute('placeholder', 'https://wa.me/+74956484030'),
        Field::make('text', 'telegram', 'Ссылка на telegram')->set_required(true)->set_attribute('placeholder', ' https://t.me/username'),
        Field::make('image', 'logo-header', 'Логотип в шапке')->set_required(true),
        Field::make('image', 'logo-footer', 'Логотип в футере')->set_required(true),
        Field::make('color', 'crb_background', 'Цвет текста')
          ->set_palette(array('#28292B', '#FFF', '#447BE2')),
      )
    );

  Container::make('post_meta', 'Вас пытаются привлечь к субсидиарной ответственности...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "introduction__question", "Заголовок h1")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true)
          ->set_classes('introduction__question'),
        Field::make("text", "introduction__title", "Подзаголовок")
          ->set_required(true)
          ->set_classes('introduction__title'),
        Field::make("text", "info__counter", "Количество выигранных дел")->set_required(true),
        Field::make("textarea", "info__title", "Достижения")->set_required(true),
        Field::make("rich_text", "info__help", "Кому помогаем?")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "info__owner", "Информация об основателе")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "info__consultation", "Предложение консультации")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("text", "info__messenger", "Предложить перейти в мессенджер")
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Более 13 лет опыта...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make('text', 'experience__caption--1', 'Цифра в дизайне')
          ->set_required(true),
        Field::make("rich_text", "experience__text--1", "Текст")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Работаем с задолженностями и...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make('text', 'experience__caption--2', 'Цифра в дизайне')
          ->set_required(true),
        Field::make("rich_text", "experience__text--2", "Текст")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Перед началом работы...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "experience__text--3", "Текст")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Мы уже участвовали в сотнях заседаний по арбитражным...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "owner__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "owner__quote--big", "Цитата крупным текстом")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "owner__quote--small", "Цитата мелким текстом")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),

        Field::make("text", "owner__subtitle", "Имя")
          ->set_required(true),
        Field::make("text", "owner__descr", "Должность")
          ->set_required(true),
        Field::make("text", "owner__counter", "Количество выигранных дел")
          ->set_required(true),
        Field::make("rich_text", "owner__help", "Скольким помог?")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Умеем строить защиту по субсидиарным
    спорам...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "protection__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "protection__info", "Текст синего блока")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
          Field::make("rich_text", "protection__text--1", "Текст первой карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
          Field::make("rich_text", "protection__text--2", "Текст второй карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
          Field::make("rich_text", "protection__text--3", "Текст третьей карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
          Field::make("rich_text", "protection__text--4", "Текст четвертой карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
          Field::make("rich_text", "protection__text--5", "Текст пятой карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('theme_options', 'Кейсы')
    ->add_fields(
      array(
        Field::make("rich_text", "cases__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "cases__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make('complex', 'cases__cards', 'Карточки кейсов')
          ->add_fields(
            array(
              Field::make('rich_text', 'case__title', 'Заголовок карточки')
                ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
                ->set_required(true),
              Field::make('text', 'case__decision', 'Решение суда')
                ->set_required(true),
              Field::make('rich_text', 'case__text', 'Текст кейса')
                ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
                ->set_required(true),
              Field::make('text', 'case__result', 'Результат')
                ->set_required(true),
              Field::make('image', 'case__img', 'Фото кейса')
                ->set_required(true),
              Field::make('text', 'case__button', 'Текст кнопки')
                ->set_required(true),
            )
          )
      )
    );

  Container::make('theme_options', 'Аккордион')
    ->add_fields(
      array(
        Field::make("rich_text", "accordion__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "accordion__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),

        Field::make('complex', 'accordion__items', 'Элементы аккордиона')
          ->add_fields(
            array(
              Field::make('text', 'question', 'Вопрос')
                ->set_required(true),

              Field::make('text', 'answer', 'Ответ')
                ->set_required(true),
            )
          )
      )
    );

  Container::make('theme_options', 'Галлерея')
    ->add_fields(
      array(
        Field::make('complex', 'gallery', 'Галлерея')
          ->add_fields(
            array(
              Field::make('image', 'gallery__img', 'Фото 580x380px')
                ->set_required(true),
            )
          )
      )
    );


  Container::make('post_meta', "«Под ключ» решаем все вопросы...")
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "work__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__name--1", "Заголовок первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__text--1", "Текст первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__name--2", "Заголовок второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__text--2", "Текст второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__name--3", "Заголовок третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "work__text--3", "Текст третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', "Узнайте, как избежать ошибок
    и проблем в вашем споре")
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "help__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "help__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "help__name", "Имя")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "help__post", "Должность")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("text", "help__counter", "Количество выигранных дел")
          ->set_required(true),
        Field::make("rich_text", "help__help", "Скольким помог?")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "help__form", "Текст в форме")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("text", "help__polytics", "Ссылка на политику конфиденциальности")
          ->set_required(true),
        Field::make("text", "help__message", "Предложение написать в мессенджер")
          ->set_required(true),
      )
    );

  Container::make('post_meta', "Попытка самостоятельного разрешения спора...")
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "mistake__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__attention", "Внимание")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__name--1", "Заголовок первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__text--1", "Текст первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__name--2", "Заголовок второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__text--2", "Текст второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__name--3", "Заголовок третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "mistake__text--3", "Текст третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', "Для полноценного аудита ситуации...")
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "meeting__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "meeting__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("text", "meeting__price", "Стомость изучения документов")
          ->set_required(true),
        Field::make("rich_text", "meeting__text--1", "Текст первой карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "meeting__text--2", "Текст второй карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "meeting__text--3", "Текст третьей карточки")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("text", "meeting__button", "Текст кнопки")
          ->set_required(true),
      )
    );

  Container::make('post_meta', "В процессе работы мы используем...")
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "methods__title", "Заголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__subtitle", "Подзаголовок")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__name--1", "Заголовок первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__text--1", "Текст первой группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__name--2", "Заголовок второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__text--2", "Текст второй группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__name--3", "Заголовок третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "methods__text--3", "Текст третьей группы")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Общий опыт команды в сфере арби...')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "total__title", "Заголовок")
          ->set_required(true),

        Field::make("text", "total__name--1", "Имя первого работника")
          ->set_required(true),

        Field::make("text", "total__post--1", "Должность первого работника")
          ->set_required(true),
        Field::make("text", "total__experience--1", "Опыт первого работника")
          ->set_required(true),

        Field::make("image", "total__img--1", "Фото первого работника")
          ->set_required(true),

        Field::make("text", "total__name--2", "Имя второго работника")
          ->set_required(true),

        Field::make("text", "total__post--2", "Должность второго работника")
          ->set_required(true),
        Field::make("text", "total__experience--2", "Опыт второго работника")
          ->set_required(true),
        Field::make("image", "total__img--2", "Фото второго работника")
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Столичная юридическая компания')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("rich_text", "company__title", "Заголовок")
          ->set_required(true),
        Field::make("rich_text", "company__descr--1", "Первая часть текста")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
        Field::make("rich_text", "company__descr--2", "Вторая часть текста")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек'),
      )
    );


  Container::make('post_meta', 'Не нашли ответ на свой вопрос?')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("text", "question__title", "Заголовок")
          ->set_required(true),
        Field::make("text", "question__subtitle", "Подзаголовок")
          ->set_required(true),
      )
    );

  Container::make('post_meta', 'Звоните, мы поможем
    разрешить вашу ситуацию')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'home.php')
    ->add_fields(
      array(
        Field::make("text", "connect__title", "Заголовок")
          ->set_required(true),
      )
    );

  Container::make('theme_options', 'Футер + карта')
    ->add_fields(
      array(
        Field::make("text", "footer__title", "Офис")
          ->set_required(true),
        Field::make("rich_text", "footer__subway-1", "Метро у первого адреса")
          ->set_required(true),
        Field::make("rich_text", "footer__address-1", "Первый адрес")
          ->set_required(true),
        Field::make("rich_text", "footer__subway-2", "Метро у второго адреса")
          ->set_required(true),
        Field::make("rich_text", "footer__address-2", "Второй адрес")
          ->set_required(true),
        Field::make("rich_text", "map", "Карта")
          ->help_text('Координаты меток брать на сайте яндекс карт"')
      )
    );


  Container::make('post_meta', 'Страница спасибо')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'thanks.php')
    ->add_fields(
      array(
        Field::make('rich_text', 'thanks__title', 'Заголовок')->set_required(true),
        Field::make('rich_text', 'thanks__subtitle', 'Подзаголовок')->set_required(true),
        Field::make("text", "thanks__name", "Имя")
          ->set_required(true),
        Field::make("text", "thanks__descr", "Должность")
          ->set_required(true),
        Field::make("rich_text", "thanks__help", "Скольким помог?")
          ->help_text('Цвет текста в панели инструментов. Палитра в блоке основных настроек')
          ->set_required(true),
      )
    );
}