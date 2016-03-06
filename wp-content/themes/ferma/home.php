<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
get_header(); // Подключаем хедер?> 
<section class="container cont1 clearfix">
	<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Эко ферма" id="logo">
</section>
<section class="container cont2 clearfix">
	<?php get_template_part('inc/about');?>
</section>
<section class="container cont3 clearfix">
	<?php get_template_part('inc/katalog');?>
</section>
<section class="container cont4 clearfix">
	<?php get_template_part('inc/gusi');?>
</section>

<section class="container cont5 clearfix">
</section>
<?php get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>