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
			<a href="<?php echo get_home_url("/noticias")?>">Noticias y consejos</a>
		</div>

		<h2 class="page-title">Noticias y consejos prácticos<span class="title-under"></span></h2>
		
	</div>

</div>

<?php
if(have_posts()){
	
	while(have_posts()){
		the_post();
		?>
		<div class="blog-post">
			<div class="blog-header">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="blog-content clearfix">
				<div class="blog-img">
					<img src="<?=the_post_thumbnail_url()?>" alt="">
				</div>
				<div class="blog-text">
					<div class="bt">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php the_permalink()?>">Leer mas</a>
				</div>
			</div>	
		</div>
	
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