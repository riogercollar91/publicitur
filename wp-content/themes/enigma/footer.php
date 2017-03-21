<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-6">
				<h3>Nuestros clientes</h3>

			</div>
			<div class="col-md-2 col-sm-6">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/caracol.png">

			</div>
			<div class="col-md-2 col-sm-6">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/barcelo-hotels-resorts.jpg">

			</div>
			<div class="col-md-2 col-sm-6">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/cubanacan.png">

			</div>
			<div class="col-sm-2">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/habaguanex.png" />

			</div>

		</div>
	</div>	
</div>
<div class="enigma_footer_area">
		<div class="container">
			<div class="col-md-3 col-sm-6">
				<h2 class="abajo_footer_feria">Publicitur</h2>
				<ul class="list-unstyled abajo_footer_li">
					<li><a href="http://www.publicitur.com/quienes-somos/">Quienes Somos</a></li>
					<li><a href="http://www.publicitur.com/privacidad/">Privacidad</a></li>
					<li><a href="http://www.publicitur.com/identidad/">Identidad</a></li>
					<li><a href="http://www.publicitur.com/premios/">Premios</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2 class="abajo_footer_feria">Servicios</h2>
				<ul class="list-unstyled abajo_footer_li">
					<li><a href="http://www.publicitur.com/campanas/">Campañas</a></li>
					<li><a href="http://www.publicitur.com/afiches/">Afiches</a></li>
					<li><a href="http://www.publicitur.com/plegables/">Plegables</a></li>
					<li><a href="http://www.publicitur.com/catalogos/">Catálogos</a></li>
					<li><a href="http://www.publicitur.com/senaletica/">Señalética</a></li>
					<li><a href="http://www.publicitur.com/eventos/">Eventos</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2 class="abajo_footer_feria">Servicios</h2>
				<ul class="list-unstyled abajo_footer_li">
					<li><a href="http://www.publicitur.com/hipermedias/">Hipemedias</a></li>
					<li><a href="http://www.publicitur.com/fotografia/">Fotografía</a></li>
					<li><a href="http://www.publicitur.com/videos/">Videos</a></li>
					<li><a href="http://www.publicitur.com/internet/">Internet</a></li>
					<li><a href="http://www.publicitur.com/soportes-digitales/">Soportes Digitales</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-10">
				<h2 class="abajo_footer_feria">Contáctanos</h2>
				<ul class="list-unstyled abajo_footer_li">
					<p>Correo: direccion@publicitur.cu
						Teléfono: (53 7) 838 2826-29
						Dirección: Calle 19 #60 e/ M y N
						Vedado,La Habana, Cuba</p>
				</ul>
			</div>
			<div class="col-md-12">
			<p class="enigma_footer_copyright_info wl_rtl" >
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
			if($wl_theme_options['developed_by_text']) { echo " | " .esc_attr($wl_theme_options['developed_by_text']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>"><?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?></a></p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>				
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Google Plus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="Instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>
			</div>
			<div class="col-md-3 col-sm-4">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/minturblanco.png">
			</div>
			<div class="col-md-3 col-sm-4">

			</div>
			<div class="col-md-3 col-sm-4">

			</div>
			<div class="col-md-3 col-sm-14">
				<img src="http://www.publicitur.com/wp-content/themes/enigma/images/logocubaBlanco.png" style="float: right; bottom: 100px; right: 30px;">
			</div>
		</div>
</div>	
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>

<script type="text/javascript">
	
$(document).ready(function(){
    $("#menu-item-17").mouseleave(function(){
        $('#menu-item-17').removeClass('open');
    },function() {
        $('#menu-item-17').addClass('open');
    });
});

$(document).ready(function(){
    $("#menu-item-16").mouseleave(function(){
        $('#menu-item-16').removeClass('open');
    },function() {
        $('#menu-item-16').addClass('open');
    });
});

</script>

</body>
</html>