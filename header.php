<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.svg" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="theme-color" content="#111111" />
  <title><?php echo carbon_get_theme_option('brand'); ?></title>
  <meta name="description" content="<?php echo carbon_get_theme_option('description'); ?>" />
  <?php wp_head(); ?>
</head>

<body class="page__body">
  <div class="site-container">
    <div class="background background--1">
      <header class="header">
        <div class="container">
          <button class="mobile-call" onclick="togglePopup('form2');">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" />
          </button>
          <div class="call call--header">
            <div class="small-container call__wrapper call__wrapper--header">
              <a href="/home" class="logo logo--header">
                <img
                  src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('logo-header'), 'full'); ?>"
                  alt="" class="logo__img">
                <p class="logo__text logo__text--header">
                  <span class="logo__title logo__title--header"> <?php echo carbon_get_theme_option('brand'); ?></span>
                  <span class="logo__descr logo__descr--header"> <?php echo carbon_get_theme_option('brand-descr'); ?></span>
                </p>
              </a>
              <a href="#" class="call__button call__button--header" onclick="togglePopup('form1');">Получить
                юридическую<br>консультацию <strong>через 10 минут</strong></a>
              <div class="call__links call__links--header">
                <a href="tel:<?php echo carbon_get_theme_option('phone'); ?>"
                  class="call__phone call__phone--header">
                  <?php echo carbon_get_theme_option('phone-visual'); ?>
                </a>
                <a target="_blank" href="<?php echo carbon_get_theme_option('whatsapp'); ?>"
                  class="call__whatsapp call__whatsapp--header">Задать вопрос в WhatsApp</a>
              </div>
            </div>
          </div>
        </div>
      </header>