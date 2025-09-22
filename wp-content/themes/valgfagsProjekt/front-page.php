<?php get_header() ?>

<main>
  <section class="heroSection">
    <img src="<?php echo get_field('hero_image')['url'] ?>" alt="" />
    <div class="welcome-text">
      <h1>Welcome</h1>
      <p>
        <?php the_field('front_page_welcome') ?>
      </p>
    </div>
  </section>
  <section>
    <h2 class="overskrifter">Welcome to our new Chefs</h2>
    <div class="chefsSection">
      <?php

      $roles = array('amateur_chef', 'professionel_chef');
      $chefs = get_users(array(
        'role__in' => $roles,
        'number'  => 3,
        'orderby' => 'user_registered',
        'order'   => 'DESC',
      ));

      foreach ($chefs as $chef) {
        $user_roles = $chef->roles;
        if (in_array('professionel_chef', $user_roles)) {
          $type = 'Professional chef';
        } elseif (in_array('amateur_chef', $user_roles)) {
          $type = 'Amateur chef';
        } else {
          $type = '';
        }
        $photo = get_field('chef_photo', 'user_' . $chef->ID);
        $photo_url = $photo ? $photo['url'] : '';
      ?>
        <div class="rundeKokke">
          <a href="<?php echo (get_author_posts_url($chef->ID)); ?>"><img src="<?php echo ($photo_url); ?>" alt="" /></a>
          <p><?php echo get_field('chef_name', 'user_' . $chef->ID); ?></p>
          <p><?php echo ($type); ?></p>
          <a href="<?php echo (get_author_posts_url($chef->ID)); ?>">See more <i class="fa-solid fa-chevron-right"></i></a>
        </div>
      <?php } ?>

    </div>
  </section>
  <section>
    <h2 class="overskrifter">Newest recipes</h2>
    <div class="allCards">
      <?php
      $args = array(
      'post_type' => 'opskrift',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
);

$recipes = new WP_Query($args);
    while ($recipes->have_posts()){
      $recipes->the_post();
      
        $chef_id = get_post_field('post_author', get_the_ID());
        $chef_user = get_userdata($chef_id);
        $chef_image = get_field('chef_photo', 'user_' . $chef_id);
      ?>

      

      <div class="lilleOpskriftCard">
        <div class="card-img">
          <a href="<?php echo get_author_posts_url($chef_user); ?>"><img class="chefIcon" src="<?php echo($chef_image)['url'] ?>" alt="" /></a>
          <img
            src="<?php echo get_field('billede_af_ret')['url'] ?>"
            alt="" />
        </div>
        <div class="card-indhold">
          <p><?php the_field('titel_ret') ?></p>

          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score"> <?php the_field('rating') ?></span>
            <span class="votes">| 8 ratings</span>
          </div>
        </div>
      </div>

    <?php } ?>

      
      
</main>

<?php get_footer() ?>