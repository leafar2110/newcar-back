
<?php

get_header();
?>

<?php
if(have_posts()){
	
	while(have_posts()){
		the_post();
		?>

		<div id="banner-header page-nav">
			<div class="navbar-main">             
				<div class="container">
					<div id="navbar" class="navbar-collapse collapse">
						<?php
						$args = array(
							'theme_location' => 'primary',
							'menu' => 'top_menu',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav'
						);
						
						?>
						
						<?php wp_nav_menu($args); ?>
					</div> 
				</div>   
			</div>  
		</div>

		<div class="page-heading text-center">

			<div class="container zoomIn animated">
				<div class="nc_links">
					<a href="<?php echo get_home_url()?>">Inicio</a>
					<a class="arrow">></a>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>

				<h2 class="page-title"><?php the_title(); ?><span class="title-under"></span></h2>
				
			</div>
		</div>
		<div class="container boton-soli-content">
			<div class="boton-soli"><a href="<?php echo bloginfo('url').'/index.php/solicitud'; ?>">Solicitar presupuesto a medida</a></div>
		</div>
		
		<div class="container">

			<section class=" section-oferta"> 
				<div class="widget-landing season container">
					<div class="row">
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/embrague.jpg">
								</div>
								<div class="service-desc">
									<div>
										<h4>Embragues</h4>
										<p>
											El papel del embrague consiste en permitir el cambio de marcha en los coches equipados con caja de cambios manual.
											Un embrague desgastado patina e impide que se transmita la potencia del motor a la caja de cambios. Esta situación es incómoda, peligrosa y exige cambiar urgentemente esta pieza.
											Deja tu coche en manos de nuestros expertos y se encargaran de hacerle el cambio correspondiente.
										</p>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-desc">
									<div>
										<h4>Amortiguadores</h4>
										<p>
											¿Notas poca estabilidad a la hora de coger una curva? ¿Tu coche rebota en exceso tras pasar un bache o badén? ¿Los neumáticos de un lado están mucho más gastados que los del otro? 
											Entonces, es hora de cambiar los amortiguadores. En NewCar te ofrecemos un servicio eficiente de cambio de amortiguadores para que tu coche se sienta perfecto al manejar.
										</p>
									</div>
								</div>
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/amortiguador.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/distribucion.jpg">
								</div>
								<div class="service-desc">
									<div>
										<h4>Kits de distribución</h4>
										<p>
											Una rotura de la correa de distribución puede provocar que el motor quede fuera de tiempo, 
											es decir, que las valvulas y los pistones no estén en el lugar correcto pudiendo pillarse 
											y romper el motor. Depende del daño puede ser que hasta tengas que cambiar el motor entero.
											No dejes que esto pase y lleva tu coche a nuestros expertos. Allí nos encargaremos de este problema por ti.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-desc">
									<div>
										<h4>Máquinas de diagnosis</h4>
										<p>
											¿Tienes la sospecha detrás de que tu coche tiene la junta de culata dañada? ¿Tal vez necesitas cambiar la batería de tu vehículo? Gracias a la máquina de diagnosis, 
											en talleres NewCar un mecánico profesional sabrá dar en minutos con el problema, detectando cualquier avería, ahorrando de esta manera tiempo y dinero.
										</p>
									</div>
								</div>
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/diagnosis.jpg">
								</div>
							</div>
						</div>	
					</div>
				</div>
			</section>

		</div>
		
		<div class="notice-section related-post clearfix">
			
			<h3>ENTRADAS RELACIONADAS</h3>
			
			<ul>
				<?php
				$args=array(
					'post__not_in' => array($post->ID),
					'posts_per_page'=>4,
					'caller_get_posts'=>1
				);
				
				$my_query = new WP_Query($args);
				
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); 
						
						?>
						<li>
							<?php get_template_part('content'); ?>		
						</li>
						<?php
						
					endwhile;
				}
				
				wp_reset_query();
				
				?>
			</ul>
		</div>
		
		<?php	
	}
}else {
	
	?>
	<article class="post page <?php if(has_post_thumbnail()) { echo 'has-thumbnail'; }?> archive">
		
		<h2>Esta pagina no existe</h2>
		<br>
		<a href="<?php bloginfo("url")?>" style="padding: 10px 0;">Volver a la pagina principal</a>
		<p></p>
		
	</article>
	<?php
}	
?>

<?php
get_footer();
?>