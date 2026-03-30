<?php
/**
 * Template Name: Контакты УКР
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osvita
 */
 ?>
<?php get_header(); ?>

<main class="main">
	<section class="contacts">
		<div class="container contacts__container">
			<h1 class="visually-hidden">Контакти</h1>
			<div class="contacts__left">
				<h2 class="contacts__title blog-title">Контактна інформація</h2>
				<a href="tg://resolve?domain=mariana_klb" class="phone phone--contacts">Telegram</a>
				<address class="address">м. Київ, вул. Тираспольська, 54</address>
				<ul class="social list-reset">
					<li class="social__item"><a href="https://www.facebook.com/MarianaKalabukhova" id="social_icon" class="social__link social__link--fb" aria-label="Наш фейсбук"></a></li>
					<li class="social__item"><a href="https://www.instagram.com/mariana_klb/" id="social_icon" class="social__link social__link--insta" aria-label="Наш инстаграм"></a></li>
					<li class="social__item"><a href="https://t.me/edu_carrier_design" id="social_icon" class="social__link social__link--tw" aria-label="Наш телеграм"></a></li>
				</ul>
			</div>
			<div class="contacts__right">
				<div class="contacts-form-wrapper">
					<?php echo do_shortcode('[contact-form-7 id="89376ae" title="Контактная форма УКР" html_id="contact-form-page-contact"]'); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>