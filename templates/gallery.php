<?php 
/*
Template Name: Примеры работ
*/
get_header(); ?>

<main class="main">

  <section class="gallery page-section">
    <div class="container">

      <h2 class="title title--left">Примеры работ</h2>

      <ul class="gallery__list">

        <?php 
          $loop = CFS()->get('portfolio');
          foreach ($loop as $row) {
            ?>
            <li class="gallery__item">
              <a class="gallery__link zoom" href="<?=$row['portfolio_img']; ?>" style="background-image: url(<?=$row['portfolio_img']; ?>);" width="350" height="205" data-fancybox="images">
                <p class="gallery__description"><?=$row['portfolio_description']; ?></p>
              </a>
            </li>
            <?php
          }
        ?> 
         
      </ul>

    </div>
  </section>

</main>
<?php get_footer(); ?>