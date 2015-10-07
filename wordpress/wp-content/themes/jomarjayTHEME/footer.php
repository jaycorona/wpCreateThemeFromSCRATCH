	<footer class="footer">
        <p class="text-muted">
        	<?php 
				wp_nav_menu(array(
					'theme_location' => 'secondary',
					'container' => false,
					'menu_class' => 'nav navbar-nav navbar-right'
					)
				);
			?>	
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>