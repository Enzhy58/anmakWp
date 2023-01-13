<footer class="footer">
  <div class="container">

    <div class="footer__inner">

      <div class="footer__box">
        <h3 class="footer__title">Виды продукции:</h3>
        <ul class="footer__list">
          <li class="footer__item">
            <a class="footer__link" href="#">Продукция 1</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Продукция 2</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Продукция 3</a>
          </li>
        </ul>
      </div>

      <div class="footer__box">
        <h3 class="footer__title">Услуги:</h3>
        <?php
          wp_nav_menu( [
            'theme_location' => 'footer-services',
            'container' => '',
            'menu_class' => 'footer__list',
            'menu_id' => ''
          ] );
        ?>  
      </div>  

      <div class="footer__box">
        <?php
          wp_nav_menu( [
            'theme_location' => 'footer-copy',
            'container' => '',
            'menu_class' => 'footer__copy',
            'menu_id' => ''
          ] );
        ?>
      </div>

      <div class="footer__box">
        <h3 class="footer__title">Контактные данные:</h3>
        <ul class="footer__list">
          <li class="footer__item">Телефон: <?php the_field('phone', 445); ?></li>
          <li class="footer__item">Email: <?php the_field('e-mail', 445); ?> </li>
          <li class="footer__item">Адрес: <?php the_field('address', 445); ?></li>
          <li class="footer__item">Координаты навигатора: <?php the_field('coordinates', 445); ?></li>
        </ul>
        <div class="footer__contact">
          <a class="footer__phone btn" href="tel:<?php the_field('phone-number', 445); ?>"></a>
          <a class="footer__email btn" href="#">Задать вопрос</a>
          <a class="footer__social" href="<?php the_field('vk', 445); ?>" target="_blank">
            <img class="footer__img" src="<?php bloginfo('template_url'); ?>/assets/images/icons/vk.svg" alt="вконтакте">
          </a>
        </div>

      </div>

    </div>

  </div>
</footer>

<script src="js/main.min.js"></script>
</div>
<?php wp_footer(); ?>
</body>

</html>