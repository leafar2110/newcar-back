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
<section class="section-accesorio text-center">
    <div class="widget-landing dimensions"> 
          <div class="page-heading">
              <h2 class="container text-center">ENCUENTRA NUESTROS ACCESORIOS PARA TRANSPORTE POR <span class="span" >CATEGORÍA </span></h2>
          </div> 
            <div class="container">
            <div class="row">
                <div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ7.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ5.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
                </div>
                <div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
                </div>
                <div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-md-4 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
                        </a>
                    </div>
                </div>
				
   </div>
<div class="container">
<p class="text-justify texto">
 Si buscas ampliar la capacidad de tu coche para transportar todo lo que quieras, en Feu Vert te ofrecemos una amplia gama de sistemas portaequipajes para transportar el equipaje. Elige tus barras de techo de acero o aluminio, cada barra es específica para cada coche ya que debe ajustarse a la perfección, ya sea turismo, berlina, SUV, 4x4 o furgoneta. En ellas podrás instalar maleteros de techo, portabicicletas, porta esquís, portakayaks.

<br> <br> Aumenta la capacidad de tu coche eligiendo un maletero de techo (comúnmente conocido como cofre de coche). Cuando tengas un exceso de equipaje transpórtalo de forma segura, cómoda y protegida. En Feu Vert te aconsejaremos sobre el tamaño a elegir según el coche donde se instalará y tus necesidades.

 <br> <br>En Feu Vert, tenemos una amplia gama de portabicicletas para el coche que te permitirá transportar de una a tres bicicletas: portabicicletas de techo, portabicicletas de portón trasero, portabicicletas con bola de enganche (en plataforma o suspendidos).

<br> <br>Si tu deporte es esquí o deporte náutico tenemos el complemento perfecto para que te lleves el equipo contigo. Transporta tus esquís, tu tabla o tu kayak de casa a la montaña o la playa. Sólo tienes que elegir un portaesquís magnético o de block, o un portakayaks.

<br> <br>Para asegurar bien la carga a tu coche no te olvides de accesorios imprescindibles como son los pulpos extensibles, cinchas, cerradura de seguridad, placa V-20, portaplacas, ver todos los accesorios.

<br> <br>Si lo que necesitas es transportar grandes cargas con gran peso, te recomendamos un remolque. O llevar motos, quads o al perro. Te mostramos nuestro amplio surtido de remolques de marca Feu Vert y de marca Erdé, tenemos el adecuado para ti. Existen varios tipos de remolques según el uso: remolques multiusos, con freno, para motos, de caza o para tu mascota. Además, podrás personalizarlo con múltiples accesorios como toldo de remolque, tapa, cartolas, rueda jockey, etc. Si necesitas un enganche de bola de coche para llevar un remolque, un portabicicletas, o una caravana, en Feu Vert somos expertos en montarlos, con la mejor relación calidad/precio y con total garantía y confianza. Los enganches de bola son específicos para cada vehículo, ya sea un turismo, un 4x4, suv, o furgoneta.
   </p>

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