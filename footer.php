

	<footer class="footer container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3 footer-column">
					<strong>UK</strong><br>
					129 Downhall Park Way<br>
					Rayleigh<br>
					Essex SS6 9TP<br>
				</div>
				<div class="col-sm-6 col-md-3 footer-column">
				<strong>France</strong><br>
					12 Rue de Montillet<br>
					Belley 01300<br>
				</div>
				<!--
				<div class="col-md-3">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'footer-menu',
						'container'		 => '',
					) );
					?>
				</div>
				
				<div class="col-md-3"></div>
					-->
			</div>	
		
		</div><!-- .container -->
	</footer><!-- footer .container-fluid -->
	</div><!-- .dano_inner_page -->
</div><!-- .dano_outer_page -->
<?php wp_footer(); ?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  	location = '<?php echo get_site_url(); ?>/form-submit';
}, false );
</script>

</body>
</html>
