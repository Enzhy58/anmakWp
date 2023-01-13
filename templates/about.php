<?php 
/*
Template Name: О компании
*/
get_header(); ?>

<main class="main">

  <section class="about page-section">
    <div class="container">
      <h2 class="title title--left">О компании</h2>
        <?php the_field('about-text'); ?>
      </div>
  </section>

</main>

<?php get_footer(); ?>