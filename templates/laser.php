<?php 
/*
Template Name: Лазерная резка
*/
get_header(); ?>

<main class="main">

  <section class="services page-section">

    <div class="container">

      <h2 class="title title--left">Лазерная резка</h2>

      <div class="services__text">
        <?php the_field('laser-text'); ?>
      </div>

      <div class="technology">
        <h3 class="subtitle">
          <?php the_field('laser-subtitle-technology'); ?>
        </h3>
        <div class="technology__inner">
          <img class="technology__img" src="<?php the_field('technology-img'); ?>" alt="" width="650" height="406">
          <?php the_field('technology-list'); ?>
        </div>
      </div>

    </div>


    <div class="specifications">
      <div class="container">
        <ul class="specifications__list">
          <?php
            $posts = get_posts([
              'numberposts' => -1,
              'category_name' => 'specifications',
              'post_type' => 'post',
              'suppress_filter' => true
            ]);
            foreach($posts as $post) {
              setup_postdata($post);
          ?>

          <?php the_content(); ?>

          <?php
            }
            wp_reset_postdata();
          ?>

        </ul>
      </div>
    </div>


    <div class="container">
      
      <div class="price page-section">
        <h3 class="subtitle">Стоимость плазменной резки</h3>
        <div class="price__wrapper">
          <?php echo do_shortcode('[table id=2 /]'); ?>
        </div>
      </div>


      <div class="services-benefits page-section">
        
        <h3 class="subtitle">Почему выбирают нас?</h3>

        <ul class="services-benefits__list">
          <?php
            $posts = get_posts([
              'numberposts' => -1,
              'category_name' => 'services-benefits',
              'orderby' => 'title',
              'post_type' => 'post',
              'suppress_filter' => true
            ]);
            foreach($posts as $post) {
              setup_postdata($post);
          ?>
            <li class="services-benefits__item">
              <?php the_post_thumbnail(
              array(96, 91),
              array (
                'class' => 'services-benefits__img'
              )
            ); ?>
              <div class="services-benefits__description">
                <?php the_content(); ?>
              </div>
            </li>
          <?php
            }
            wp_reset_postdata();
          ?>
        </ul>

        <div class="services-benefits__text services__text">
          <?php the_field('services-benefits-text'); ?>
        </div>

        <div class="services-benefits__wrapper">
          <div class="services-benefits__content">
            <p>
              Оформите заявку на сайте, мы свяжемся с вами в ближайшее время и ответим на все интересующие
              вопросы.
            </p>
          </div>
          <a class="services-benefits__link btn" href="#">Заказать услугу</a>
        </div>

      </div>


      <div class="orders page-section">
        <h3 class="subtitle">Выполненные заказы</h3>
        <ul class="orders__list">
          <?php 
            $loop = CFS()->get('order');
            foreach ($loop as $row) {
          ?>
            <li class="orders__item">
              <a class="orders__link zoom" href="<?=$row['order-img']; ?>"
                style="background-image: url(<?=$row['order-img']; ?>);" width="255" height="180" data-fancybox="images">
              </a>
            </li>
          <?php
            }
          ?>
        </ul>
      </div>


      <div class="interesting psge-section">

        <h3 class="subtitle">Интересные факты о технологии резки</h3>

        <ul class="interesting__list">
          <?php
            $posts = get_posts([
              'numberposts' => -1,
              'category_name' => 'interesting-laser',
              'post_type' => 'post',
              'suppress_filter' => true
            ]);
            foreach($posts as $post) {
              setup_postdata($post);
          ?>
            <li class="interesting__inner">
              <?php the_post_thumbnail(
                array(395, 250),
                array (
                  'class' => 'interesting__img'
                )
              ); ?>
              <div class="interesting__content">
                <h4 class="interesting__title">
                  <?php the_title(); ?>
                </h4>
                <div class="interesting__text">
                  <?php the_content(); ?>
                </div>
              </div>
            </li>
          <?php
            }
            wp_reset_postdata();
          ?>
        </ul>
      </div>


    </div>
  </section>
</main>
<?php get_footer(); ?>