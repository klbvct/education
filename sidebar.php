<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package osvita
 */
?>
<aside class="sidebar">
	<div class="sidebar-category">
		<h3 class="popular-posts__title blog-title">
		   <?php
		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            if (strpos($url, '/ru/') !== false) {
                echo 'Категории';
            }
            else {
                echo 'Категорії';
            }
		   ?>
		</h3>
		<ul class="list-reset">
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>
	<div class="subscribe__img-form">
	    <a href="https://education-design.com.ua/">
	        <img src="<?php echo get_template_directory_uri(); ?><?php
		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            if (strpos($url, '/ru/') !== false) {
                echo '/img/form_subscribe-min.png';
            }
            else {
                echo '/img/form_subscribe_ua-min.png';
            }
		    ?>" alt="Дизайн Освіти" class="subscribe__img-form--item">
	    </a>
	</div>
	
	<div class="popular-posts">
		<h3 class="popular-posts__title blog-title">
		    <?php
		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            if (strpos($url, '/ru/') !== false) {
                echo 'Актуальное';
            }
            else {
                echo 'Актуальне';
            }
		   ?>
		</h3>
		<ul class="popular-posts__list list-reset">
			<?php
				// задаем нужные нам критерии выборки данных из БД
				$args = array(
					'posts_per_page' => 5,
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
				);

				$query = new WP_Query( $args );

				// Цикл
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
			?>
			
				<li class="popular-posts__item">
					<article class="blog-post popular-post__article">
						<h3 class="blog-post__title blog-title blog-post__title-sidebar">
							<a href="<?php echo get_the_permalink(); ?>" class="blog-post__link"><?php the_title(); ?></a>
						</h3>
						<time class="blog-post__date"><?php the_modified_date( ' j F Y ' ); ?></time>
					</article>
				</li>

			<?php	}
				} else {
				    
        		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        
                    if (strpos($url, '/ru/') !== false) {
                        echo 'Постов не найдено';
                    }
                    else {
                        echo 'Постів не знайдено';
                    }
		   
				}
				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
			?>

		</ul>
	</div>
	<div class="subscribe">
		<h3 class="subscribe__title blog-title">
		    <?php
		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            if (strpos($url, '/ru/') !== false) {
                echo 'Подписаться';
            }
            else {
                echo 'Підписатися';
            }
		   ?>
		</h3>
		<ul class="social social__justy-center list-reset">
			<li class="social__item"><a href="https://www.facebook.com/marjana.stulina" class="social__link social__link--fb" aria-label="Наш фейсбук"></a></li>
			<li class="social__item"><a href="https://www.instagram.com/mariana_klb/" class="social__link social__link--insta" aria-label="Наш инстаграм"></a></li>
			<li class="social__item"><a href="https://t.me/edu_carrier_design" class="social__link social__link--tw" aria-label="Наш телеграм"></a></li>
		</ul>
	</div>
</aside>
