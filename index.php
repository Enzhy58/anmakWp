<?php 
/*
Template Name: Главная
*/
get_header(); ?>

<main class="main">

  <section class="production page-section">
    <div class="container">
      <h2 class="title">
        <?php the_field('title-slider'); ?>
      </h2>
      <div class="production__wrapper">

        <ul class="production__slider">

        <?php 
          $loop = CFS()->get('slider');
          foreach ($loop as $row) {
        ?>
          <li class="production__slide">
            <img class="production__img" src="<?=$row['slider-img']; ?>" alt="">
          </li>
        <?php
          }
        ?>

        </ul>

        <div class="production__box">
          <ul class="production__list">
            <?php
              $posts = get_posts([
                'numberposts' => -1,
                'category_name' => 'slider',
                'orderby' => 'title',
                'post_type' => 'post',
                'suppress_filter' => true
              ]);
              foreach($posts as $post) {
                setup_postdata($post);
            ?>
              <li class="production__item">
                <span><?php the_title(); ?></span>
                <?php the_content(); ?>
              </li>
            <?php
              }
              wp_reset_postdata();
            ?>
          </ul>
          <a class="production__link btn" href="#">Быстрый расчет стоимости</a>
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

      <h3 class="subtitle">
        <?php the_field('production-title'); ?>
      </h3>

      <div class="production__inner">
        <div class="production__content">
          <div class="production__text">
            <?php the_field('production-text'); ?>
          </div>
          <ul class="production__content-list">
            <li class="production__content-item">
              <?php the_field('production-benefits--1'); ?>
            </li>
            <li class="production__content-item">
              <?php the_field('production-benefits--2'); ?>
            </li>
          </ul>
        </div>

        <div class="production__video">
          <iframe width="477" height="270" src="<?php the_field('video'); ?>" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>

    </div>

  </section>

  <section class="benefits page-section">
    <div class="container">

      <h2 class="title">Наши преимущества</h2>

      <div class="benefits__text">
        <?php the_field('benefits-text'); ?>
      </div>

      <ul class="benefits__list">
        <?php
          $posts = get_posts([
            'numberposts' => -1,
            'category_name' => 'benefits',
            'orderby' => 'title',
            'post_type' => 'post',
            'suppress_filter' => true
          ]);
          foreach($posts as $post) {
            setup_postdata($post);
        ?>
            <li class="benefits__item">
              <?php the_post_thumbnail(
                array(89, 89),
                array (
                  'class' => 'benefits__img'
                )
              ); ?>
              <div class="benefits__description">
                <?php the_content(); ?>
              </div>
            </li>
        <?php
          }
          wp_reset_postdata();
        ?>

      </ul>

    </div>
  </section>

</main>

<?php get_footer(); ?>