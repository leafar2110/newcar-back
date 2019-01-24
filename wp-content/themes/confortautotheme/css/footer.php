<section class="page-section footsuscribe">
    <div>
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="suscribe-title">¿Quieres enterarte de todas nuestras ofertas y promociones? <span style="font-size: 16px;">¡Únete a Newcar!</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input name="suscribe" id="suscribe-mail" placeholder="Escribe tu email">
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" id="suscribe-submit" value="Suscribirse">
                    </div>
                    <div class="col-sm-12">
                        <div class="politica-text">
                            <p>
                                Taller Newcar, tratará sus datos para el envío de información sobre actividades, productos, servicios y ofertas de Taller Newccar,
                                legitimado en su consentimiento. Le informamos que sus datos no serán comunicados a terceros. Puede ejercitar sus derechos de
                                acceso, rectificación, supresión y otros derechos según se indica en la Política de Privacidad
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div>
                    <p class="suscribe-title">Síguenos!</p>
                </div>
                <div class="social-footer">
                    <div class="socialfooterbtn"><i class="icon-facebook icon-social"></i></div>
                    <div class="socialfooterbtn"><i class="icon-facebook icon-social"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" style="margin: 0">

    <h3 class="header-title">¿POR QUÉ COMPRAR EN <span class="blue-text">TALLER NEW CAR</span>?</h3>

    <div class="container">
        <div class="chr-menu">
                <div class="advtg2">
                    <div><img src="<?php bloginfo('template_url'); ?>/images/icons/calendario.png"></div>
                <p>Pide tu cita online</p>
                </div>
                <div class="advtg2">
                    <div><img src="<?php bloginfo('template_url'); ?>/images/icons/mecanico.png"></div>
                <p>Montaje realizado profesionales</p>
                </div>
                <div class="advtg2">
                    <div><img src="<?php bloginfo('template_url'); ?>/images/icons/cronometro.png"></div>
                <p>Recogida en autocentro en 2 horas</p>
                </div>
                <div class="advtg2">
                    <div><img src="<?php bloginfo('template_url'); ?>/images/icons/candado.png"></div>
                    <p>Pago seguro</p>
                </div>
                <div class="advtg2">
                    <div><img src="<?php bloginfo('template_url'); ?>/images/icons/formasdepago.png"></div>
                    <p>Paga cómodamente</p>
                </div>
        </div>
    </div>

</section>

<footer class="main-footer">
	<div class="foot">
        <div class="row">
            <div class="col-sm-4">
                <p>Universo Newcar</p>
                <ul class="post-list">
                    <li>10 Ventajas</li>
                    <li>Condiciones generales
de aplicación de la
garantía</li>
                    <li>dcasd</li>
                    <li>sadc</li>
                    <li>asds</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <p>Neumáticos</p>
                <ul class="post-list">
                    <li>sdlkmsdlkfm sldkfmslk fmslkmfs</li>
                    <li>sldffkmlsdfs</li>
                    <li>ldkfmsldkfmsld kmfslk</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <p>Consejos prácticos</p>
                <ul class="post-list">
                    <li>Mantenimiento de
aceite del motor
¿Por qué es
importante el buen
manteniiento de los
neumáticos?</li>
                    <li>Mantenimiento de
aceite del motor
¿Por qué es
importante el buen
manteniiento de los
neumáticos?</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- main-footer -->

<div class="navbar-foot">
              
              <div class="container">

                  <div class="navbar-header">  
                      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/newcarfooter.png" class="header-image" alt=""  style=" height:43px; width:auto; "/></a>
                  </div>

                <div id="navbar" class="navbar-collapse collapse">

					<?php
						$args = array(
						  'theme_location' => 'footer',
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

<div class="copyright">
    <p>Copyright © 2018 Taller Newcar. Todos los derechos reservados.</p>
</div>

<?php wp_footer();?>

</body>
</html>