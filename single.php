<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package osvita
 */

get_header();
?>

<?php gt_set_post_view(); ?>

<?php
	if ( have_posts() ){
		while ( have_posts() ){
			the_post();
?>			
			<main class="main">
			<div class="container">
        		<?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
			<?php
				$category = get_the_category();													
				$cat_link = get_category_link( $category[0] );
			?>
				<div class="post-banner">
					<div class="container post-banner__container">
						<div class="network">
							<ul class="network-list list-reset">
								<li><a href="https://www.facebook.com/marjana.stulina" id="social_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt="Дизайн образования в Facebook"></a></li>
								<li><a href="https://www.instagram.com/mariana_klb/" id="social_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.svg" alt="Дизайн образования в Instagram"></a></li>
								<li><a href="https://t.me/edu_carrier_design" id="social_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/tg.svg" alt="Дизайн образования в Telegram"></a></li>
							</ul>
						</div>
						<div class="post-title__content">
							<a href="<?php echo $cat_link; ?>" class="post-category__title"><?php echo $category[0]->cat_name; ?></a>
							<h1 class="blog-title post-title"><?php the_title(); ?></h1>
							<time class="post-date"><?php the_modified_date( ' j F Y ' ); ?></time>
						</div>
						<div class="author">
							<img src="<?php echo get_template_directory_uri(); ?>/img/marianna-min.png" alt="<?php the_title(); ?>" class="home-banner__img">
							<p class="home-banner__bold">
    							<?php
                        		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        
                                    if (strpos($url, '/ru/') !== false) {
                                        echo 'Марьяна Калабухова';
                                    }
                                    else {
                                        echo "Мар'яна Калабухова";
                                    }
                        		?>
                    		</p>
							<p>
    							<?php
                        		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        
                                    if (strpos($url, '/ru/') !== false) {
                                        echo 'Автор проекта,<br>Консультант по обучению, PhD';
                                    }
                                    else {
                                        echo "Автор проекту,<br>Консультант з освіти, PhD";
                                    }
                        		?>
                    		</p>
							
						</div>
					</div>
				</div>
				<section class="post-content">
					<div class="container post-content__container">
						<div class="post-wrapper">
							<div class="post">
																
								<?php the_content(); ?>
								
							</div>
							<div class="post-links">
								<?php $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
								 if (strpos($url, '/ru/') !== false) {
                                        previous_post_link('%link', 'Предыдущая статья', true);
										next_post_link('%link', 'Следующая статья', true);
                                    }
								else {
                                        previous_post_link('%link', 'Попередня стаття', true);
										next_post_link('%link', 'Наступна стаття', true);
                                    }
								?>
							
								
							</div>

							<!-- ?php comments_template(); ? -->

						</div>

						<?php get_sidebar(); ?>

					</div>
				</section>
								<section class="education__form--background">
									<div class="container education__form">
										<div class="education__form--left">
											<h2>
    												<?php
                        		    								$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        
                                    									if (strpos($url, '/ru/') !== false) {
                                        									echo 'Давайте сделаем ваше образование эффективным';
                                    									}
                                    									else {
                                        									echo "Давайте зробимо ваше<br>навчання ефективним";
                                    									}
                        									?>
												
											</h2>
											<p>
    												<?php
                        		    								$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        
                                    									if (strpos($url, '/ru/') !== false) {
                                        									echo 'Создать свой собственный образовательный дизайн, сформировать свою уникальную модель обучения, развития и карьеры!';
                                    									}
                                    									else {
                                        									echo "Створити свій власний освітній дизайн, сформувати свою унікальну модель навчання, розвитку та кар'єри!";
                                    									}
                        									?>

											</p>
										</div>
										<div class="education__form--right">
											<div class="contacts-form-wrapper contacts-form-wrapper__padding">
											<h2 class="contacts__title"><?php echo (strpos($_SERVER['REQUEST_URI'], '/ru/') !== false) ? 'Получи индивидуальную профориентационную диагностику' : 'Отримай індивідуальну профорієнтаційну діагностику'; ?></h2>
											<p class="form-price">1 700 грн <span>/ повний доступ</span></p>
<a href="https://academy.education-design.com.ua" class="form-btn btn-reset">Розпочати тестування</a>
											</div>
										</div>
									</div>

								</section>
			</main>	
<?php
		}
	} else {
		echo wpautop( 'Постов для вывода не найдено.' );
	}
?>

<?php
get_footer();
