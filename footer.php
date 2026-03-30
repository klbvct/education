<footer class="footer">
	<div class="container footer__container">
		<a class="logo footer__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Логотип Блога">
		</a>
		<nav class="nav menu-nav">
			<?php wp_nav_menu( ['container' => ''] ); ?>
		</nav>
		<small class="footer__copy">&copy; <?php
		    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            if (strpos($url, '/ru/') !== false) {
                echo 'Все права защищены ООО "ОТЦ "Европа"';
            }
            else {
                echo 'Усі права захищені ТОВ "ОТЦ "Європа"';
            }
		   ?></small>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>