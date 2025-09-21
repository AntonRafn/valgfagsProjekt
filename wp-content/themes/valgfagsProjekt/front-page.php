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
    <h2 class="overskrifter">Meet the chefs</h2>
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
          <img src="<?php echo ($photo_url); ?>" alt="" />
          <p><?php echo get_field('chef_name', 'user_' . $chef->ID); ?></p>
          <p><?php echo ($intro); ?></p>
          <a href="<?php echo (get_author_posts_url($chef->ID)); ?>">See more <i class="fa-solid fa-chevron-right"></i></a>
        </div>
      <?php } ?>

    </div>
  </section>
  <section>
    <h2 class="overskrifter">Top rated recipes</h2>
    <div class="allCards">
      <div class="lilleOpskriftCard">
        <div class="card-img">
          <img class="chefIcon" src="./assetsen/images/joeM.jpg" alt="" />
          <img
            src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
            alt="" />
        </div>
        <div class="card-indhold">
          <p>Air fryer aubergine parmigiana</p>

          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score"> 3.8</span>
            <span class="votes">| 8 ratings</span>
          </div>
        </div>
      </div>
      <div class="lilleOpskriftCard">
        <div class="card-img">
          <img class="chefIcon" src="./assetsen/images/joeM.jpg" alt="" />
          <img
            src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
            alt="" />
        </div>
        <div class="card-indhold">
          <p>Air fryer aubergine parmigiana</p>

          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score"> 3.8</span>
            <span class="votes">| 8 ratings</span>
          </div>
        </div>
      </div>
      <div class="lilleOpskriftCard">
        <div class="card-img">
          <img class="chefIcon" src="./assetsen/images/joeM.jpg" alt="" />
          <img
            src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
            alt="" />
        </div>
        <div class="card-indhold">
          <p>Air fryer aubergine parmigiana</p>

          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score"> 3.8</span>
            <span class="votes">| 8 ratings</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>