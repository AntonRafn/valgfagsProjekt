<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
  <header>
<nav >
  <div class="navbar">
    <a href="<?php echo home_url('/'); ?>"><img class="logo" src="/assetsen/images/logoen.jpg" alt="Logo" /></a>

    <div class="nav-links">
      <div class="dropdown">
        <button class="dropdownButton">
          Chefs <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="dropdownContent">
          <a href="#">Home chefs</a>
          <a href="#">Amateur chefs</a>
          <a href="#">Professional chefs</a>
        </div>
      </div>
      <a href="<?php echo get_post_type_archive_link('opskrift'); ?>">Recipes</a>
      <a href="<?php echo get_post_type_archive_link('brand'); ?>">Brands</a>
      <a href="<?php echo get_post_type_archive_link('story'); ?>">Stories</a>

    </div>

    <div class="login">
      <a href=""><i class="fa-solid fa-user"></i> Log in</a>
    </div>
  </div>
</nav>
</header>
<div class="spacer-wrapper">