<?php get_header(); ?>

<main>
    <?php 
      $archive_settings = get_page_by_path('archive-headings');

      $brands_hero = get_field('brands_hero_image', $archive_settings->ID);
      $brands_intro = get_field('brands_hero_heading', $archive_settings->ID);
      ?>
    
      <section class="heroSection">
        <img src="<?php echo ($brands_hero['url']); ?>" />
        <div class="welcome-text">
    

<div class="brands-intro">
    <h1>Brands We Trust</h1>
    <p><?php echo($brands_intro) ?></p>
</div>
</section>

<div class="brands-favourites">
  <h2 class="overskrifter">Newest Brands</h2>

  <div class="brands-grid">
    <?php
      $args = array(
        'post_type' => 'brand',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $newBrands = new WP_Query($args);
      while ($newBrands->have_posts()) {
        $newBrands->the_post();?>

        <div class="brand-card">
      <div class="brand-logo">
        <img src="<?php the_field('hero_image') ?>" alt="">
      </div>
      <div class="brand-name">
        <h3><?php the_field('brand_name') ?></h3>
      </div>
      <div class="brand-description">
        <p><?php echo wp_trim_words(get_field('brand_description'), 10, '...') ?></p>
        <div class="rating">
          <span class="stars">★★★★</span>
          <span class="score"> 4.8</span>
        </div>
      </div>
    </div>

    <?php } ?>

    


  <div class="brands-favourites">
  <h2 class="overskrifter">All Brands</h2>

  <div class="brands-grid">
 
    <?php while(have_posts()) {
        the_post()?>
    <div class="brand-card">
      <div class="brand-logo">
        <img src="<?php the_field('hero_image')['url'] ?>" alt="">
      </div>
      <div class="brand-name">
        <h3><?php the_field('brand_name') ?></h3>
      </div>
      <div class="brand-description">
        <p><?php echo wp_trim_words(get_field('brand_description'), 10, '...') ?></p>
        <div class="rating">
          <span class="stars">★★★★</span>
          <span class="score"> 3.8</span>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>
</div>



<?php get_footer(); ?>