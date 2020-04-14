<?php
/*
 * Template Name: TEST Page
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
   <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
   	<iframe width="0" height="0" name="Trade Desk Tracking - Biolife 4D Srt Pixel" frameborder="0" scrolling="no" src="https://insight.adsrvr.org/tags/vwebhiw/495m7b0/iframe"></iframe>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="nav-border"></div>
              <div class="container">
				<div class="logo-top">
					<a href="/"><img src="/images/logo-biolife.png" /></a>
				</div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'depth'				=> 2,
						'container'			=> 'div',
						'container_class'	=> 'collapse navbar-collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'nav navbar-nav navbar-left',
						'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
						'walker'			=> new WP_Bootstrap_Navwalker())
					);
					?>
                  <div class="logo">
                    <a href="/"><img src="/images/logo-biolife.png" /></a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OUR TEAM <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/management-team/">Management Team</a></li>
                        <li><a href="/science-team/">Science and Medical Team</a></li>
                      </ul>
                    </li>
                    <li><a href="/invest/">INVEST</a></li>
                    <li><a href="/media/">MEDIA</a></li>
                    <li><a href="/contact/" class="last">CONTACT</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            <div class="nav-border bottom"></div>
        </nav>
    </header>
    
    <!-- end HEADER -->
    
    <section id="video-wrap">	
        <video class="video <?php the_field('header_video_class'); ?>" playsinline autoplay muted loop>
          <source src="/video/<?php the_field('header_video'); ?>.mp4" type="video/mp4">
          <source src="/video/<?php the_field('header_video'); ?>.ogg" type="video/ogg">
          <source src="/video/<?php the_field('header_video'); ?>.webm" type="video/webm">
        </video><!-- /video -->
        <div id="video-wrapper">
            <div class="video-caption">
            	<?php the_title(); ?>
            </div><!-- /content -->
    	</div>
    </section>
    
    <section id="main">
    	<div class="top-fade"></div>
    	<div class="container">
        	<div class="row">
    			<div class="col-md-10 col-md-offset-1">
                	<div class="intro"><?php the_field('intro_text'); ?></div>
            	</div>
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                	<div class="text">
                    	<?php the_content(); ?>
					</div>
				</div>
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="subfooter-fade" style="background-image:url(<?php the_field('subfooter_image'); ?>);"></section>
    
    <section id="cta-res">
		<div class="fade-top-dark"></div>
    	<div class="container">
        	<div class="row">
               <div class="col-md-12">
                	<div class="ekg-gif"><img src="/images/ekg-tagline-gif.gif" /></div>
                	<div class="tagline-sm">Build a Heart. <span class="red-txt">Save a life.</span></div>
					<div><a class="btn btn-red" href="/indication-of-interest/">RESERVE YOUR STOCK NOW</a></div>
               		<div class="ekg-gif-sm"><img src="/images/ekg-gif.gif" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4"> 
                	<div class="tagline"></div>     
                </div>
                <div class="col-md-4"> 
                	<div class="logo"></div>     
                </div>
                <div class="col-md-4"> 
                	<div class="info">
                    	© 2017 - BIOLIFE4D
                        <div class="social">
							<a href="https://www.facebook.com/BIOLIFE4D-478471332513266/" target="_blank"><img class="alignleft wp-image-166 size-full" src="http://biolife4d.com/wp-content/uploads/2017/07/icon-social-fb.png" alt="" width="65" height="65" /></a>
							<a href="https://www.instagram.com/biolife4d/" target="_blank"><img class="alignleft wp-image-167 size-full" src="http://biolife4d.com/wp-content/uploads/2017/07/icon-social-insta.png" alt="" width="66" height="65" /></a>
							<a href="https://twitter.com/Biolife4D" target="_blank"><img class="alignleft wp-image-169 size-full" src="http://biolife4d.com/wp-content/uploads/2017/07/icon-social-twitter.png" alt="" width="65" height="65" /></a>
							<a href="https://www.linkedin.com/company-beta/22305659/" target="_blank"><img class="alignleft wp-image-168 size-full" src="http://biolife4d.com/wp-content/uploads/2017/07/icon-social-linkedin.png" alt="" width="65" height="65" /></a>
						</div>
                        <!--
                        <div class="sitemap">CAREERS | SITE MAP<br>
                        	PRIVACY POLICY | INVEST NOW
                    	</div>
                    	-->
                    </div>     
                </div>
        	</div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- FlowType -->
    <script src="/js/flowtype.js"></script>
    <script src="/js/flowtype-size.js"></script>
    
    <!-- Parallax -->
	<script src="/js/demo.js"></script>
    
    <!-- Smooth Scroll -->
	<script type="text/javascript">
    
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});

	</script>
   	
   	<script type="text/javascript">
	   $(document).ready(function(){
		  var scrollTop = 0;
		  $(window).scroll(function(){
			scrollTop = $(window).scrollTop();
			 $('.counter').html(scrollTop);

			if (scrollTop >= 100) {
				$('.nav-border').addClass('hide');
			} else if (scrollTop < 100) {
				$('.nav-border').removeClass('hide');
			} 

		  }); 

		});
	</script>
    
    <?php wp_footer(); ?>

</body>
</html>