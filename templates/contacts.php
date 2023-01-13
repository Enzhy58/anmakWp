<?php 
/*
Template Name: Контакты
*/
get_header(); ?>

<main class="main">

  <section class="contacts page-section">
    <div class="container">
      <h2 class="title title--left">Контакты</h2>
      <div class="contacts__inner">

        <div class="contacts__box">

          <ul class="contacts__list">
            <li class="contacts__item contacts__item--phone">
              <span class="contacts__name">Телефон:</span>
              <?php the_field('phone', 445); ?>
            </li>
            <li class="contacts__item contacts__item--email">
              <span class="contacts__name">E-mail для связи:</span>
              <?php the_field('e-mail', 445); ?>
            </li>
            <li class="contacts__item contacts__item--production">
              <span class="contacts__name">Производство:</span>
              <address class="contacts__address">
                <?php the_field('address', 445); ?> </br>
                <?php the_field('working-hours'); ?>
              </address>
            </li>
          </ul>

          <a class="contacts__scheme" href="#" download>Скачать схему проезда</a>

        </div>

        <div class="contacts__box">
          <span class="contacts__name contacts__requisites">Реквизиты:</span>
          <ul class="contacts__requisites-list">
            <?php the_field('requisites'); ?>
          </ul>
        </div>

    </div>

    <?php the_field('map'); ?>

  </section>

</main>

<?php get_footer(); ?>