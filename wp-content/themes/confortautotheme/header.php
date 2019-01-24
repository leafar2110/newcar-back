<!DOCTYPE html>
<html>
<head <?= language_attributes();?>>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	
	<meta charset="utf-8">
	<meta property="og:url"           content="<?php bloginfo('template_url'); ?>" />
 <meta property="og:type"          content="website" />
 <meta property="og:title"         content="<?php bloginfo('name'); ?>" />
 <meta property="og:description"   content="<?php echo get_theme_mod('conocenos_p'); ?>" />
 <meta property="og:image"         content="<?php echo get_theme_mod('header_background'); ?>" />

 <link href="https://fonts.googleapis.com/css?family=Karla|Roboto|Lora|Open+Sans+Condensed:300|Raleway|Oswald|Roboto+Mono|Josefin+Sans|Catamaran" rel="stylesheet">

 <!-- Bootsrap -->
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

 <!-- Font awesome -->
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
 <link href="<?php bloginfo('template_url'); ?>/css/fontawesome-all.css" rel="stylesheet">  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

 <!-- Template main Css -->
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylepages.css">

 <?php wp_head(); ?>

</head>

<body <?= body_class()?>>

  <header class="main-header">

    <nav id="navscroll" class="navbar navbar-static-top">

      <div class="navbar-top">
        <nav class="navbar">
          <div class="container">
            <button type="button" class="navbar-toggle collapsed pull-left open-nav">

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

            <div class="navbar-header">  
              <?php $header_image = get_header_image();
              if ( ! empty( $header_image ) ) { ?>
                <a class="navbar-brand img-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" alt=""  style=" height:43px; width:auto; "/></a>
              <?php } else {?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
              <?php }?>
            </div>
            <form class="search-navbar navbar-form navsearch1 navbar-left" action="<?php echo home_url('/tienda') ?>">
              <div class="form-group">
                <input type="text" class="form-control" id="s" name="s" placeholder="Quiero buscar...">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right navbar-btns navbar1">
              <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-phone"></span></a></li>
              <li id="kart"><div class="navbar-carro">
               <div class="cont-minicarro">
                 <span id="items-minicarro"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
               </div>
               <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
               <a href="<?php echo home_url( '/carrito' )?>" title="">
                 <span class="glyphicon glyphicon-shopping-cart"></span>
               </a>
             </div></li>
           </ul>
         </div>
       </nav>

     </div>

   </nav> 
   <form class="search-navbar navbar-form navsearch2 navbar-left" action="<?php echo home_url('/tienda') ?>">
    <div class="form-group">
      <input id="s" name="s" type="text" class="form-control" placeholder="Quiero buscar...">
    </div>
    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
  </form>

</header> 


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="close-nav">&times;</a>
  <?php
  $args = array(
    'theme_location' => 'primary',
    'menu' => 'top_menu',
    'depth' => 2,
    'container' => false
  );

  ?>

  <?php wp_nav_menu($args); ?>
</div>
