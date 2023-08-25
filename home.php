<?php
/*
Template Name: home
*/

?>

<?php
get_header();

?>

<section class="introduction">
  <div class="container">
    <div class="small-container">
      <h1 class="introduction__question">
        <?php echo carbon_get_post_meta(get_the_ID(), 'introduction__question'); ?>
      </h1>
      <p class="introduction__title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'introduction__title'); ?>
      </p>
    </div>
    <div class="info">
      <div class="small-container">
        <div class="info__wrapper">
          <div class="info__counter">
            <p>
              <?php echo carbon_get_post_meta(get_the_ID(), 'info__counter'); ?>
            </p>
          </div>
          <div class="info__right">
            <h2 class="info__title">
              <?php echo carbon_get_post_meta(get_the_ID(), 'info__title'); ?>
            </h2>
            <ul class="info__list list-reset">
              <li class="info__item">
                <p class="info__text info__width">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'info__help'); ?>
                </p>
              </li>
              <li class="info__item info__width info__item--2">
                <p class="info__text info__width--2">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'info__owner'); ?>
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="info__consultation">
          <p class="info__text info__text--big info__width--3">
            <?php echo carbon_get_post_meta(get_the_ID(), 'info__consultation'); ?>
          </p>
          <?php echo do_shortcode('[contact-form-7 id="24e71fc" title="Контактная форма 1"]'); ?>
          <div class="info__links">
            <p class="info__message">
              <?php echo carbon_get_post_meta(get_the_ID(), 'info__messenger'); ?>
            </p>
            <div class="links"><a target="_blank" href="<?php echo carbon_get_theme_option('whatsapp'); ?>"
                class="links__link links__link--whatsapp"><svg class="links__icon">
                  <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp"></use>
                </svg> </a><a target="_blank" href="<?php echo carbon_get_theme_option('telegram'); ?>"
                class="links__link links__link--telegram"><svg class="links__icon">
                  <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
                </svg></a></div>
          </div>
        </div>
      </div><img src="<?php bloginfo('template_url'); ?>/assets/img/kulikov.png" alt="Фото Дениса Куликова"
        class="info__img info__img--desktop"> <img
        src="<?php bloginfo('template_url'); ?>/assets/img/kulikov-tablet.png" alt="Фото Дениса Куликова"
        class="info__img info__img--tablet">
    </div>
  </div>
</section>
</div>
<main>
  <section class="experience">
    <div class="container">
      <div class="small-container">
        <ul class="list-reset experience__list">
          <li class="experience__item experience__item--1">
            <div class="experience__caption">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__caption--1'); ?>+
            </div><img src="<?php bloginfo('template_url'); ?>/assets/img/experience/bag.png" alt=""
              class="experience__icon">
            <p class="experience__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__text--1'); ?>
            </p>
            <div class="experience__decoration">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__caption--1'); ?>
            </div>
          </li>
          <li class="experience__item experience__item--2">
            <div class="experience__caption">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__caption--2'); ?>+
            </div><img src="<?php bloginfo('template_url'); ?>/assets/img/experience/coins.png" alt=""
              class="experience__icon">
            <p class="experience__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__text--2'); ?>
            </p>
            <div class="experience__decoration">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__caption--2'); ?>
            </div>
          </li>
          <li class="experience__item experience__item--3">
            <div class="experience__caption"><svg class="">
                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#eye"></use>
              </svg></div><img src="<?php bloginfo('template_url'); ?>/assets/img/experience/papers.png" alt=""
              class="experience__icon experience__icon--paper">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/experience/papers-mobile.png" alt=""
              class="experience__icon experience__icon--mobile">
            <p class="experience__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'experience__text--3'); ?>
            </p>
            <div class="experience__decoration"><svg class="">
                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#eye-big"></use>
              </svg></div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="owner">
    <div class="container owner__wrapper">
      <div class="small-container">
        <h2 class="owner__title title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'owner__title'); ?>
        </h2>
        <div class="owner__content">
          <div class="owner__quote"><img src="<?php bloginfo('template_url'); ?>/assets/img/quote.svg" alt=""
              class="owner__quote-icon">
            <p class="owner__text owner__text--big">
              <?php echo carbon_get_post_meta(get_the_ID(), 'owner__quote--big'); ?>
            </p>
            <p class="owner__text owner__text--big owner__text--tablet">
              <?php echo carbon_get_post_meta(get_the_ID(), 'owner__quote--big'); ?>
              <?php echo carbon_get_post_meta(get_the_ID(), 'owner__quote--small'); ?></strong>
            </p>
            <p class="owner__text owner__text--small">
              <?php echo carbon_get_post_meta(get_the_ID(), 'owner__quote--small'); ?>
            </p><img class="owner__sign" src="<?php bloginfo('template_url'); ?>/assets/img/sign.svg" alt="">
          </div>
          <div class="owner__pictures"><img src="<?php bloginfo('template_url'); ?>/assets/img/arms.png" alt=""
              class="owner__arms"> <img src="<?php bloginfo('template_url'); ?>/assets/img/owner.png" alt=""
              class="owner__img"></div>
          <div class="owner__info">
            <div class="owner__item owner__item--1">
              <h3 class="owner__subtitle">
                <?php echo carbon_get_post_meta(get_the_ID(), 'owner__subtitle'); ?>
              </h3>
              <p class="owner__descr">
                <?php echo carbon_get_post_meta(get_the_ID(), 'owner__descr'); ?>
              </p>
            </div><img src="<?php bloginfo('template_url'); ?>/assets/img/judge.png" alt="" class="owner__decoration">
            <div class="owner__item owner__item--2">
              <h3 class="owner__counter">
                <?php echo carbon_get_post_meta(get_the_ID(), 'owner__counter'); ?>
              </h3>
              <p class="owner__descr owner__descr--2">
                <?php echo carbon_get_post_meta(get_the_ID(), 'owner__help'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="protection">
    <div class="container">
      <div class="small-container">
        <h2 class="protection__title title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'protection__title'); ?>
        </h2>
        <div class="protection__list">
          <div class="protection__left">
            <div class="protection__info protection__info--tablet">
              <p class="protection__text protection__text--info">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__info'); ?>
              </p>
            </div>
            <div class="protection__item protection__item--1">
              <h3 class="protection__caption">01</h3><img
                src="<?php bloginfo('template_url'); ?>/assets/img/protection/first.png" alt="" class="protection__img">
              <p class="protection__text">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__text--1'); ?>
              </p>
            </div>
            <div class="protection__item protection__item--2">
              <h3 class="protection__caption">02</h3><img
                src="<?php bloginfo('template_url'); ?>/assets/img/protection/second.png" alt=""
                class="protection__img">
              <p class="protection__text">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__text--2'); ?>
              </p>
            </div>
          </div>
          <div class="protection__middle">
            <div class="protection__info">
              <p class="protection__text protection__text--info">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__info'); ?>
              </p>
            </div>
            <div class="protection__item protection__item--3">
              <h3 class="protection__caption">03</h3><img
                src="<?php bloginfo('template_url'); ?>/assets/img/protection/third.png" alt="" class="protection__img">
              <p class="protection__text">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__text--3'); ?>
              </p>
            </div>
          </div>
          <div class="protection__right">
            <div class="protection__item protection__item--4">
              <h3 class="protection__caption">04</h3><img
                src="<?php bloginfo('template_url'); ?>/assets/img/protection/fourth.png" alt=""
                class="protection__img">
              <p class="protection__text">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__text--4'); ?>
              </p>
            </div>
            <div class="protection__item protection__item--5">
              <h3 class="protection__caption">05</h3><img
                src="<?php bloginfo('template_url'); ?>/assets/img/protection/fifth.png" alt="" class="protection__img">
              <p class="protection__text">
                <?php echo carbon_get_post_meta(get_the_ID(), 'protection__text--5'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cases">
    <div class="container">
      <div class="small-container">
        <h2 class="cases__title">
          <?php echo carbon_get_theme_option('cases__title'); ?>
        </h2>
        <h3 class="cases__subtitle">
          <?php echo carbon_get_theme_option('cases__subtitle'); ?>
        </h3>
        <ul class="cases__list list-reset">
          <?php

          $cases = carbon_get_theme_option('cases__cards');

          if (!empty($cases)): ?>

            <?php foreach ($cases as $case): ?>
              <li class="cases__item"><a href="<?php echo wp_get_attachment_image_url($case['case__img'], 'full'); ?>"
                  class="cases__img-block" data-fancybox="gallery"
                  data-caption="Защитили клиента от личной субсидиарной ответственности на 1 126 780 000 руб."><img
                    src="<?php echo wp_get_attachment_image_url($case['case__img'], 'full'); ?>" alt="" class="cases__img">
                  <div class="cases__zoom-btn"><svg class="cases__icon">
                      <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#case"></use>
                    </svg></div>
                </a>
                <div class="cases__content">
                  <h4 class="cases__name">
                    <?php echo $case['case__title']; ?>
                  </h4>
                  <p class="cases__descr">
                    <?php echo $case['case__decision']; ?>
                  </p>
                  <p class="cases__text">
                    <?php echo apply_filters('the_content', $case['case__text']); ?>
                  </p>
                  <p class="cases__result"><span>Результат:</span>
                    <?php echo $case['case__result']; ?>
                  </p><button class="btn-reset cases__button btn" onclick="togglePopup('form1');" data-graph-path=""><span>
                      <?php echo $case['case__button']; ?>
                    </span></button>
                </div><button onclick="togglePopup('form1');" class="btn-reset cases__button cases__button--tablet btn"
                  data-graph-path=""><span>
                    <?php echo $case['case__button']; ?>
                  </span></button>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
        <div class="next"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/next.svg" class="next__icon">
          <p class="next__text m-reset">Чтобы посмотреть следующее<br>дело, проведите в сторону</p>
        </div><button class="cases__more btn btn-reset btn--light"
          onclick="document.querySelector('.cases__list').classList.toggle('show--all')"><span>Показать
            еще</span></button>
      </div>
    </div>
  </section>
  <section class="work">
    <div class="container">
      <div class="small-container">
        <h2 class="work__title title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'work__title'); ?>
        </h2>
        <h3 class="work__subtitle">
          <?php echo carbon_get_post_meta(get_the_ID(), 'work__subtitle'); ?>
        </h3>
        <ul class="list-reset work__list">
          <li class="work__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/work/materials.png" alt=""
              class="work__img work__img--1">
            <h4 class="work__name work__name--1">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'work__name--1')); ?>
            </h4>
            <p class="work__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'work__text--1'); ?>
            </p>
          </li>
          <li class="work__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/work/strategy.png" alt=""
              class="work__img work__img--2">
            <h4 class="work__name work__name--2">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'work__name--2')); ?>
            </h4>
            <p class="work__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'work__text--2'); ?>
            </p>
          </li>
          <li class="work__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/work/decision.png" alt=""
              class="work__img work__img--3">
            <h4 class="work__name work__name--3">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'work__name--3')); ?>
            </h4>
            <p class="work__text">
              <?php echo carbon_get_post_meta(get_the_ID(), 'work__text--3'); ?>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="help">
    <div class="container help__wrapper">
      <div class="small-container">
        <h2 class="help__title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'help__title'); ?>
        </h2>
        <div class="help__container">
          <div class="help__left">
            <p class="help__call">
              <?php echo carbon_get_post_meta(get_the_ID(), 'help__subtitle'); ?>
            </p>
            <form action="POST" class="form help__form">
              <p class="help__text"><strong>Укажите телефон,</strong> <br>
                <?php echo carbon_get_post_meta(get_the_ID(), 'help__form'); ?><br><span>Это 100% бесплатно</span>
              </p>
              <div class="form__buttons help__buttons"> <label><input type="text" name="Имя"
                    class="input-reset form__input" placeholder="+7 (999) 999 99 99" data-phone-mask required>
                </label>
                <button class="btn-reset form__btn"><span>Получить консультацию</span></button>
              </div>
              <p class="help__privacy">Нажимая на кнопку «Получить консультацию», вы <br>даёте согласие на обработку
                персональных данных в соответствии с <a target="_blank"
                  href="<?php echo carbon_get_post_meta(get_the_ID(), 'help__polytics'); ?>">Политикой
                  конфиденциальности</a></p>
            </form>
            <div class="help__links">
              <p class="help__message">
                <?php echo carbon_get_post_meta(get_the_ID(), 'help__message'); ?>
              </p>
              <div class="links"><a target="_blank" href="<?php echo carbon_get_theme_option('whatsapp', true); ?>"
                  class="links__link links__link--whatsapp"><svg class="links__icon">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp"></use>
                  </svg> </a><a href="<?php echo carbon_get_theme_option('telegram'); ?>"
                  class="links__link links__link--telegram"><svg class="links__icon">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
                  </svg></a></div>
            </div>
          </div><img src="<?php bloginfo('template_url'); ?>/assets/img/owner-help.png" alt="" class="help__img">
          <div class="help__right">
            <h3 class="help__subtitle">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'help__name')); ?>
            </h3>
            <p class="help__descr help__descr--bold">
              <?php echo carbon_get_post_meta(get_the_ID(), 'help__post'); ?>
            </p>
            <div class="help__item">
              <h3 class="help__counter">
                <?php echo carbon_get_post_meta(get_the_ID(), 'help__counter'); ?>
              </h3>
              <p class="help__descr help__descr--counter">
                <?php echo carbon_get_post_meta(get_the_ID(), 'help__help'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mistake">
    <div class="container">
      <div class="small-container mistake__wrapper">
        <h2 class="mistake__title title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__title'); ?>
        </h2>
        <p class="mistake__explanation">
          <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__subtitle'); ?>
        </p>
        <div class="mistake__attention">
          <p class="mistake__text">
            <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__attention'); ?>
          </p>
          <div class="mistake__attention-icon"></div>
        </div><img src="<?php bloginfo('template_url'); ?>/assets/img/trap.png" alt="" class="mistake__img">
        <ul class="list-reset mistake__list">
          <li class="mistake__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/mistake/first.png" alt=""
              class="mistake__icon">
            <h3 class="mistake__name">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'mistake__name--1')); ?>
            </h3>
            <p class="mistake__descr">
              <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__text--1'); ?>
            </p>
          </li>
          <li class="mistake__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/mistake/second.png" alt=""
              class="mistake__icon">
            <h3 class="mistake__name">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'mistake__name--2')); ?>
            </h3>
            <p class="mistake__descr">
              <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__text--2'); ?>
            </p>
          </li>
          <li class="mistake__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/mistake/third.png" alt=""
              class="mistake__icon">
            <h3 class="mistake__name">
              <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'mistake__name--3')); ?>
            </h3>
            <p class="mistake__descr">
              <?php echo carbon_get_post_meta(get_the_ID(), 'mistake__text--3'); ?>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="meeting">
    <div class="container">
      <div class="small-container meeting__wrapper">
        <h2 class="meeting__title title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__title'); ?>
        </h2>
        <h3 class="meeting__subtitle m-reset">
          <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__subtitle'); ?>
        </h3><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/bg-2.png" alt="" class="meeting__bg">
        <div class="meeting__content">
          <div class="meeting__price"><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/price.png" alt=""
              class="meeting__img"> <img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/pricem.png" alt=""
              class="meeting__img--mobile"> <img
              src="<?php bloginfo('template_url'); ?>/assets/img/meeting/pricem-money.png" alt=""
              class="meeting__img2--mobile">
            <h4 class="meeting__price-key">Стоимость изучения документов:</h4>
            <p class="meeting__price-value">
              <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__price'); ?>
            </p>
          </div><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/bg-2.png" alt=""
            class="meeting__picture">
          <div class="meeting__services">
            <ul class="list-reset meeting__list">
              <li class="meeting__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/first.png"
                  alt="Разбор" class="meeting__icon">
                <p class="meeting__descr">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__text--1'); ?>
                </p>
              </li>
              <li class="meeting__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/second.png"
                  alt="Разбор" class="meeting__icon">
                <p class="meeting__descr">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__text--2'); ?>
                </p>
              </li>
              <li class="meeting__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/meeting/third.png"
                  alt="Разбор" class="meeting__icon">
                <p class="meeting__descr">
                  <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__text--3'); ?>
                </p>
              </li>
            </ul>
            <div class="btn-reset btn meeting__btn" onclick="togglePopup('form3');">
              <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__button'); ?>
            </div>
          </div>
          <div class="btn-reset btn meeting__btn meeting__btn--tablet" onclick="togglePopup('form3');">
            <?php echo carbon_get_post_meta(get_the_ID(), 'meeting__button'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="methods">
    <div class="container methods__wrapper">
      <div class="small-container">
        <h2 class="title methods__title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'methods__title'); ?>
        </h2>
        <p class="methods__info m-reset">
          <?php echo carbon_get_post_meta(get_the_ID(), 'methods__subtitle'); ?>
        </p><img src="<?php bloginfo('template_url'); ?>/assets/img/methods.png" alt="" class="methods__img">
        <div class="methods__container">
          <ul class="list-reset methods__list">
            <li class="methods__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/methods/first.png" alt=""
                class="methods__icon">
              <h3 class="methods__name m-reset">
                <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'methods__name--1')); ?>
              </h3>
              <p class="methods__descr m-reset">
                <?php echo carbon_get_post_meta(get_the_ID(), 'methods__text--1'); ?>
              </p>
            </li>
            <li class="methods__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/methods/second.png" alt=""
                class="methods__icon">
              <h3 class="methods__name m-reset">
                <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'methods__name--2')); ?>
              </h3>
              <p class="methods__descr m-reset">
                <?php echo carbon_get_post_meta(get_the_ID(), 'methods__text--2'); ?>
              </p>
            </li>
            <li class="methods__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/methods/third.png" alt=""
                class="methods__icon">
              <h3 class="methods__name m-reset">
                <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'methods__name--3')); ?>
              </h3>
              <p class="methods__descr m-reset">
                <?php echo carbon_get_post_meta(get_the_ID(), 'methods__text--3'); ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="total">
    <div class="container">
      <div class="small-container total__wrapper">
        <h2 class="title total__title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'total__title'); ?>
        </h2>
        <ul class="total__list list-reset">
          <li class="total__item"><img
              src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'total__img--1'), 'full'); ?>"
              alt="" class="total__img">
            <h3 class="total__name m-reset">
              <?php echo carbon_get_post_meta(get_the_ID(), 'total__name--1'); ?>
            </h3>
            <p class="total__info m-reset"><span class="total__post">
                <?php echo carbon_get_post_meta(get_the_ID(), 'total__post--1'); ?>
              </span> <span class="total__experience">
                <?php echo carbon_get_post_meta(get_the_ID(), 'total__experience--1'); ?>
              </span></p>
          </li>
          <li class="total__item"><img
              src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'total__img--2'), 'full'); ?>"
              alt="" class="total__img">
            <h3 class="total__name m-reset">
              <?php echo carbon_get_post_meta(get_the_ID(), 'total__name--2'); ?>
            </h3>
            <p class="total__info m-reset"><span class="total__post">
                <?php echo carbon_get_post_meta(get_the_ID(), 'total__post--2'); ?>
              </span> <span class="total__experience">
                <?php echo carbon_get_post_meta(get_the_ID(), 'total__experience--2'); ?>
              </span></p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="company">
    <div class="container company__wrapper">
      <div class="small-container company__container">
        <div class="company__left">
          <h2 class="title company__title">
            <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'company__title')); ?>
          </h2>
          <p class="company__descr m-reset">
            <?php echo carbon_get_post_meta(get_the_ID(), 'company__descr--1'); ?>
            <br>
            <br>
            <?php echo carbon_get_post_meta(get_the_ID(), 'company__descr--2'); ?>
          </p>
        </div><img src="<?php bloginfo('template_url'); ?>/assets/img/company/owners.png" alt="" class="company__img">
        <div class="company__right">
          <!-- <form action="#" class="form company__form">
            <div class="form__wrapper company__textarea-wrapper"><label for="text-1" class="form__title">Оставьте
                свой запрос</label> <textarea name="" id="text-1" class="input-reset form__textarea"
                placeholder="Опишите вашу ситуацию и запрос в этом поле. Чем подробнее вы расскажете о своем деле, тем более конструктивной получится наша консультация"
                required></textarea></div>
            <div class="form__buttons form__buttons--company"> <label><input type="text" name="Имя"
                  class="input-reset form__input" placeholder="+7 (999) 999 99 99" data-phone-mask required>
              </label>
              <button class="btn-reset form__btn"><span>Отправить запрос</span></button>
            </div>
          </form> -->

          <?php echo do_shortcode('[contact-form-7 id="0b631a7" title="Форма 2"]'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="faq">
    <div class="container faq__wrapper">
      <div class="small-container">
        <h2 class="title faq__title">
          <?php echo carbon_get_theme_option('accordion__title'); ?>
        </h2>
        <p class="faq__descr m-reset">
          <?php echo carbon_get_theme_option('accordion__subtitle'); ?>
        </p>
        <div class="faq__img-block"><img src="<?php bloginfo('template_url'); ?>/assets/img/faq.png" alt=""
            class="faq__img"> <img src="<?php bloginfo('template_url'); ?>/assets/img/faq-arms.png" alt=""
            class="faq__arms"></div>
        <div class="accordion faq__accordion">

          <?php

          $items = carbon_get_theme_option('accordion__items');

          if (!empty($items)): ?>
            <?php foreach ($items as $item): ?>
              <div class="accordion__item"><button class="accordion__button">
                  <?php echo $item['question']; ?>
                </button>
                <div class="accordion__panel">
                  <div class="accordion__answer m-reset">
                    <?php echo $item['answer']; ?>
                  </div>
                  <div class="accordion__wrapper">
                    <p class="accordion__message m-reset">Хотите обсудить этот вопрос напрямую с юристом? <strong>Введите
                        номер телефона, чтобы получить консультацию</strong></p>
                    <form action="#" class="form accordion__form">
                      <div class="form__buttons form__buttons--accordion">
                        <label>
                          <input type="text" name="Имя" class="input-reset form__input" placeholder="+7 (999) 999 99 99"
                            data-phone-mask required>
                        </label>
                        <button class="btn-reset form__btn"><span>Обсудить вопрос с юристом</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="question">
    <div class="container">
      <div class="small-container">
        <div class="question__container">
          <h2 class="title question__title">
            <?php echo carbon_get_post_meta(get_the_ID(), 'question__title'); ?>
          </h2>
          <p class="question__descr m-reset">
            <?php echo carbon_get_post_meta(get_the_ID(), 'question__subtitle'); ?>
          </p>
          <div class="question__wrapper">
            <form action="#" class="form question__form">
              <div class="form__wrapper question__textarea-wrapper"><label for="text-2"
                  class="form__title question__ticker">Ваш вопрос</label> <textarea name="" id="text-2"
                  class="input-reset form__textarea question__textarea"
                  placeholder="Опишите вашу ситуацию и запрос в этом поле. Чем подробнее вы расскажете о своем деле, тем более конструктивной получится наша консультация"
                  required></textarea></div>
              <p class="form__title question__ticker m-reset">Ваш телефон</p>
              <div class="form__buttons"> <label><input type="text" name="Имя" class="input-reset form__input"
                    placeholder="+7 (999) 999 99 99" data-phone-mask required>
                </label>
                <button class="btn-reset form__btn"><span>отправить запрос юристу</span></button>
              </div>
            </form>
          </div>
        </div><img src="<?php bloginfo('template_url'); ?>/assets/img/mocap.png" alt="" class="question__mocap"> <img
          src="<?php bloginfo('template_url'); ?>/assets/img/mocap-mobile.png" alt="" class="question__mocap--mobile">
      </div>
    </div>
  </section>
  <section class="connect">
    <div class="container connect__wrapper">
      <div class="small-container">
        <h2 class="title connect__title">
          <?php echo carbon_get_post_meta(get_the_ID(), 'connect__title'); ?>
        </h2><a href="tel:<?php echo carbon_get_theme_option('phone'); ?>" class="connect__phone"><?php echo carbon_get_theme_option('phone-visual'); ?></a>
        <p class="connect__mail">Или напишите на почту: <a
            href="mailto:<?php echo carbon_get_post_meta(get_the_ID(), 'connect__mail'); ?>"><?php echo carbon_get_theme_option('mail'); ?></a></p><img
          src="<?php bloginfo('template_url'); ?>/assets/img/connect.png" alt="" class="connect__img">
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="container">
      <div class="small-container">
        <div class="arrow-prev" onclick="galleryPrev()"></div>
        <div class="arrow-next" onclick="galleryNext()"></div>
        <ul class="gallery__list list-reset">
          <?php
          $gallery = carbon_get_theme_option('gallery');

          if (!empty($gallery)): ?>

            <?php foreach ($gallery as $photo): ?>
              <li class="gallery__item"><img
                  src="<?php echo wp_get_attachment_image_url($photo['gallery__img'], 'full'); ?>" alt=""
                  class="gallery__img" loading="lazy">
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="next"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/next.svg" class="next__icon">
        <p class="next__text m-reset">Чтобы посмотреть следующее<br>дело, проведите в сторону</p>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();

?>