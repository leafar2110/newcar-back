
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
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/alineacion.jpg">
						</div>
						<div class="service-desc">
							<div>
								<h4>Alineaciones</h4>
								<p>
								La alineación es el tipo de mantenimiento más importante para tus neumáticos.
								Una mala alineación de las ruedas aumenta el desgaste de los neumáticos, además partes mecánicas de la dirección pueden verse afectadas.
								En talleres NewCar, realizaremos una correcta alineación de tus 4 ruedas, ya que contamos con la última tecnología en alineación y con repuestos de primeras marcas.
								</p>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-desc">
							<div>
								<h4>Neumáticos</h4>
								<p>Para garantizar la seguridad de los vehículos en circulación es de suma importancia realizar un correcto mantenimiento de los neumáticos.
									Los neumáticos son uno de los elementos del coche que más se deterioran debido a que están en continuo contacto con la carretera.
									En NewCar nuestros especialistas se aseguraran de darle un debido mantenimiento a tus neumáticos, para que puedas manejar con tranquilidad.</p>
							</div>
						</div>
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/neumatico.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/pinchazo.png">
						</div>
						<div class="service-desc">
							<div>
								<h4>Pinchazos</h4>
								<p>Un consumidor nunca debe tratar de reparar un neumático dañado. Sólo un especialista en neumáticos capacitado, que puede basar su evaluación en una inspección minuciosa y 
								completa del neumático, puede determinar si un neumático es adecuado para su reparación o debe ser retirado del servicio. En nuestro taller,
								te ofrecemos la ayuda que necesitas para solucionar este problema.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-desc">
							<div>
								<h4>Equilibrado</h4>
								<p>
								Existen causas que acortan la vida del neumático. El equilibrado es un factor importante.
								En NewCar, con nuestro servicio de equilibrado de neumáticos acabamos con las vibraciones que la rueda tiene al girar, para así evitar que esas vibraciones afecten a la dirección y 
								al volante del vehículo.</p>
							</div>
						</div>
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/equilibrado.jpg">
						</div>
					</div>
				</div>	
		</div>
	</div>
</section>
					</div>


<div class="page-heading">
              <h2 class="text-center" >Mantenimiento integral</h2>
          </div>

<div class="container">

<section class=" section-oferta"> 
    <div class="widget-landing season container">
          <div class="row">
		  		<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/bateria.jpg">
						</div>
						<div class="service-desc">
							<div>
								<h4>Baterías</h4>
								<p>
								Tu batería es tan importante que sin ella, no se podría arrancar el motor ni proporcionar electricidad a todo el auto.
								La mayoría de las baterías siguen funcionando bien por 5 o 7 años. Realizar un mantenimiento regular en tu auto y programar revisiones en talleres NewCar te asegurará que la 
								batería funcione correctamente por esta cantidad de tiempo o incluso más.
								</p>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-desc">
							<div>
								<h4>Cambio de aceite</h4>
								<p>
								Un aspecto  importante  para mantener un vehículo en perfectas condiciones, es el cambio de aceite, ya que éste se encarga de lubricar el motor y asegurar su buen funcionamiento. De lo contrario, el contacto de metal con metal podría causar daños graves a la máquina y poner en riesgo la seguridad del conductor y sus acompañantes. 
 								Cambiar el aceite es tarea sencilla, llevalo a talleres NewCar y nuestros expertos te haran el servicio en seguida. 
								</p>
							</div>
						</div>
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/aceite.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/frenos.jpg">
						</div>
						<div class="service-desc">
							<div>
								<h4>Pastillas de frenos</h4>
								<p>
								El sistema de frenos es uno de los principales elementos de seguridad de un vehículo. Los materiales de fricción como los discos y las pastillas requieren un mantenimiento y sustitución periódica ya que están sujetos a desgaste.
							    Para que el sistema de frenos funcione siempre de forma adecuada, es necesario mantener los discos y las pastillas en perfectas condiciones. En talleres NewCar hacemos esto por ti, y nos preocupamos por proporcionarle los mejores frenos a tu vehículo.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
				  <div class="service-unit">
						<div class="service-desc">
							<div>
								<h4>Revisiones</h4>
								<p>
								Con los kilómetros, las piezas de tu coche se desgastan y algunos fluidos experimentan fugas, como sucede en el caso del aceite del motor o del líquido refrigerante, por eso es muy importante realizar 
								un correcto mantenimiento de tu coche.
								En caso de que no sepas cuándo o dónde pasar la revisión del vehículo, has llegado al lugar apropiado.
								En talleres NewCar encontrarás una solución de mantenimiento adaptada a tus necesidades y a las de tu coche al mejor precio
								</p>
							</div>
						</div>
						<div class="service-thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/serviceimages/revision.jpg">
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