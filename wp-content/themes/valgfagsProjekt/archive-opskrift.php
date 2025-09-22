<?php get_header() ?>

<main>


  <section class="heroSection">
    <div class="alleOpskHero">
      <?php 
      $archive_settings = get_page_by_path('archive-headings');

      $recipes_hero = get_field('recipes_hero_image', $archive_settings->ID);
      $recipes_intro = get_field('recipes_hero_heading', $archive_settings->ID);
      ?>
      <img src="<?php echo ($recipes_hero['url']); ?>" alt="" />
      <p>
        <?php echo($recipes_intro) ?>
      </p>
    </div>
  </section>

  <section>
    <h2 class="overskrifter">Recipes</h2>
    <div class="filterSortFunction">
      <div class="showAll">
        <button class="filterButton showAllButton">Show All</button>
      </div>
      <div class="filter">
        <button class="filterButton">
          Filter after <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="filterContent">
          <a href=""> Amateur chefs</a>
          <a href=""> Professional chefs</a>
          <a href="">Main course</a>
          <a href="">Dessert</a>
        </div>
      </div>
      <div class="sort">
        <button class="sortButton">
          Sort after <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="sortContent">
          <a href=""> A-Z</a>
          <a href=""> Newest - oldest </a>
        </div>
      </div>
    </div>
    <div class="allCards">

      <?php while (have_posts()) {
        the_post();

        $chef_id = get_post_field('post_author', get_the_ID());
        $chef_user = get_userdata($chef_id);
        $chef_image = get_field('chef_photo', 'user_' . $chef_id);
      ?>
        <div class="opskriftCard"
          data-author-role="<?php echo (ucfirst($chef_user->roles[0])); ?>"
          data-category="<?php echo (get_field('category')); ?>"
          data-title="<?php the_title_attribute(); ?>"
          data-date="<?php echo get_the_date('Y-m-d'); ?>">

          <div class="card-img">
            <a href="<?php echo get_author_posts_url($chef_user->ID); ?>">
              <img class="chefIcon" src="<?php echo ($chef_image['url']); ?>" alt="" />
            </a>
            <a href="<?php the_permalink() ?>">
              <img src="<?php echo get_field('billede_af_ret')['url'] ?>" alt="" />
            </a>
          </div>
          <div class="card-indhold">
            <a href="<?php the_permalink() ?>">
              <p><?php the_field('titel_ret') ?></p>
            </a>

            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="score"><?php the_field('rating') ?></span>
              <span class="votes">| 8 ratings</span>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </section>
</main>


<?php get_footer() ?>