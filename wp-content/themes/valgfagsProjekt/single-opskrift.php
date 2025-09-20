<?php get_header(); ?>

<main>

    <?php
    while (have_posts()) {
        the_post(); ?>

        <section class="heroSection">
            <div class="enOpskriftHero">
                <img
                    src="<?php echo get_field('hero_image')['url'];  ?>"
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
                            <span>3.8 | 8 ratings</span>
                        </div>
                    </div>
                    <div class="author">
                        <img src="./assetsen/images/marry&john.jpg" alt="" />
                        <p>Marry & John S.</p>
                    </div>
                </div>
                <div class="details">
                    <div>
                        <h3>Prepare</h3>
                        <p>Less than 30 mins</p>
                    </div>
                    <div>
                        <h3>Cook time</h3>
                        <p>30 min to 1 hour</p>
                    </div>
                    <div>
                        <h3>Serves</h3>
                        <p>4 adults</p>
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
                        $steps = get_field('steps');
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
    <?php }
    ?>


    <section class="TipsSection">
        <h2 class="overskrifter">Tips</h2>
        <div class="tips">
            <p>This is also delicious served with little roasted potatoes, popped in the oven alongside the traybake.</p>
            <p>If you’re a family of two, it’s worth squirrelling half into the freezer. If you’re feeding four or five, double the quantities and bake in two tins so that the sauce thickens nicely as the meatballs cook: once cool, the tin can be covered and put straight into the freezer. Defrost fully in the fridge overnight, then cover with foil and heat through in a preheated oven at 180C/160C Fan/Gas 4, or warm smaller portions in the microwave or on the hob.

            </p>
        </div>

    </section>
    <section class="comments">
        <h2 class="overskrifter">Comments</h2>

    </section>
</main>

</body>

<?php get_footer(); ?>