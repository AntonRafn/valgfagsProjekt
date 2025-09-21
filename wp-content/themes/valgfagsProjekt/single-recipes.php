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
                        <img src="<?php echo get_field('kok_billede')['url']; ?>" alt="" />
                        <p><?php the_field('kok_navn') ?></p>
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
            <p><?php the_field('tips') ?></p>
            
        </div>

    </section>

    <?php }
    ?>
    <section class="comments">
        <h2 class="overskrifter">Comments</h2>

    </section>
</main>

</body>

<?php get_footer(); ?>