<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
   <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="bT_aQytVEkwaRtiCzT_M5BOza0RdBY6paXL6yg0gyqo" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,500i,700" rel="stylesheet"> 
     
    <!-- CSS - for new MAIN site only - comes last to override default stylesheet in theme folder currently styling temp landing page site -->
    <link href="//biolife4d.com/wp-content/themes/biolife4d/assets/css/style.css" rel="stylesheet">
    
    <!-- Parallax -->
	<script src="/js/modernizr.js"></script>
  	<link rel="stylesheet" href="/css/parallax.css">
  
  <?php wp_head(); ?>  
  
   <!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '285078465302554');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=285078465302554&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

  </head>
  
  <body class="fixed-nav">
	<!-- SRT Pixel -->
   	
    <!-- Header -->
    <header>
  
            <div class="lb-mobile-nav">
                <!-- Brand and toggle get grouped for better mobile display --><div class="nav-border"></div>
                <div class="navbar-header">
                  <div class="lb-mobile-logo">
                      <a href="/">
                      <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                      ?>
                    </a>
                  </div>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php wp_nav_menu( array(
                  'theme_location' => 'primary-mobile',
                  'menu_id'        => 'header-menu-mobile',
                  'depth' => 2,
                  'walker' => new WP_Bootstrap_Navwalker(),
                  ) ); ?>
                </div><div class="nav-border"></div>
          </div>

        	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <?php if ( is_admin_bar_showing() ) :  ?>
              <div style="min-height: 32px;"></div>
            <?php endif; ?>
						<div class="nav-border"></div>
              <?php wp_nav_menu( array(
                'theme_location' => 'primary-left',
                'menu_id'        => 'header-menu-right',
                'depth' => 2,
                'walker' => new WP_Bootstrap_Navwalker(),
              ) ); ?>
              <div class="logo">
                <a href="/">
                  <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                    }
                  ?>
                </a>
              </div>
              <?php wp_nav_menu( array(
                'theme_location' => 'primary-right',
                'depth' => 2,
                'walker' => new WP_Bootstrap_Navwalker(),
                'menu_id'        => 'header-menu-right',
              ) ); ?>
						<div class="nav-border"></div>
					</nav>
    </header>