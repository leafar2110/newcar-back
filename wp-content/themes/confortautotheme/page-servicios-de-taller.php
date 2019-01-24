<?php
get_header();
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

<?php
if(have_posts()){
	
	while(have_posts()){
		the_post();
		?>

		<div class="page-heading">
			<h2 class="text-center" style="margin: 0">Neumáticos</h2>
		</div>
		<section class=" section-oferta"> 
			<div class="widget-landing season container">

				<div class=" separador">
					<div class="row">
						<div class="col-sm-4 col-md-3 item e1">
							<div class="links widget-image">
								<a href="" title="205/55 R16">
									<div class="contenedor">
										<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/alineacion.jpg" alt="Generic tyre">
										<span class="description-service text1">Alineaciones</span>
									</div>

								</a>
							</div>
						</div>
						<div class="col-sm-4 col-md-3 item e1">
							<div class="links widget-image">
								<a href="" title="205/55 R16">
									<div class="contenedor">
										<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/neumatico.jpg" alt="Generic tyre">
										<span class="description-service text1">Neumáticos</span>
									</div>

								</a>
							</div>
						</div>
						<div class="col-sm-4 col-md-3 item e1">
							<div class="links widget-image">
								<a href="" title="205/55 R16">
									<div class="contenedor">
										<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/pinchazos.jpg" alt="Generic tyre">
										<span class="description-service text1">pinchazos</span>
									</div>

								</a>
							</div>
						</div>
						<div class="col-sm-4 col-md-3 item e1">
							<div class="links widget-image">
								<a href="" title="205/55 R16">
									<div class="contenedor">
										<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/equilibrado.jpg" alt="Generic tyre">
										<span class="description-service text1">Equilibrado</span>
									</div>

								</a>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="section-dimensiones">
				<div class="page-heading">
					<h2 class="text-center">Mecánica <span class="span">integral</span></h2>
				</div> 
				<div class="widget-landing dimensions container">
					<div class="separador">
						<div class="row">
							<div class="col-sm-4 col-md-3 item e1">
								<div class="links widget-image">
									<a href="" title="205/55 R16">
										<div class="contenedor">
											<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/bateria.jpg" alt="Generic tyre">
											<span class="description-service text1">Baterías</span>
										</div>

									</a>
								</div>
							</div>
							<div class="col-sm-4 col-md-3 item e1">
								<div class="links widget-image">
									<a href="" title="205/55 R16">
										<div class="contenedor">
											<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/cambiodeaceite.jpg" alt="Generic tyre">
											<span class="description-service text1">Cambio de aceite</span>
										</div>

									</a>
								</div>
							</div>
							<div class="col-sm-4 col-md-3 item e1">
								<div class="links widget-image">
									<a href="" title="205/55 R16">
										<div class="contenedor">
											<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/cambiodepastilladefreno.jpg" alt="Generic tyre">
											<span class="description-service text1">Pastillas de frenos</span>
										</div>

									</a>
								</div>
							</div>
							<div class="col-sm-4 col-md-3 item e1">
								<div class="links widget-image">
									<a href="" title="205/55 R16">
										<div class="contenedor">
											<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/revision.jpg" alt="Generic tyre">
											<span class="description-service text1">Revisiones</span>
										</div>

									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="section-dimensiones">
						<div class="page-heading">
							<h2 class="text-center">Mecánica <span class="span">General</span></h2>
						</div> 
						<div class="widget-landing dimensions container">
							<div class="separador">
								<div class="row">
									<div class="col-sm-4 col-md-3 item e1">
										<div class="links widget-image">
											<a href="" title="205/55 R16">
												<div class="contenedor">
													<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/embrague.jpg" alt="Generic tyre">
													<span class="description-service text1">Embragues</span>
												</div>

											</a>
										</div>
									</div>
									<div class="col-sm-4 col-md-3 item e1">
										<div class="links widget-image">
											<a href="" title="205/55 R16">
												<div class="contenedor">
													<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/amortiguador.jpg" alt="Generic tyre">
													<span class="description-service text1">Amortiguadores</span>
												</div>

											</a>
										</div>
									</div>
									<div class="col-sm-4 col-md-3 item e1">
										<div class="links widget-image">
											<a href="" title="205/55 R16">
												<div class="contenedor">
													<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/kitsdedistribucion.jpg" alt="Generic tyre">
													<span class="description-service text1">Kits de distribución</span>
												</div>

											</a>
										</div>
									</div>
									<div class="col-sm-4 col-md-3 item e1">
										<div class="links widget-image">
											<a href="" title="205/55 R16">
												<div class="contenedor">
													<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/maquinadediagnosis.jpg" alt="Generic tyre">
													<span class="description-service text1">Máquina de diagnosis</span>
												</div>

											</a>
										</div>
									</div>
								</div>
							</section>

							<section class="section-dimensiones">
								<div class="page-heading">
									<h2 class="text-center">Chapa y pintura</h2>
								</div> 
								<div class="widget-landing dimensions container">
									<div class="separador">
										<div class="row">
											<div class="col-sm-4 col-md-3 item e1">
												<div class="links widget-image">
													<a href="" title="205/55 R16">
														<div class="contenedor">
															<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/reparaciondecarro.jpg" alt="Generic tyre">
															<span class="description-service text1">Reparación</span>
														</div>

													</a>
												</div>
											</div>
											<div class="col-sm-4 col-md-3 item e1">
												<div class="links widget-image">
													<a href="" title="205/55 R16">
														<div class="contenedor">
															<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/parachoque.jpg" alt="Generic tyre">
															<span class="description-service text1">Paragolpes</span>
														</div>

													</a>
												</div>
											</div>
											<div class="col-sm-4 col-md-3 item e1">
												<div class="links widget-image">
													<a href="" title="205/55 R16">
														<div class="contenedor">
															<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/espejoretrovisor.jpg" alt="Generic tyre">
															<span class="description-service text1">Espejos y lunas</span>
														</div>

													</a>
												</div>
											</div>
											<div class="col-sm-4 col-md-3 item e1">
												<div class="links widget-image">
													<a href="" title="205/55 R16">
														<div class="contenedor">
															<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/blue-icons/boladeenganche.jpg" alt="Generic tyre">
															<span class="description-service text1">Bolas de enganches</span>
														</div>

													</a>
												</div>
											</div>
										</div>
									</section>

									<?php	
								}
							}else {

								?>
								<article class="post page <?php if(has_post_thumbnail()) { echo 'has-thumbnail'; }?> archive">

									<h2>Este post no existe</h2>
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