<?php get_header() ?>

<?php
    while (have_posts()) {
        the_post(); ?>
 <section class="chef-hero">
  <div class="hero-inner">
    <div class="hero-photo-kok">
      <img src="<?php echo get_field('chef_photo')['url']; ?>" alt="" class="hero-portrait-kok">
      <span class="stars">★★★★★ <?php the_field('chef_rating') ?></span>
    </div>
 
    <div class="hero-text-kok">
      <h1><?php the_field('chef_name') ?></h1>
      <p class="chef-title"><?php the_field('chef_rank') ?></p>
      <p class="chef-bio">
        <?php the_field('chef_intro') ?>
      </p>
    </div>
  </div>
</section>
<?php } ?>
 
 
<!-- Joe’s Dishes -->
 <section class="all-dishes">
  <div class="section-divider">
    <h3>Joe's Dishes</h3>
  </div>
 
 <section class="all-dishes">
 
  <div class="dishes-grid collapsed">
    <article class="dish-card">
      <img src="./img/Pro/Retter/baked_haddock_with_44883_16x9.jpg" alt="Baked haddock" class="dish-img">
      <h4>Baked haddock with lentils and mascarpone</h4>
      <p>A deliciously easy fish supper that can be popped into the oven and left to cook while you get on with other things...</p>
 
 <span class="dish-tag">1 hour</span>      
   <span class="dish-tag">Fish</span>
           <span class="dish-tag">Serves 4</span>
      <span class="stars">★★★★★ 4.9</span>
    </article>
 
  </div>
</section>



 
 <section>
  <div class="section-divider">
    <h3>Joe’s Comments</h3>
  </div>
  </section>
 
 
   <section>
  <div class="section-divider">
    <h3>Joe’s Stories</h3>
  </div>
  </section>
  

  <?php get_footer() ?>