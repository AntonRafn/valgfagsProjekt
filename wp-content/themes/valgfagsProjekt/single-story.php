<?php get_header() ?>
<main>
    <?php while(have_posts()) {
        the_post()?>
      <section>
        <div class="heroSection">
          <img
            src="<?php echo get_field('hero_image')['url'] ?>"
            alt=""
          />
          <div class="welcome-text">
            <h1><?php the_field('story_title') ?></h1>
            <p>By <?php the_author(); ?></p>
          </div>
        </div>
      </section>
      <section>
        <div class="storyIndhold">
          <p>
            <?php the_field('story_text') ?>
          </p>
        </div>
      </section>
        <?php } ?>
    </main>
    <?php get_footer() ?>