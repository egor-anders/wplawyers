<?php
/*
Template Name: thanks
*/

?>


<?php
get_header();

?>

<section class="thank">
  <div class="container">
    <div class="small-container">
      <h1 class="thank__title">
      <?php echo carbon_get_post_meta(get_the_ID(), 'thanks__title'); ?>
      </h1>
      <p class="thank__text">
      <?php echo carbon_get_post_meta(get_the_ID(), 'thanks__subtitle'); ?>
      </p>
      <a href="tel: <?php echo carbon_get_theme_option('phone'); ?>" class="thank__phone"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone.svg" /> <?php echo carbon_get_theme_option('phone-visual'); ?></a>
      <div class="thank__actions">
        <p class="thank__actions--text">Или напишите<br />в WhatsApp</p>
        <a target="_blank" href=" <?php echo carbon_get_theme_option('whatsapp'); ?>" class="btn thank__btn">Написать в WhatsApp</a>
      </div>
      <div class="thank__info">
        <div class="thank__info--item">
          <strong>
            <?php echo carbon_get_post_meta(get_the_ID(), 'thanks__name'); ?>
          </strong><br />
          <?php echo carbon_get_post_meta(get_the_ID(), 'thanks__descr'); ?>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/total/decoration.svg" class="thank__info--img" />
        <div class="thank__info--item">
          <?php echo carbon_get_post_meta(get_the_ID(), 'thanks__help'); ?>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_url'); ?>/assets/img/kulikov-thank.png" alt="Фото Дениса Куликова" class="thank__img" />
</section>
</div>

<main>
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
      <div class="next">
        <img src="img/svg/next.svg" class="next__icon" />
        <p class="next__text m-reset">
          Чтобы посмотреть следующее<br />дело, проведите в сторону
        </p>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

?>