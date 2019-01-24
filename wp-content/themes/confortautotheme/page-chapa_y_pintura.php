
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

		<div class="page-heading">
			<h2 class="text-center" style="margin: 0">Mantenimiento de neumáticos</h2>
		</div>

		<div class="container">

			<section class=" section-oferta"> 
				<div class="widget-landing season container">
					<div class="row">
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/reparacionchapa.jpg">
								</div>
								<div class="service-desc">
									<div>
										<h4>Reparación de chapa y pintura</h4>
										<p>
											Los trabajos de chapa y pintura son una de las tareas más comunes en los talleres mecánicos.
											Se trata de un trabajo en el que se utilizan ciertas herramientas y productos que requieren tomar algunas precauciones.
											Lleva tu coche a talleres NewCar y nuestros profesionales se encargaran de dejar tu coche impecable, sin que tu tengas que mancharte un pelo.
										</p>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-desc">
									<div>
										<h4>Paragolpes</h4>
										<p>
											Tanto si tu parachoques está agrietado en un borde, como si algo lo ha atravesado, talleres NewCar te ofrece la posibilidad de reparar la pieza o sustituirla.
											Con nosotros no existe tiempo de espera ni hace falta comprar costosas piezas de sustitución, en lugar de eso ahorrarás bastante dinero.
										</p>
									</div>
								</div>
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/paragolpe.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="service-unit">
								<div class="service-thumb">
									<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/retrovisor.jpg">
								</div>
								<div class="service-desc">
									<div>
										<h4>Espejos y lunas</h4>
										<p>
											Un espejo retrovisor tiene como finalidad permitir, en el campo de visión una visibilidad clara hacia atrás y hacia los lados del vehículo.
											Existen leyes que sancionan a los usuarios que circulan sin espejos o con los espejos del coche rotos.
											No seas uno de ellos.
											En talleres NewCar sustituimos el cristal de su espejo roto de forma sencilla y segura. Quedara como nuevo.
										</p>
									</div>
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