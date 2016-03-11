 <footer id="main-footer" class="main-footer-index clearfix col-md-12">
            <div id="main-footer-inner">
	            <ul class="footer-menu">
                	                                    	
						  <?php
wp_nav_menu(array(
    'theme_location' => 'Menu-alt', // function.php dosyasındaki 1. değerin adını giriyoruz.
    'menu_class' => 'footer-menu',
    'container_id' => 'nav nav-collapse clearfix',
    'fallback_cb' => 'wp_page_menu',
));
?>
                </ul>
                
			</div>
        </footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/inc/js/jquery.autocomplete.js"></script>
	<script src="<?php bloginfo('template_url') ?>/inc/js/bootstrap.3.2.0.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/inc/js/sidebar.js"></script>
    <div id="ss_modal_wrap" onclick="return sspot.modal.kapat();"></div>
    <div id="ss_modal"></div>
	
    <div id="toTop"><i class="ssicon-keyboard-arrow-up"></i></div>

	      </body>
</html>