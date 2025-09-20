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
        <button class="filter">Filter  ⬇</button>
        
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