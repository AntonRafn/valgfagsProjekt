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
        <h2 class="overskrifter">Meet the chefs</h2>
        <div class="chefsSection">
          <div class="rundeKokke">
            <img src="./img/marryAndJohn.jpg" alt="" />
            <p>Marry & John S.</p>
            <p>Professional chefs</p>
            <a href="">See more <i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <div class="rundeKokke">
            <img src="./img/COLOURBOX52734935.jpg" alt="" />
            <p>Anja & Sally T.</p>
            <p>Home chef</p>
            <a href="">See more <i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <div class="rundeKokke">
            <img src="./img/Lisa.jpg" alt="" />
            <p>Lisa L.</p>
            <p>Amateur chef</p>
            <a href="">See more <i class="fa-solid fa-chevron-right"></i></a>
          </div>
        </div>
      </section>
      <section>
        <h2 class="overskrifter">Top rated recipes</h2>
        <div class="allCards">
            <?php while(have_posts()) {
                the_post(); ?> 
          
            <a href="<?php the_permalink() ?>" class="opskriftCard">
            <div class="card-img">
              <img class="chefIcon" src="<?php the_field('kok_billede') ?>" alt="" />
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