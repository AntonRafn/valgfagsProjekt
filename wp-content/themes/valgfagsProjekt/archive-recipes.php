<?php get_header() ?>

<main>


  <section class="heroSection">
    <div class="alleOpskHero">
      <img src="./img/heroAlleOpskrifter.jpg" alt="" />
      <p>
        Dive into a collection of inspiring dishes, from simple home-cooked
        meals to refined gourmet creations. Each recipe comes with tips to
        help you cook with confidence and creativity.
      </p>
    </div>
  </section>

  <section>
    <h2 class="overskrifter">Top rated recipes</h2>
    <div class="allCards">
      <?php while (have_posts()) {
        the_post();

        $chef_id = get_post_field('post_author', get_the_ID());
        $chef_user = get_userdata($chef_id);
        $chef_image = get_field('chef_photo', 'user_' . $chef_id);
      ?>

        <a href="<?php the_permalink() ?>" class="opskriftCard">
          <div class="card-img">
            <img class="chefIcon" src="<?php echo ($chef_image['url'] ); ?>?>" alt="" />
            <img src="<?php echo get_field('billede_af_ret')['url'] ?>" alt="" />
          </div>
          <div class="card-indhold">
            <p><?php the_field('titel_ret') ?></p>

            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="score"><?php the_field('rating') ?></span>
              <span class="votes">| 8 ratings</span>
            </div>
          </div>
        </a>

      <?php } ?>

    </div>
  </section>
</main>


<?php get_footer() ?>