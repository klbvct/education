<?php
/**
 * Template Name: Контакты
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
			<h1 class="visually-hidden">Контакты</h1>
			<div class="contacts__left">
				<h2 class="contacts__title blog-title">Контактная информация</h2>
				<a href="tg://resolve?domain=mariana_klb" class="phone phone--contacts">Telegram</a>
				<address class="address">г. Киев, ул. Тираспольская, 54</address>
				<ul class="social list-reset">
					<li class="social__item"><a href="https://www.facebook.com/MarianaKalabukhova" id="social_icon" class="social__link social__link--fb" aria-label="Наш фейсбук"></a></li>
					<li class="social__item"><a href="https://www.instagram.com/mariana_klb/" id="social_icon" class="social__link social__link--insta" aria-label="Наш инстаграм"></a></li>
					<li class="social__item"><a href="https://t.me/edu_carrier_design" id="social_icon" class="social__link social__link--tw" aria-label="Наш телеграм"></a></li>
				</ul>
			</div>
			<div class="contacts__right">
				<div class="contacts-form-wrapper">
				    <h2 class="contacts__title">Получи индивидуальную профориентационную диагностику</h2>
				<p class="form-price">1 700 грн <span>/ повний доступ</span></p>
<a href="https://academy.education-design.com.ua" class="form-btn btn-reset">Начать тестирование</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>