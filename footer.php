<footer class="footer">
  <div class="container">
    <div class="small-container">
      <div class="footer__info">
        <div class="footer__addresses">
          <h2 class="footer__subtitle">Офис в г. Москва</h2>
          <p class="footer__address">м. Чертановская<br>ул. Кировоградская, д. 2</p>
          <p class="footer__address">м. Тульская<br>Гамсоновский переулок, 2с1</p>
        </div>
        <div class="footer__map"><iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1378.42744783425!2d37.611654000597035!3d55.63274454994835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab2e4a59d5b73%3A0x4491f55ba8c49842!2z0JrQuNGA0L7QstC-0LPRgNCw0LTRgdC60LDRjyDRg9C7LiwgMiwg0JzQvtGB0LrQstCwLCAxMTcyMDg!5e0!3m2!1sru!2sru!4v1691332310737!5m2!1sru!2sru"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
    </div>
    <div class="call">
      <div class="small-container call__wrapper"><a href="#" class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.svg"
            alt="Куликов и партнёры лого" class="logo__img">
          <p class="logo__text logo__text--footer"><span class="logo__title logo__title--footer">Куликов
              и партнеры</span> <span class="logo__descr logo__descr--footer">Защита от субсидиарной ответственности
              и арбитражные споры</span></p>
        </a><a href="#" class="call__button call__button--footer" onclick="togglePopup('form1');">Получить
          юридическую<br>консультацию <span>через 10 минут</span></a>
        <div class="call__links call__links--footer"><a href="tel:+74956484030"
            class="call__phone call__phone--footer">+7 495 648-40-30</a> <a href=""
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
      <div class="form__buttons"><label class="form__label popup__label"><input type="text" name="Имя"
            class="input-reset form__input popup__input" placeholder="Введите номер" data-phone-mask required> <svg
            class="form__icon popup__icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
          </svg></label> <button class="btn-reset form__btn popup__btn"><span>Получить консультацию
            бесплатно</span></button></div>
      <p class="popup__help">Нажимая на кнопку «Получить консультацию», вы даёте согласие на обработку персональных
        данных в соответствии с <a href="#">Политикой конфиденциальности</a></p>
    </form>
  </div>
</div>
<div class="popup" data-popup-name="form2">
  <div class="popup__bgr" onclick="togglePopup('form2');"></div>
  <div class="popup__info"><button class="popup__close" onclick="togglePopup('form2');"><img
        src="<?php bloginfo('template_url'); ?>/assets/img/close.svg"></button>
    <div class="popup__info--contact"><a href="tel:+74956484030" class="popup__info--phone">+7 495 648-40-30</a> <a
        href="#" class="popup__info--whatsapp">Задать вопрос в WhatsApp</a></div>
    <p class="popup__info--text" onclick="togglePopup('form2'); togglePopup('form1');">Получить
      юридическую<br>консультацию <span>через 10 минут</span></p>
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
      <div class="form__buttons"><label class="form__label popup__label"><input type="text" name="Имя"
            class="input-reset form__input popup__input" placeholder="Введите номер" data-phone-mask required> <svg
            class="form__icon popup__icon">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
          </svg></label> <button class="btn-reset form__btn popup__btn"><span>Назначить встречу
            с юристом</span></button></div>
      <p class="popup__help">Нажимая на кнопку «Получить консультацию», вы даёте согласие на обработку персональных
        данных в соответствии с <a href="#">Политикой конфиденциальности</a></p>
    </form>
  </div>
</div>
</div>

<?php wp_footer(); ?>
</body>

</html>