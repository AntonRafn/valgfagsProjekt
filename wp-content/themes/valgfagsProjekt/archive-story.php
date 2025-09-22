<?php get_header() ?>
<main>
  <section class="heroSection">
    <img
      src="./assetsen/images/heroBP.jpg"
      alt="Hero billede til blog siden med en dreng og hans far" />
    <p class="welcome-text">
      Explore inspiring stories from kitchens around the world — from chefs’
      journeys and culinary traditions to personal food memories and tips.
      Discover the passion behind the recipes and let the stories enrich
      your own cooking experience.
    </p>
  </section>
  <?php while (have_posts()) {
    the_post(); ?>
    <section class="blogPosts">
      <div class="BPCards">

        <div class="BPContent">
          <h2><?php the_field('story_title') ?></h2>
          <div class="BPindhold">
            <span class="BPauthor"> <?php the_author(); ?></span>
            <span class="dato"><?php echo get_the_date('d.m.Y'); ?></span>
          </div>
          <a href="">
            <?php echo wp_trim_words(get_field('story_text'), 15, '...') ?>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>
        <img src="<?php the_field('hero_image')['url'] ?>" alt="" />
      </div>
    <?php } ?>

</main>
<?php get_footer() ?>