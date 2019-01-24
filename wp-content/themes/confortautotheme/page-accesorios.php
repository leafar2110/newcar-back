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
     <div class="page-heading">
          <h2 class="container text-center">ENCUENTRA EQUIPOS DE <span class="span" >SONIDO, MULTIMEDIA Y NAVEGACIÓN</span></h2>
	  </div>
	   
        <div class="container">
            <div class="row">
					<div class="col-sm-6 col-md-3 item e1">
					<div class="links widget-image">
						<a href="" title="205/55 R16">
						<div class="contenedor">
							<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
								<span class="description-service text1">Neúmatico 205/55 R16</span>
						</div> 
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 item e1">
					<div class="links widget-image">
						<a href="" title="205/55 R16">
						<div class="contenedor">
							<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
								<span class="description-service text1">Neúmatico 205/55 R16</span>
						</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 item e1">
					<div class="links widget-image">
						<a href="" title="205/55 R16">
						<div class="contenedor">
							<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
								<span class="description-service text1">Neúmatico 205/55 R16</span>
						</div>                     
							</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 item e1">
					<div class="links widget-image">
						<a href="" title="205/55 R16">
						<div class="contenedor">
							<img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
								<span class="description-service text1">Neúmatico 205/55 R16</span>
						</div>  
							</a>
						</div>
					</div>
		</div>
		<a href="" class="landing-link">Accede a todos los equipos de sonido, multimedia y navegación</a>
	</div>
				
</section>
    
<section class="section-accesorio text-center">
		<div class="page-heading">
              <h2 class="container text-center">ENCUENTRA ACCESORIOS DE <span class="span" >EQUIPAMIENTO EXTERIOR</span></h2>
          </div> 
          
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
		</div>		
		<a href="" class="landing-link">Accede a todos los accesorios de equipamiento exterior</a>	
   </div>
</section>
<section class="section-accesorio text-center">
    <div class="widget-landing dimensions"> 
          <div class="page-heading">
              <h2 class="container text-center">ENCUENTRA MATERIAL DE <span class="span" >LIMPIEZA Y CUIDADO DEL VEHÍ­CULO </span></h2>
          </div> 
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
           
        </div>
		<a href="" class="landing-link"> Accede a todo el material de limpieza y cuidado del vehí­culo</a>
   </div>
</section>
<section class="section-accesorio text-center">
    <div class="widget-landing dimensions"> 
          <div class="page-heading">
              <h2 class="container text-center">ENCUENTRA PRODUCTOS DE<span class="span" > SEGURIDAD INFANTIL</span></h2>
          </div> 
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
           
        </div>
		<a href="" class="landing-link">Accede a todos los productos de seguridad infantil</a>	
   </div>
</section>
<section class="section-accesorio text-center">
    <div class="widget-landing dimensions"> 
          <div class="page-heading">
              <h2 class=" container text-center">ENCUENTRA PRODUCTOS DE  <span class="span" >EQUIPAMIENTO INTERIOR</span></h2>
          </div> 
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-6 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
            
		</div>
		<a href="" class="landing-link">Accede a todos los productos de equipamiento interior</a>			
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