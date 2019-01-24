
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
		<div class="container section-contacto">
			
			<div class="row">
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.1344238986185!2d-70.17573018625889!3d11.684884391709009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e85ecf39286cb6b%3A0xb3290a08fce37cba!2sSAMBIL+Paraguan%C3%A1!5e0!3m2!1ses!2sve!4v1542717473280" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				<div class="col-md-6 info-new">
					<h1 class="text-center title-new">Contactanos</h1>
					<div><strong>Correo: </strong><a href="mailto:newcar2@newcarjerez.com">  newcar2@newcarjerez.com</a></div>
					<div><strong>Telefono: </strong><a href="tel:956143503"> 956 14 35 03</a></div>
					<div>
						<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 13, 'title' => false, 'description' => false ) ); ?>
						
					</div>
				</div>
			</div>

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