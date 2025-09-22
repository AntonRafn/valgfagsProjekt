<?php get_header(); ?>

<main>

    <?php
    while (have_posts()) {
        the_post(); ?>

        <section class="heroSection">
            <div class="enOpskriftHero">
                <img
                    src="<?php echo get_field('billede_af_ret')['url']  ?>"
                    alt="" />
            </div>
            <div class="opskriftCard">
                <div class="opskrift-header">
                    <div class="opskriftHeader">
                        <h1><?php the_title()  ?></h1>
                        <p>
                            <?php the_field('food_description') ?>
                        </p>
                        <div class="rating">
                            <span class="stars">★★★★☆</span>
                            <span><?php the_field('rating') ?> | 8 ratings</span>
                        </div>
                    </div>
                    <div class="author">
                        <?php
                        $author_id = get_the_author_meta('ID');
                        $chef_name = get_field('chef_name', 'user_' . $author_id);
                        $chef_photo = get_field('chef_photo', 'user_' . $author_id);
                        $author_url = get_author_posts_url($author_id);
                        ?>
                        <a href="<?php echo $author_url ?>"><img src="<?php echo $chef_photo['url'] ?>" alt="" /></a>
                        <p><?php echo $chef_name ?></p>
                    </div>
                </div>
                <div class="details">
                    <div>
                        <h3>Prepare</h3>
                        <p><?php the_field('prep') ?></p>
                    </div>
                    <div>
                        <h3>Cook time</h3>
                        <p><?php the_field('cooking_time') ?></p>
                    </div>
                    <div>
                        <h3>Serves</h3>
                        <p><?php the_field('serving_size') ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="opskriftContainer">
                <div class="ingredients">
                    <ul>
                        <?php
                        $ingredients = get_field('ingredients');
                        $lines = explode("\n", $ingredients);
                        foreach ($lines as $line) {
                            $line = trim($line);
                            if (!empty($line)) {
                                echo '<li>' . $line . '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="Steps">
                    <ol>
                        <?php
                        $steps = get_field('method');
                        $lines = explode("\n", $steps);
                        foreach ($lines as $line) {
                            $line = trim($line);
                            if (!empty($line)) {
                                echo '<li>' . $line . '</li>';
                            }
                        }
                        ?>
                    </ol>
                </div>
        </section>



        <section class="TipsSection">
            <h2 class="overskrifter">Tips</h2>
            <div class="tips">


            </div>
        </section>

    <?php }
    ?>
    <section class="comments">
        <h2 class="overskrifter">Comments</h2>
        <?php if (comments_open()) {
            comments_template();
        } ?>
    </section>
</main>


<?php get_footer(); ?>