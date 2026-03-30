<?php
/**
 * Template Name: Отзывы
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
			Отзывы
		</h1>
	</section>
	<section class="content">
		
		<div class="container feedback__container">
			
		    <div class="feedback feedback-answers">
			<?php echo do_shortcode( '[testimonial_view id="1"]' ); ?> 
		    </div>
		    <div class="feedback"><!--div class="feedback feedback-form"-->
			<?php echo do_shortcode('[testimonial_view id="2"]'); ?>
	            </div>				
			
		</div>
	</section>
</main>

<?php get_footer(); ?>