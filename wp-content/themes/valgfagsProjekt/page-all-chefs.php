<?php get_header() ?>
<main>
      <section>
        <div class="heroSection">
          <img
            src="<?php echo get_field('chefs_hero')['url'] ?>"
            alt="Hero billede til
        kokke siden"
          />
          <div class="welcome-text">
            <h1>Meet the Masters Behind the Recipes</h1>
            <p>
              Discover the stories, skills, and culinary artistry of our
              featured professional chefs. Here, you’ll get to know the creative
              minds shaping the dishes you love—from their signature techniques
              to their favorite ingredients. Each chef brings their unique
              flavor and expertise, inspiring both aspiring cooks and seasoned
              pros alike.
            </p>
          </div>
        </div>
      </section>
      <section>
        <h2 class="overskrifter">Meet the chefs</h2>
        
        <div class="chefsSection">
            <?php
        $roles = array('amateur_chef', 'professionel_chef');
        $chefs = get_users(array(
        'role__in' => $roles,
        'orderby' => 'user_registered',
        'order' => 'DESC',
        ));

        foreach ($chefs as $chef) {
        $photo = get_field('chef_photo', 'user_' . $chef->ID); ?>
        
        <div class="rundeKokke">
            <img src="<?php echo esc_url($photo['url']); ?>" alt="" />
            <p><?php echo esc_html(get_field('chef_name', 'user_' . $chef->ID)); ?></p>
            <p><?php echo esc_html($chef->roles[0]); ?></p>
            <a href="<?php echo get_author_posts_url($chef->ID); ?>">See more <i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <?php } ?>
        </div>
      </section>

      <section class="dishes">
        <h2 class="overskrifter">Signature dishes</h2>
        <div class="dishesInfo welcome-text">
          <h2>Every chef has a story to tell</h2>
          <div class="dishesIndhold">
            <p>
              These creations capture their passion, craft, and unique flavor
              philosophy, giving you a taste of their culinary journey.
            </p>
            <a class="seeOthers"
              >See other's signature dishes
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
       
        <div class="dishesCards">
          <div class="allCards">
            <div class="mellemOpskriftCard">
              <div class="mellemCard-img">
                <img
                  src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
                  alt=""
                />
              </div>
              <div class="card-indhold">
                <h2>Baked haddock with lentils and mascarpone</h2>
                <p>
                  A deliciously easy fish supper that can be popped into the
                  oven and left to cook while you get on with other things.
                  Serve with crusty bread and pan-fried Tenderstem broccoli if
                  you like.
                </p>
              </div>
            </div>
            <div class="mellemOpskriftCard">
              <div class="mellemCard-img">
                <img
                  src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
                  alt=""
                />
              </div>
              <div class="card-indhold">
                <h2>Baked haddock with lentils and mascarpone</h2>
                <p>
                  A deliciously easy fish supper that can be popped into the
                  oven and left to cook while you get on with other things.
                  Serve with crusty bread and pan-fried Tenderstem broccoli if
                  you like.
                </p>
              </div>
            </div>
          </div>
        </div>
      
      <section class="allRecipes">
         <h2 class="overskrifter"> All recipes</h2>
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
        <div class="allCards">
          <div class="lilleOpskriftCard">
            <div class="card-img">
              <img class="chefIcon" src="./assetsen/images/joeM.jpg" alt="" />
              <img
                src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
                alt=""
              />
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
                alt=""
              />
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
                alt=""
              />
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
          <div class="allCards">
          <div class="lilleOpskriftCard">
            <div class="card-img">
              <img class="chefIcon" src="./assetsen/images/joeM.jpg" alt="" />
              <img
                src="./assetsen/images/air_fryer_aubergine_96744_16x9.jpg"
                alt=""
              />
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
                alt=""
              />
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
                alt=""
              />
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
          
      </section>
      
    </main>
    <?php get_footer() ?>