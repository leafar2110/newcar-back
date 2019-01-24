<?php

get_header();
?>

<div id="banner-header" 
style=" 
background: url(<?php bloginfo('template_url'); ?>/images/portada.jpg)no-repeat center 0px;
background-size: cover;"
>
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

<div class="banner-caption">
	<h2 class="bounceInDown animated slow title">Todos los servicios que necesitas en un mismo taller</h2>
</div> 
</div>
<div class="cintillo">
	<img src="<?php bloginfo('template_url'); ?>/images/bannerinferior.jpg" width="100%" height="auto">
</div>
<div class="panel1">
	<div class="container" style="width: 100%;">
		<div class="row">
			<div class="col-sm-6 sm">
				<div class="frontmenu">
					<ul class="search-btns clearfix">
						<div id="fm1">
							<li class="searchbtn">
								<div class="search-icon">
									<img src="<?php bloginfo('template_url'); ?>/images/icons/neumatico.png" width="100%" height="auto">
								</div>
								<p>NEUMATICOS</p>
							</li>
						</div>
						<div id="fm2">
							<li class="searchbtn">
								<div class="search-icon">
									<img src="<?php bloginfo('template_url'); ?>/images/icons/pistola.png" width="100%" height="auto">
								</div>
								<p><span class="textp1">CHAPA Y </span>PINTURA</p>
							</li>
						</div>
						<div id="fm3">
							<li class="searchbtn">
								<div class="search-icon">
									<img src="<?php bloginfo('template_url'); ?>/images/icons/engranajes.png" width="100%" height="auto">
								</div>
								<p>MANTENIMIENTO</p>
							</li>
						</div>
						<div id="fm4">
							<li class="searchbtn">
								<div class="search-icon">
									<img src="<?php bloginfo('template_url'); ?>/images/icons/mecanica.png" width="100%" height="auto">
								</div>
								<p>MECANICA</p>
							</li>
						</div>
						<ul>
							<li></li>
						</ul>
					</ul>
					<div class="menu search-menu fmenu" id="fmenu1">
						<form method="get" action="<?php echo esc_url(home_url('categoria-producto/neumaticos'));?>">
							<ul class="search-options">
								<li>
									<p>Anchura</p>
									<select name="cfa_width" id="cfa_width">
										<option value="">Todos</option>
										<option value="145">145</option><option value="155">155</option><option value="165">165</option><option value="175">175</option><option value="185">185</option><option value="195">195</option><option value="205">205</option><option value="215">215</option><option value="225">225</option><option value="235">235</option><option value="245">245</option><option value="255">255</option><option value="265">265</option><option value="275">275</option><option value="285">285</option><option value="295">295</option><option value="305">305</option><option value="315">315</option>                        
									</select>

								</li>
								<li>
									<p>Altura</p>
									<select name="cfa_hb" id="cfa_hb">
										<option value="">Todos</option>
										<option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="60">60</option><option value="65">65</option><option value="70">70</option><option value="75">75</option><option value="80">80</option><option value="85">85</option>                        </select>

									</li>
									<li>
										<p>Diametro</p>
										<select name="cfa_seat" id="cfa_seat">
											<option value="">Todos</option>
											<option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option>                        </select>

										</li>
										<li>
											<p>Carga</p>
											<select name="cfa_loadi" id="cfa_loadi">
												<option value="">Todos</option>
												<option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100/98">100/98</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104/102">104/102</option><option value="104">104</option><option value="104/106">104/106</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110/108">110/108</option><option value="110">110</option><option value="110-112">110-112</option><option value="99/97">99/97</option><option value="111">111</option><option value="112/110">112/110</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="121">121</option>                        </select>

											</li>
											<li>
												<p>Velocidad</p>
												<select name="cfa_speedi" id="cfa_speedi">
													<option value="">Todos</option>
													<option value="h">H</option><option value="q">Q</option><option value="r">R</option><option value="s">S</option><option value="t">T</option><option value="v">V</option><option value="w">W</option><option value="y">Y</option></select>
												</li>
											</ul>

											<div class="tyre-img">
												<img src="<?php bloginfo('template_url'); ?>/images/tyre.png" width="100%" height="auto"/>
											</div>

											<ul class="search-options2">
												<li>
													<label><input type="submit" name="season" value="verano"><p><i class="far fa-sun" style="color: #fbff00"></i></p><p>Verano</p></label>
												</li>
												<li>
													<label><input type="submit" name="season" value="invierno"><p><i class="fas fa-snowflake" style="color: #a7caff"></i></p><p> Invierno</p></label>
												</li>
												<li>
													<label><input type="submit" name="season" value="season"><p><i class="fas fa-cloud" style="color: #717171"></i></p><p> All seasons</p></label>
												</li>
												<li>
													<label><input type="submit" name="season" value="antipinchazos"><p><i class="fas fa-car"></i></p><p> Antipinchazos</p></label>
												</li>
											</ul>
											<div class="ssubmit-container">
												<input class="search-submit" type="submit" value="Buscar">
											</div>
										</form>
									</div>
									<div class="menu search-menu fmenu" id="fmenu2">
										<ul class="service-new-list">
											<li>Reparación de chapa y pintura</li>
											<li>Paragolpes</li>
											<li>Espejos y lunas</li>
											<li>Bolas de enganche</li>
											<li>Damos servicios a compañias de renting y aseguradoras.</li>
											<li>Ofrecemos servicio a automóviles, furgonetas y 4X4</li>
										</ul>
										<div class="contact-btn">
											<a href="<? home_url('/contacto') ?>">Contáctanos ya!</a>
										</div>
									</div>
									<div class="menu search-menu fmenu" id="fmenu3">
										<ul class="service-new-list">
											<li>Baterías</li>
											<li>Cambios de aceites</li>
											<li>Pastillas de frenos</li>
											<li>Revisiones</li>
											<li>Ofrecemos servicios a automóviles, furgonetas y 4X4</li>
										</ul>
										<div class="contact-btn">
											<a href="<? home_url('/contacto') ?>">Contáctanos ya!</a>
										</div>
									</div>
									<div class="menu search-menu fmenu" id="fmenu4">
										<ul class="service-new-list">
											<li>Embragues</li>
											<li>Amortiguadores</li>
											<li>Kits de distribución</li>
											<li>Máquinas de diagnosis</li>
											<li>Ofrecemos servicio a automóviles</li>
										</ul>
										<div class="contact-btn">
											<a href="<? home_url('/contacto') ?>">Contáctanos ya!</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div id="slide">
									<div class="menu banner-menu text-center slider cstmfade">
										<img src="<?php bloginfo('template_url'); ?>/images/icons/itv.png" width="130px" height="auto" style="margin-top: 30px;">
										<div>
											<h4 class="itv-title">
												Revisión ITV
											</h4>
										</div>

										<div class="bannerfp-text">
											<p>Preparamos tu vehículo para pasar la ITV y te lo llevamos.
											No te preocupes de NADA.</p>
											<p class="bold">Pide cita 666 000 000</p>
										</div>
									</div>
									<div class="menu banner-menu text-center slider cstmfade">
										<img src="<?php bloginfo('template_url'); ?>/images/ofertaaceite.jpg" width="100%" height="auto">

										<div class="bannerfp-text" style="background:#2f9c2f">
											<p>Aprovecha ahora y haz tu revisión con nosotros pide cita</p>
											<p class="bold">Pide cita 666 000 000</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="services1">
					<h3 class="header-title">TODO LO QUE NECESITA TU COCHE LO ENCUENTRAS EN <span class="blue-text">Taller Newcar</span></h3>
					<div class="container">
						<div class="service-ul">
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=1"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof1")?></p>
										<img src="<?=get_theme_mod("imgof1")?>">
									</div>
								</a>
							</div>
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=2"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof2")?></p>
										<img src="<?=get_theme_mod("imgof2")?>">
									</div>
								</a>
							</div>
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=3"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof3")?></p>
										<img src="<?=get_theme_mod("imgof3")?>">
									</div>
								</a>
							</div>
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=4"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof4")?></p>
										<img src="<?=get_theme_mod("imgof4")?>">
									</div>
								</a>
							</div>
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=5"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof5")?></p>
										<img src="<?=get_theme_mod("imgof5")?>">
									</div>
								</a>
							</div>
							<div class="service-list">
								<a href="<?php echo home_url("/servicios?of=6"); ?>">
									<div class="service-box">
										<p class="anuncio"><?=get_theme_mod("titleof6")?></p>
										<img src="<?=get_theme_mod("imgof6")?>">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="notice-section clearfix">
					<ul>
						<?php

						$args=array(
							'posts_per_page'=>4
						);

						$my_query = new WP_Query($args);

						if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); 

								?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<div class="notice-box">
											<div class="n-up">
												<img src="<?=the_post_thumbnail_url()?>">
											</div>
											<div class="n-down">
												<div>
													<h4><?php the_title(); ?></h4>
													<p><?php echo customexcerpt(5); ?></p>
												</div>
											</div>
										</div>
									</a>
								</li>

								<?php

							endwhile;
						}

						wp_reset_query();
						?>
					</ul>
				</div>

				<?php
				get_footer();