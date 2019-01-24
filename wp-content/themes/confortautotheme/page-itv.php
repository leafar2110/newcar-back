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

		<div class="page-heading text-center">

		</div>

		<article class="post-single">

			<div class="post-content">

				<div class="container">

					<div class="bannerfp-text text-center">
						<p>Preparamos tu vehículo para pasar la ITV y te lo llevamos.
						No te preocupes de NADA.</p>
						<p class="bold"><a id="tel-itv" href="tel:956 143 503">Pide cita 956 143 503</a></p>
					</div>
					<div class="post-text itv">
						<h4>Consejo NewCar</h4>
						<p>Antes de acudir a pasar la inspección técnica de vehículos te aconsejamos que revises tu vehículo.</p>
						<h4>Elementos que revisarán durante la ITV</h4>
						<ul><li><strong>Número de bastidor</strong></li><ol>Comprobarán la existencia del nº de bastidor y si coincide con la documentación. También miran los anclajes del motor, fugas de aceite, estado y fijación de la batería</ol><li><strong>Exterior del vehículo</strong>, carrocería</li><ol>Sin corrosión/oxidación en los elementos de seguridad. Sin aristas vivas o cortantes que puedan perjudicar a peatones.</ol><ol>Que los paragolpes/parachoques están bien sujetos a la carrocería y sin presentan bordes cortantes. Matrículas bien sujetas, no tienen números borrosos y no están dobladas.</ol><li><strong>Interior del vehículo</strong>, habitáculo</li><ol>Sin aristas ni salientes. Asientos bien anclados y sean adecuados.</ol><p><a id="alumbrado"></a></p><li><strong>El Alumbrado</strong></li><ol>Intermitentes, luces de posición, de cruce, las largas deben funcionar y estar bien reguladas para que no deslumbren. Las luces de la parte trasera, posición, freno, marcha atrás, intermitentes. En cuanto a su estado, revisarán si están rotas. Incluso debe funcionar la luz de la matrícula trasera.</ol><p><a id="bocina"></a></p><li><strong>Bocina/Claxon</strong></li><ol>ha de funcionar.</ol><p><a id="cinturones"></a></p><li><strong>Cinturones de seguridad</strong></li><ol>Comprueban que se bloquean. Lo mismo si lleva sistema de retención para niños.</ol><li><strong>Los Airbags.</strong></li><ol>Si el vehículo los equipa de serie, verifican que no se ha anulado ninguno (por ejemmplo por un volante deportivo), que nada impide su correcto funcionamiento. Ojo con las fundas, si los asientos tiene instalado algún airbag. Verificará que la luz testigo del airbag no permanezca encendida.</ol><li><strong>Limpiaparabrisas</strong></li><ol>Escobillas y líquido de lavado.</ol><li><strong>Puertas</strong></li><ol>Si cierran. Si suben y bajan la ventanillas.</ol><li><strong>Bloqueo antirrobo del volante</strong></li><li><strong>Funcionamiento del velocímetro</strong></li><li><strong>Los testigos de fallo de motor o el testigo del airbag</strong></li><ol>Se tienen que apagar unos pocos segundos después de encender el coche.</ol><li><strong>Luna del Parabrisas</strong></li><ol>Roturas o grietas sobre todo lado conductor. Que sean homologados</ol><li><strong>Espejos retrovisores</strong></li><ol>En buen estado, que esté bien fijado.</ol><p><a id="neumaticos"></a></p><li><strong>Los Neumáticos</strong></li><ol>Profundidad del dibujo. La medida del neumático tiene que ser la de origen o la que indique en la ficha técnica. El código de velocidad e índice de carga han de ser iguales o superiores a los especificados en la ficha técnica. El neumático tiene unos testigos de desgaste que marcan el mínimo legal de 1,6 mm. Infórmate sobre neumáticos y equivalencias</ol><li><strong>Parachoques y pasos de rueda</strong> han de estar sujetos.</li><p><a id="frenos"></a></p><li><strong>Frenos</strong></li><ol>Se recomienda llevar el vehículo sin cargar. Potencia de frenado delantera y trasera y y su equilibrio.</ol><p>El sistema de antibloqueo de ruedas, ABS. Que se apague tras arrancar el motor. Desde el 01/02/2018.</p><li><strong>Suspensión</strong></li><ol>En el banco de suspensiones comprueban que funcionen correctamente.</ol><p><a id="rotulas_escape_fugas"></a></p><p><a id="analisis_gases"></a></p><li><strong>Análisis de gases</strong></li><ol>Para esta prueba es muy recomendable que el vehículo esté caliente. Si tienes la ITV cerca, antes de ir date una vuelta con el motor a buen régimen. Analizan que los valores de contaminación sean los correctos.<br>
						Si el vehículo es diésel harán una y un análisis de gases ITV en los gasolina.</ol></ul>
					</div>
				</div>
			</div>
		</article>

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