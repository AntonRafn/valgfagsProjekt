<?php get_header() ?>
<main>
  <section class="heroSection">
    <?php 
      $archive_settings = get_page_by_path('archive-headings');

      $stories_hero = get_field('stories_hero_image', $archive_settings->ID);
      $stories_intro = get_field('stories_hero_heading', $archive_settings->ID);
      ?>
    <img
      src="<?php echo ($stories_hero['url']); ?>"
      alt="" />
    <p class="welcome-text">
      <?php echo($stories_intro) ?>
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
          <a href="<?php the_permalink() ?>">
            <?php echo wp_trim_words(get_field('story_text'), 15, '...') ?>
            <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>
        <img src="<?php the_field('hero_image')['url'] ?>" alt="" />
      </div>
    </section>
    <?php } ?>

</main>
<?php get_footer() ?>