<?php get_header(); ?>

<div class="brands-intro">
    <h1>Brands We Trust</h1>
    <p>Discover the kitchenware brands our chefs swear by. 
    Each one is chosen for their quality, craftsmanship, and timeless design.</p>
</div>

    <div class="brands-favourites">
        <h2 class="overskrifter">Most Used Brands</h2>
        
        <div class="brands-grid">
            <?php 
            
            while(have_posts()) {
                the_post(); ?>

                <div class="brand-card">
                <div class="brand-logo">
                    <img src="<?php echo get_field('hero_image')['url']; ?>" alt="">
                </div>
                <div class="brand-name">
                    <h3><?php the_title() ?></h3>
                </div>
                <div class="brand-description">
                    <p>Used in 21% of all recipes</p>
                <div class="rating-number">9.7</div>
                </div>
            </div>


            <?php }
            ?>

        </div>

    </div>

    <div class="brands-favourites">
        <h2 class="overskrifter">All beloved brands</h2>
        <section class="allRecipes">
        <h2 class="overskrifter">All recipes</h2>
        <div class="filterSortFunction">
          <div class="filter">
            <button class="filterButton">
              Filter after <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="filterContent">
              <h2 class="chefButton"></h2>
              <a href=""> Home chefs</a>
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
              <a href="">Popular</a>
              <a href=""> Newest - oldes </a>
              <a href="">Ratings</a>
            </div>
          </div>
        </div>
      </section>
        
        <div class="brands-grid">
            <div class="brand-card">
                <div class="brand-logo">
                    <img src="https://picsum.photos/400/300" alt="">
                </div>
                <div class="brand-name">
                    <h3 >Master Craft</h3>
                </div>
                <div class="brand-description">
                    <p>Used in 21% of all recipes</p>
                <div class="rating-number">9.7</div>
                </div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <img src="https://picsum.photos/400/300" alt="">
                </div>
                <div class="brand-name">
                    <h3>Master Craft</h3>
                </div>
                <div class="brand-description">
                    <p>Used in 21% of all recipes</p>
                <div class="rating-number">9.7</div>
                </div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <img src="https://picsum.photos/400/300" alt="">
                </div>
                <div class="brand-name">
                    <h3>Master Craft</h3>
                </div>
                <div class="brand-description">
                    <p>Used in 21% of all recipes</p>
                <div class="rating-number">9.7</div>
                </div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <img src="https://picsum.photos/400/300" alt="">
                </div>
                <div class="brand-name">
                    <h3>Master Craft</h3>
                </div>
                <div class="brand-description">
                    <p>Used in 21% of all recipes</p>
                <div class="rating-number">9.7</div>
                </div>
            </div>
        </div>

    </div>



<?php get_footer(); ?>