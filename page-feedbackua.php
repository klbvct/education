<?php
/**
 * Template Name: Отзывы УКР
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osvita
 */
 ?>

<?php get_header(); ?>

<main class="main">
	<section class="category-banner">
		<h1 class="category-banner__title">
			Відгуки
		</h1>
	</section>
	<section class="content">
		
		<div class="container feedback__container">

		    <div class="feedback feedback-answers">
		        <!--?php echo do_shortcode( '[trustindex no-registration=facebook]' ); ?-->
			<?php echo do_shortcode( '[testimonial_view id="1"]' ); ?> 
		    </div>
		    <div class="feedback"><!--div class="feedback feedback-form"-->
		        <!--h2 class="contacts__title blog-title">Задати питання</h2-->
			<!--?php echo do_shortcode('[contact-form-7 id="324" title="Контактная форма УКР" html_id="contact-form-page-contact"]'); ?-->
			<?php echo do_shortcode('[testimonial_view id="2"]'); ?>
	            </div>			
			
		</div>
	</section>
</main>

<?php get_footer(); ?>