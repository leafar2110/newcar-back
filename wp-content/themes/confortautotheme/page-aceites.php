
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

		<div class="page-heading2 text-center">

		<div class="container">
			<h3>ELIGE TU LUBRICANTE DE AUTOMÓVIL POR MARCA</h3>
		</div>

		</div>

		<div class="container">

			<div class="notice-section clearfix">
				<ul>
				<li>
						<div class="menu-box">
							<img src="">
							<p>Lubricantes Cepsa</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Lubricantes Repsol</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Lubricantes Total</p>
						</div>
					</li>
				</ul>
			</div>

		</div>

		<div class="page-heading2 text-center">

		<div class="container">
			<h3>ELIGE TU LUBRICANTE DE AUTOMÓVIL POR VISCOSIDAD</h3>
		</div>

		</div>

		<div class="container">

			<div class="notice-section clearfix">
				<ul>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Aceite 5W20</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Aceite 5W30</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Aceite 15W40</p>
						</div>
					</li>
				</ul>
			</div>
		
		</div>

		<div class="page-heading2 text-center">

		<div class="container">
			<h3>ENCUENTRA LIQUIDOS O QUÍMICOS POR TIPO</h3>
		</div>

		</div>

		<div class="container">

			<div class="notice-section clearfix">
				<ul>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Lubricantes Motor Automóvil</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Anticongelantes</p>
						</div>
					</li>
					<li>
						<div class="menu-box">
							<img src="">
							<p>Lavaparabrisas</p>
						</div>
					</li>
				</ul>
			</div>
		
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