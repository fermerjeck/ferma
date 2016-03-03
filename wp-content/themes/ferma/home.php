<?php
/**
 * Шаблон made fermerjeck
  * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
get_header(); // Подключаем хедер?> 
<div class="container cont1 clearfix">
	<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="" id="logo">
</div>
<div class="container cont2 clearfix">
	<div class="foto clearfix">
	<h3>Дружный фермер</h3>
	  <div class="fotoin">
	  <ul>
		<img src="<?php echo get_template_directory_uri()?>/img/foto/jen.jpg" alt="" hidetitle="Впервые успешно эта медицинская технология была применена в Великобритании в 1977 году, в результате чего в 1978 году родилась Луиз Браун (англ. Louise Brown) ">
		<img src="<?php echo get_template_directory_uri()?>/img/foto/kh.jpg" alt="" hidetitle="Показанием к проведению процедуры ЭКО являются различные формы мужского и женского бесплодия. Согласно приказу N107н от 30.08.2012 Минздрава РФ показанием к ЭКО является «бесплодие, не поддающееся терапии, или вероятность преодоления которого с помощью ЭКО выше, чем другими методами. При отсутствии противопоказаний ЭКО может проводиться по желанию супружеской пары (женщины, не состоящей в браке) при любой форме бесплодия»[4][5].

Противопоказаниями для проведения ЭКО являются состояния женщины, при которых беременность и роды угрожают здоровью матери или ребёнка, а именно[4][5]:">
		<img src="<?php echo get_template_directory_uri()?>/img/foto/kh.jpg" alt="" hidetitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem alias nobis esse dignissimos perspiciatis omnis voluptate minima sint praesentium laboriosam autem molestias, eius atque veritatis.">
		<img src="<?php echo get_template_directory_uri()?>/img/foto/kh.jpg" alt="" hidetitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto reiciendis molestias eum excepturi quia aut itaque consequuntur voluptatum. Natus quo sunt odio rem, sapiente aperiam!">
		</div>
		<div class="textunber">
		<p class="acted"></p>
		<p class="hidetxt"> Эко — предлагаемое название единой валюты, которую планирует ввести несколько государств Экономического сообщества стран Западной Африки, в 2000 году объединившиеся в Западно-Африканскую валютную зону. .!</p>
		</div>
	
</div>
</div>
<div class="container cont3 clearfix">
	<div class="katalog">
		<?php $query = new WP_Query( array( 'category__in', '2' ) ); ?>
		<h3><a href="<?php echo get_category_link(2); ?>">Эко продукты</a></h3>
		<ul class="bxslider">
			<?php while ( $query->have_posts()) : $query->the_post(); ?>
				<li>
					<div id="txtmin"><?php the_title();?></div>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(600,500));?>
				</a>
				</li>
			
		<?php endwhile; ?>
		</ul>
		<h3><a href="<?php echo get_category_link(2); ?>">Посмотреть все продукты</a></h3>
	
</div>
	
</div>
<div class="container cont4 clearfix">
	<div class="obl">
		<img src="<?php echo get_template_directory_uri()?>/img/obl1.png" alt="" id="obl1">
		<img src="<?php echo get_template_directory_uri()?>/img/obl2.png" alt="" id="obl2">
	</div>
</div>


<?php get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>