<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.svg">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <meta name="description" content="Защита от субсидиарной ответственности
  и арбитражные споры. Оценим перспективы вашего дела, построим стратегию защиты и представим ваши интересы в суде">
  <?php wp_head(); ?>
</head>




<body class="page__body">
  <div class="site-container">
    <div class="background background--1">
      <header class="header">
        <div class="container"><button class="mobile-call" onclick="togglePopup('form2');"><img
              src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg"></button>
          <div class="call call--header">
            <div class="small-container call__wrapper call__wrapper--header">
              <div class="logo logo--header">
                <?php
                if (has_custom_logo()) {
                  echo get_custom_logo();
                }
                ?>
                <p class="logo__text logo__text--header"><span class="logo__title logo__title--header">Куликов
                    и партнеры</span> <span class="logo__descr logo__descr--header">Защита от субсидиарной
                    ответственности и арбитражные споры</span></p>
              </div>
              <a href="#" class="call__button call__button--header" onclick="togglePopup('form1');">Получить
                юридическую<br>консультацию <span>через 10 минут</span></a>
              <div class="call__links call__links--header"><a href="tel:+74956484030"
                  class="call__phone call__phone--header">+7 495 648-40-30</a> <a href="#"
                  class="call__whatsapp call__whatsapp--header">Задать вопрос в WhatsApp</a></div>
            </div>
          </div>
        </div>
      </header>