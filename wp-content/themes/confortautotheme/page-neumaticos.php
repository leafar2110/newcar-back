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

    <section class="section-caracteristicas container">
      <div class="row">
        <form id="form-neumatico-page" class="form-neumatico" method="get" action="<?php echo esc_url(home_url('categoria-producto/neumaticos'));?>">
          <div class="bd-neumatico">
            <div class="col-1-8">
              <label for="cfa_width">Anchura</label>
              <select class="select-neumatico1" name="cfa_width" id="cfa_width">
                <option value="">Todos</option>
                <option value="145">145</option><option value="155">155</option><option value="165">165</option><option value="175">175</option><option value="185">185</option><option value="195">195</option><option value="205">205</option><option value="215">215</option><option value="225">225</option><option value="235">235</option><option value="245">245</option><option value="255">255</option><option value="265">265</option><option value="275">275</option><option value="285">285</option><option value="295">295</option><option value="305">305</option><option value="315">315</option>                        </select>
                
              </div>
              <div class="col-1-8">
                <label for="cfa_hb">Altura</label>
                <select class="select-neumatico1" name="cfa_hb" id="cfa_hb">
                  <option value="">Todos</option>
                  <option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="60">60</option><option value="65">65</option><option value="70">70</option><option value="75">75</option><option value="80">80</option><option value="85">85</option>                        </select>
                  
                </div>
                <div class="col-1-8">
                  <label for="cfa_seat">Diámetro</label>
                  <select class="select-neumatico1" name="cfa_seat" id="cfa_seat">
                    <option value="">Todos</option>
                    <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option>                        </select>
                    
                  </div>
                  <div class="col-1-8">
                    <label for="cfa_loadi">Carga</label>
                    <select class="select-neumatico1" name="cfa_loadi" id="cfa_loadi">
                      <option value="">Todos</option>
                      <option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100/98">100/98</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104/102">104/102</option><option value="104">104</option><option value="104/106">104/106</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110/108">110/108</option><option value="110">110</option><option value="110-112">110-112</option><option value="99/97">99/97</option><option value="111">111</option><option value="112/110">112/110</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="121">121</option>                        </select>
                      
                    </div>
                    <div class="col-1-8">
                      <label for="cfa_speedi">Velocidad</label>
                      <select class="select-neumatico1" name="cfa_speedi" id="cfa_speedi">
                        <option value="">Todos</option>
                        <option value="h">H</option><option value="q">Q</option><option value="r">R</option><option value="s">S</option><option value="t">T</option><option value="v">V</option><option value="w">W</option><option value="y">Y</option>                        </select>
                        
                      </div>
                      <div class="col-1-8">
                        <label for="cfa_marca">Marca</label>
                        <select class="select-neumatico1" name="cfa_marca" id="cfa_marca">
                          <option value="">Todos</option>
                          <option value="continental">Continental</option><option value="dunlop">Dunlop</option><option value=""></option><option value="fire">Fire</option><option value="firestone">Firestone</option><option value="michelin">Michelin</option><option value="orium">Orium</option><option value="pirelli">Pirelli</option>                        </select>
                          
                        </div>
                        <div class="col-1-8">
                          <label for="cfa_winter">Temporada</label>
                          <select class="select-neumatico1" name="cfa_winter" id="cfa_winter">
                            <option value="">Todos</option>
                            <option value="">All season</option><option value="y">Invierno</option><option value="">Verano</option></select>

                          </div>
                          <div class="col-1-8">
                            <label for="cfa_runflat">Antipinchazos</label>
                            <select class="select-neumatico1" name="cfa_runflat" id="cfa_runflat">
                              <option value="">Todos</option>
                              <option value="">No</option><option value="s">Si</option>                        </select>
                            </div>
                          </div>
                          
                          <div class="botones">
                            <div class="">
                              <button id="neumatico-search1" class="boton-buscar" type="button">Buscar</button>
                            </div>
                            <div class="">
                              <button id="neumatico-clear1" class="clear" type="button">Limpiar búsqueda</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>	

                    <section class="section-vehiculo ">
                      <div class="page-heading margin-titulo ">
                        <h2 class=" text-center">Encuentra tu neumático por tipo de <span class="span">vehículo</span></h2>
                      </div>
                      <div class="container">
                        <div class="separador">
                          <div class="row" data-carousel="0">
                            <div class="col-sm-6 col-md-4">
                              <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first  current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_tipo=TURISMO"); ?>" title="Turismo">
                                    <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/turismo.png" alt="Neumáticos para Turismo">
                                    <span> <br>Neumáticos para Turismo</span>
                                  </a>
                                </div>
                                <div class="description">Compra neumáticos para turismos en NewCar. Ofrecemos las mejores marcas y modelos para tu coche. </div>
                                
                              </div>
                            </div>


                            
                            <div class="col-sm-6 col-md-4">
                              <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_tipo=TODO TERRENO 4X4"); ?>" title="Turismo">
                                    <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/4x4.png" alt="Neumáticos para Turismo">
                                    <span> <br>Neumáticos para 4X4</span>
                                  </a>
                                </div>
                                <div class="description">Encuentra neumáticos para tu coche 4X4 o tipo SUV. Descubre en NewCar todos los modelos y medidas disponibles.                                </div>
                              </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                              <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_tipo=CAMIONETA"); ?>" title="Turismo">
                                    <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/furgoneta.png" alt="Neumáticos para Turismo">
                                    <span> <br>Neumáticos para furgoneta</span>
                                  </a>
                                </div>
                                <div class="description">Neumáticos para furgonetas y vehículos comerciales al mejor precio. Halla en NewCar la mejor opción para tu coche.                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <a href="<?php echo home_url("categoria-producto/neumaticos"); ?>" class="landing-link">Ver todos los tipos de vehículo</a>
                          
                        </div>

                      </div>
                      
                    </section>


                    <section class="section-marca">
                      <div class="page-heading">
                        <h2 class=" text-center">Encuentra tu neumático por <span class="span">marca</span></h2>
                      </div>
                      <div class="widget-landing marca container">
                        <div class=" separador">
                          <div class="">
                           
                            <div class=" col-sm-6 col-md-3">
                              <div class="widget-landing-option current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=FIRESTONE"); ?>" title="FIRESTONE">
                                    <img class="img" src="<?php bloginfo('template_url'); ?>/images/firestone.jpg" width="100%" alt="Neumáticos FIRESTONE">
                                    <span>Neumáticos  FIRESTONE</span>
                                  </a>
                                </div>
                                <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                              </div>
                            </div>
                            <div class=" col-sm-6 col-md-3">
                              <div class="widget-landing-option current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=MICHELIN"); ?>" title="FIRESTONE">
                                    <img class="img" src="<?php bloginfo('template_url'); ?>/images/michelin.jpg" width="100%" alt="Neumáticos FIRESTONE">
                                    <span>Neumáticos  MICHELIN</span>
                                  </a>
                                </div>
                                <div class="description">Los neumáticos Michelin ofrecen el equilibrio entre seguridad y eficiencia.                                </div>
                              </div>
                            </div>
                            <div class=" col-sm-6 col-md-3">
                              <div class="widget-landing-option current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=CONTINENTAL"); ?>" title="FIRESTONE">
                                    <img class="img" src="<?php bloginfo('template_url'); ?>/images/continental.jpg" width="100%" alt="Neumáticos FIRESTONE">
                                    <span>Neumáticos  CONTINENTAL</span>
                                  </a>
                                </div>
                                <div class="description">Encuentra el mejor neumático de frenada con los neumáticos Continental.                               </div>
                                
                              </div>
                            </div>

                            <div class=" col-sm-6 col-md-3">
                              <div class="widget-landing-option current">
                                <div class="widget-image">
                                  <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=ORIUM"); ?>" title="FIRESTONE">
                                    <img class="img" src="<?php bloginfo('template_url'); ?>/images/orium.jpg" width="100%" alt="Neumáticos FIRESTONE">
                                    <span>Neumáticos  ORIUM</span>
                                  </a>
                                </div>
                                <div class="description">Compra tus nuevos neumáticos Orium al mejor precio y con el mejor servicio.                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="<?php echo home_url("categoria-producto/neumaticos"); ?>" class="landing-link">Ver todas las marcas de neumáticos</a>
                          
                        </div>
                      </div>
                    </section>

                    <section class="section-dimensiones">
                      <div class="page-heading">
                        <h2 class="text-center">Encuentra tus neumáticos por <span class="span" >dimensiones</span></h2>
                      </div> 
                      <div class="widget-landing dimensions container">
                        
                        <div class=" separador">
                          <div class="columns-5">
                            <div class="col-1-5">
                              <div class="links widget-image">
                                <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_width=205&cfa_hb=55"); ?>" title="205/55 R16">
                                  <img class="img-dimension" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                                  <span>Neúmatico 205/55</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-1-5">
                              <div class="links widget-image">
                                <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_width=195&cfa_hb=65"); ?>" title="205/55 R16">
                                  <img class="img-dimension" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                                  <span>Neúmatico 195/65</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-1-5">
                              <div class="links widget-image">
                                <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_width=225&cfa_hb=45"); ?>" title="205/55 R16">
                                  <img class="img-dimension" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                                  <span>Neúmatico 225/45</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-1-5">
                              <div class="links widget-image">
                                <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_width=175&cfa_hb=65"); ?>" title="205/55 R16">
                                  <img class="img-dimension" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                                  <span>Neúmatico 175/65</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-1-5">
                              <div class="links widget-image">
                                <a href="<?php echo home_url("categoria-producto/neumaticos?cfa_width=185&cfa_hb=65"); ?>" title="205/55 R16">
                                  <img class="img-dimension" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                                  <span>Neúmatico 185/65</span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <a class="landing-link" href="">Ver todas las neumáticos por dimensiones</a>
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