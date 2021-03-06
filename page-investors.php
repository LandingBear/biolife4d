<?php
/*
 * Template Name: Investors Page
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
           <?php 
			  // Fix menu overlap
			  if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
			?> <div class="nav-border"></div>
              <div class="logo investors">
				<a href="/"><img src="/images/logo-biolife.png" /></a>
			  </div>
            <div class="nav-border bottom"></div>
        </nav>
    </header>
    
    <section id="video-wrap">	
        <video id="my-video" class="video <?php the_field('header_video_class'); ?>" playsinline autoplay muted loop>
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
		<div class="fade-top-dark">
		  <div align="center"></div>
		</div>
    	<div class="container">
        	<div class="row">
              <div class="col-md-12">
                	<div class="ekg-gif"><img src="/images/ekg-tagline-gif.gif" /></div>
                	<div class="tagline-sm">
                	  <p>Build a Heart. <span class="red-txt">Save a life.</span></p>
                	</div>
               		<div class="ekg-gif-sm">
               		  <p><img src="/images/ekg-gif.gif" /></p>
           		   </div>
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
                	<div class="info">Follow us on Social Media
                	  <div class="social">
							<p><a href="https://www.facebook.com/BIOLIFE4D-478471332513266/" target="_blank"><img class="alignleft wp-image-166 size-full" src="/wp-content/uploads/2017/07/icon-social-fb.png" alt="" width="75" height="75" /></a>
							  <a href="https://www.instagram.com/biolife4d/" target="_blank"><img class="alignleft wp-image-167 size-full" src="/wp-content/uploads/2017/07/icon-social-insta.png" alt="" width="75" height="75" /></a>
							  <a href="https://twitter.com/Biolife4D" target="_blank"><img class="alignleft wp-image-169 size-full" src="/wp-content/uploads/2017/07/icon-social-twitter.png" alt="" width="75" height="75" /></a>
							  <a href="https://www.linkedin.com/company-beta/22305659/" target="_blank"><img class="alignleft wp-image-168 size-full" src="/wp-content/uploads/2017/07/icon-social-linkedin.png" alt="" width="75" height="75" /></a><a href="https://www.youtube.com/channel/UCUGfCNrPak61lBl0jIiRGJw/videos" target="_blank"> <img class="alignleft wp-image-170 size-full" src="/wp-content/uploads/2017/07/icon-social-youtube.png" alt="" width="75" height="75" /></a></p>
							<p>© 2018 - BIOLIFE4D</p>
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
   	
   	<!-- Slim down nav menu after scrolling -->
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
 	
 	<!-- Reset Science video at end -->
  	<script type="text/javascript">
		var vid=document.getElementById('video-1033-1');
		vid.addEventListener("ended", resetVideo, false);

		function resetVideo() {
		// resets the video element by reload of video
		this.load()
		}  
	</script>

	<!-- Fix for iOS recaptcha scrolling issue -->
	<script type="text/javascript">
		
		$(document).ready(function(){
			var recap = document.getElementsByClassName("g-recaptcha")[0];
			if (recap) {
				recap.setAttribute("data-callback", "onReCaptchaSuccess");
			} else {
				console.log("Recaptcha not found.");
			}
		});
		
		var onReCaptchaSuccess = function () {
			var destElementOffset = $('.reference').offset().top;
			$('html, body').animate({scrollTop: destElementOffset }, 500);
		}
	</script>
    
    <?php wp_footer(); ?>

</body>
</html>