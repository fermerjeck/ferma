<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар
/*Подключаю JS*/
    function register_my_script()
	{
    wp_enqueue_script( 'my-script', get_template_directory_uri().'/js/myscript.js',array('jquery'));
   }
   
   add_action('wp_enqueue_scripts', 'register_my_script');

   /*Подключая css*/

function register_mystyle()
  {
     wp_enqueue_style( 'my-mystyle', get_stylesheet_directory_uri().'/css/style.css');
    }
    add_action('wp_enqueue_scripts', 'register_mystyle');

    function register_animate()
 	{
     wp_enqueue_style( 'my-animate', get_stylesheet_directory_uri().'/css/animate.css');
    }
    add_action('wp_enqueue_scripts', 'register_animate');
?>