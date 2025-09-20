<?php


function create_brand_post_type()
{
    register_post_type('brand', array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'brand'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_brand_post_type');

function create_opskrift_post_type()
{
    register_post_type('opskrift', array(
        'labels' => array(
            'name' => 'Opskrifter',
            'singular_name' => 'Opskrift'
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'opskrift'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_opskrift_post_type');

function create_chef_post_type()
{
    register_post_type('chef', array(
        'labels' => array(
            'name' => 'Chefs',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'chef'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_brand_post_type');

function create_story_post_type()
{
    register_post_type('story', array(
        'labels' => array(
            'name' => 'Stories',
            'singular_name' => 'Story'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'stories'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_brand_post_type');



function valgfagsProjekt_enqueue_styles()
{
    wp_enqueue_style(
        'valgfagsProjekt-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'valgfagsProjekt_enqueue_styles');





function enqueue_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');
