<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">

    <header class="header">

      <nav class="menu">

        <div class="container">
          <div class="menu__top">

            <a class="logo" href="<?php echo home_url(); ?>">
              <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="логотип" id="home">
            </a>

            <ul class="menu__top-list">
              <li class="menu__top-item">
                <a class="menu__top-link" href="#">Примеры</a>
              </li>
              <li class="menu__top-item">
                <a class="menu__top-link" href="#">Кейсы</a>
              </li>
              <li class="menu__top-item">
                <a class="menu__top-link" href="#">Видео</a>
              </li>
            </ul>

            <form class="form" action="#">
              <div class="form__top">
                <h2 class="form__title">Свяжитесь с нами сейчас:</h2>
                <button class="form__close">
                  <svg class="form__img">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#close"></use>
                  </svg>
                </button>
              </div>
              <div class="form__bottom">
                <?php echo do_shortcode('[contact-form-7 id="324" title="Контактная форма"]'); ?>
              </div>
            </form>

            <ul class="menu__contact-list">
              <li class="menu__contact-item">
                <a class="menu__contact-phone" href="tel:<?php the_field('phone-number', 445); ?>">
                  <?php the_field('phone', 445); ?>
                </a>
              </li>
              <li class="menu__contact-item">
                <a class="menu__contect-email" href="#">Задать вопрос</a>
              </li>
            </ul>

          </div>
        </div>


        <div class="menu__bottom">
          <div class="container">

            <button class="menu__btn">
              <span></span>
            </button>

            <?php
              wp_nav_menu( [
                'theme_location' => 'top',
                'container' => '',
                'menu_class' => 'menu__bottom-list',
                'menu_id' => ''
              ] );
            ?>  
            
          </div>
        </div>

      </nav>

    </header>