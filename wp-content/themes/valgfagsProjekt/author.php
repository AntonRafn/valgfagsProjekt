<?php get_header() ?>

<?php
$author = get_queried_object();
$author_id = $author->ID;

$chef_photo = get_field('chef_photo', 'user_' . $author_id);
$chef_name  = get_field('chef_name', 'user_' . $author_id);
$chef_intro = get_field('chef_intro', 'user_' . $author_id);
$user_role = ucfirst($author->roles[0]);
?>
<section class="chef-hero">
    <div class="hero-inner">
        <div class="hero-photo-kok">
            <img src="<?php echo get_field('chef_photo')['url']; ?>" alt="" class="hero-portrait-kok">
            <span class="stars">★★★★★ 5</span>
        </div>

        <div class="hero-text-kok">
            <h1><?php the_field('chef_name') ?></h1>
            <p class="chef-title"><?php echo ($user_role) ?></p>
            <p class="chef-bio">
                <?php the_field('chef_intro') ?>
            </p>
        </div>
    </div>
</section>





<section class="all-dishes">
    <div class="section-divider">
        <h3><?php the_field('chef_name') ?>'s Dishes</h3>

    </div>

    <section class="all-dishes">

        <div class="dishes-grid collapsed">
            <?php
            $recipesByAuthor = new WP_Query(array(
                'post_type' => 'opskrift',
                'author'    => $author_id,
                'posts_per_page' => -1,
            ));
            while ($recipesByAuthor->have_posts()) {
                $recipesByAuthor->the_post();
            ?>
                <article class="dish-card">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_field('billede_af_ret')['url'] ?>" alt="" class="dish-img"></a>
                    <h4><?php the_field('titel_ret') ?></h4>
                    <p><?php the_field('description') ?></p>

                    <span class="dish-tag"><?php the_field('cooking_time') ?></span>
                    <!-- <span class="dish-tag">Fish</span> -->
                    <span class="dish-tag">Serves <?php the_field('serving_size') ?></span>
                    <span class="stars">★★★★★ <?php the_field('rating') ?></span>
                </article>
            <?php }
            wp_reset_postdata(); ?>

        </div>
    </section>



    <section>
        <div class="section-divider">
            <h3><?php the_field('chef_name') ?>'Stories</h3>
        </div>
        <?php
        $storiesByAuthor = new WP_Query(array(
            'post_type' => 'story',
            'author'    => $author_id,
            'posts_per_page' => -1,
        ));
        while ($storiesByAuthor->have_posts()) {
            $storiesByAuthor->the_post();
        ?>
            <article class="dish-card">
                <a href="<?php the_permalink() ?>"><img src="<?php echo get_field('hero_image')['url'] ?>" alt="" class="dish-img"></a>
                <h4><?php the_field('story_title') ?></h4>
                <p><?php echo wp_trim_words(get_field('story_text'), 15, '...') ?></p>

            </article>
        <?php }
        wp_reset_postdata() ?>

    </section>


    <?php get_footer() ?>