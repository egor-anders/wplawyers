<footer class="footer">
  <div class="container">
    <div class="small-container">
      <div class="footer__info">
        <div class="footer__addresses">
          <h2 class="footer__subtitle">
            <?php echo carbon_get_theme_option('footer__title'); ?>
          </h2>
          <p class="footer__address">
            <span>
              <?php echo carbon_get_theme_option('footer__subway-1'); ?>
            </span>
            <br>
            <span>
              <?php echo carbon_get_theme_option('footer__address-1'); ?>
            </span>
          </p>
          <p class="footer__address">
            <span>
              <?php echo carbon_get_theme_option('footer__subway-2'); ?>
            </span>
            <br>
            <span>
              <?php echo carbon_get_theme_option('footer__address-2'); ?>
            </span>
          </p>
        </div>
        <div class="footer__map">
          <?php
          $map = carbon_get_theme_option('map');
          echo do_shortcode("$map"); ?>
        </div>
      </div>
    </div>
    <div class="call">
      <div class="small-container call__wrapper"><a href="/home" class="logo">
          <img
            src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('logo-footer'), 'full'); ?>"
            alt="" class="logo__img">
          <p class="logo__text logo__text--footer"><span class="logo__title logo__title--footer">
              <?php echo carbon_get_theme_option('brand'); ?>
            </span> <span class="logo__descr logo__descr--footer">
              <?php echo carbon_get_theme_option('brand-descr'); ?>
            </span></p>
        </a><a href="#" class="call__button call__button--footer" onclick="togglePopup('form1');">Получить
          юридическую<br>консультацию <strong>через 10 минут</strong></a>
        <div class="call__links call__links--footer"><a
            href="tel: <?php echo carbon_get_theme_option('phone'); ?>"
            class="call__phone call__phone--footer">
            <?php echo carbon_get_theme_option('phone-visual'); ?>
          </a> <a target="_blank" href=" <?php echo carbon_get_theme_option('whatsapp'); ?>"
            class="call__whatsapp call__whatsapp--footer">Задать вопрос в WhatsApp</a></div>
      </div>
    </div>
  </div>
</footer>
<div class="cookie">
  <p class="cookie__text">Пользуясь нашим сайтом, вы соглашаетесь с тем, что <a href="#">мы используем cookies</a>
  </p><button class="btn" onclick="acceptCookie()">Окей</button>
</div>
<div class="popup" data-popup-name="form1">
  <div class="popup__bgr" onclick="togglePopup('form1');"></div>
  <div class="popup__forms"><button class="popup__close" onclick="togglePopup('form1');"><img
        src="<?php bloginfo('template_url'); ?>/assets/img/close.svg"></button>
    <p class="popup__title">Опишите вашу ситуацию и оставьте<br>номер телефона для связи</p>
    <form action="#" class="form popup__form">
      <div class="form__wrapper popup__textarea-wrapper"><textarea name="" id="text-2"
          class="input-reset form__textarea popup__textarea"
          placeholder="Опишите вашу ситуацию и запрос в этом поле. Чем подробнее вы расскажете о своем деле, тем более конструктивной получится наша консультация"
          required></textarea></div>
      <div class="form__buttons form__buttons--popup"><label><input type="text" name="Имя"
            class="input-reset form__input" placeholder="+7 (999) 999 99 99" data-phone-mask required>
        </label>
        <button class="btn-reset form__btn"><span>Получить консультацию бесплатно</span></button>
      </div>
      <p class="popup__help">Нажимая на кнопку «Получить консультацию», вы даёте согласие на обработку персональных
        данных в соответствии с <a href="#">Политикой конфиденциальности</a></p>
    </form>
  </div>
</div>
<div class="popup" data-popup-name="form2">
  <div class="popup__bgr" onclick="togglePopup('form2');"></div>
  <div class="popup__info"><button class="popup__close" onclick="togglePopup('form2');"><img
        src="<?php bloginfo('template_url'); ?>/assets/img/close.svg"></button>
    <div class="popup__info--contact"><a href="tel:<?php echo carbon_get_theme_option('phone'); ?>"
        class="popup__info--phone">
        <?php get_post_meta(get_the_ID(), 'phone-visual', true); ?>
      </a> <a target="_blank" href="<?php echo carbon_get_theme_option('whatsapp'); ?>"
        class="popup__info--whatsapp">Задать вопрос в WhatsApp</a></div>
    <p class="popup__info--text" onclick="togglePopup('form2'); togglePopup('form1');">Получить
      юридическую<br>консультацию <strong>через 10 минут</strong></p>
  </div>
</div>
<div class="popup" data-popup-name="form3">
  <div class="popup__bgr" onclick="togglePopup('form3');"></div>
  <div class="popup__forms"><button class="popup__close" onclick="togglePopup('form3');"><img
        src="<?php bloginfo('template_url'); ?>/assets/img/close.svg"></button>
    <p class="popup__title">Опишите вашу ситуацию и оставьте<br>номер телефона для связи</p>
    <form action="#" class="form popup__form">
      <div class="form__wrapper popup__textarea-wrapper"><textarea name="" id="text-2"
          class="input-reset form__textarea popup__textarea"
          placeholder="Опишите вашу ситуацию и запрос в этом поле. Чем подробнее вы расскажете о своем деле, тем более конструктивной получится наша консультация"
          required></textarea></div>
      <div class="form__buttons form__buttons--popup"><label><input type="text" name="Имя"
            class="input-reset form__input" placeholder="+7 (999) 999 99 99" data-phone-mask required>
        </label>
        <button class="btn-reset form__btn"><span>Назначить встречу с юристом</span></button>
      </div>
      <p class="popup__help">Нажимая на кнопку «Получить консультацию», вы даёте согласие на обработку персональных
        данных в соответствии с <a href="#">Политикой конфиденциальности</a></p>
    </form>
  </div>
</div>
</div>

<?php wp_footer(); ?>
</body>

</html>