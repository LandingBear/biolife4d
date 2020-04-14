<?php
/*
 * Template Name: Home TEST
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
   <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BIOLIFE 4D</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"> 
    
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
    	<div class="menu">
        	<ul class="tabs">
            	<li><a href="#who">WHO WE ARE</a></li>  
                <li><a href="#what">WHAT WE DO</a></li>  
                <li><a href="#why">WHY</a></li>    
                <li><a href="#signup">GET INVOLVED</a></li>
        	</ul>        
        </div>
    	<div class="slider"><?php echo do_shortcode( '[rev_slider alias="landing"]' ); ?>
    </header>
    
    <a name="who"></a>
    <section id="who">
        <div class="fade-top"></div>
        <div class="container">
    		<div class="helix-left"></div>
            <div class="copy">
            	<h1>Who We Are</h1>
            	<strong>BIOLIFE4D</strong> is a pioneering biotech company leveraging current advances in life sciences and cardiac tissue engineering to build human hearts suitable for implantation – lifesaving technology that ultimately gives patients the gift of time.
                <div class="red">And you can get involved.</div>
            </div>
            <a class="arrow" href="#what"></a>
            <div class="helix-right"></div>  
    	</div>
        <div class="fade-bottom"></div>
    </section>
    
    <a name="what"></a>
    <section id="what">
    	<div class="fade-top"></div>
        <div class="container">
            <div class="copy">
                <h1>What We Do</h1>
    
                <p>Operated by seasoned business leaders, guided by world-class biomedical and life science experts, and financed through equity crowdfunding, <strong>BIOLIFE4D is driving a movement to transform the treatment of heart disease</strong>, the leading cause of death worldwide.</p>
                
                
                <p>BIOLIFE4D’s groundbreaking process represents a convergence of recent breakthroughs in regenerative medicine, adult stem cell biology, computer technology, and cutting-edge manufacturing techniques – all of which will make organ replacement commercially viable and commonplace globally.</p>
                
                <a name="why"></a>
                <h1>Why?</h1>
                
                <p>We are committed to perfecting the technology to make viable organ replacement a safe, accessible and affordable reality.</p>
                
                <strong>The movement begins soon. Join us today.</strong>
                
                <a class="arrow" href="#signup"></a>
    		</div>
        </div>
    </section>
    
    <a name="signup"></a>
    <section id="signup">
        <div class="container">
            <div class="gr-wrap">
                <div class="copy">
                    <h1>Get Involved</h1>
                    	Sign up below to learn more <br>
                        and be the first to know when you can invest.
                    <div>
                    <?php echo do_shortcode( '[contact-form-7 id="19" title="Sign-up Form"]' ); ?>
                    <div class="legal">BIOLIFE4D is “testing the waters” for a possible offering of securities under Regulation A of the JOBS Act. No money or other consideration is being solicited by the company at this time, and if sent in response, will not be accepted. No offer to buy the securities can be accepted and no part of thepurchase price can be received until the offering statement is qualified, and any such offer may be withdrawn or revoked, without obligation or commitment of any kind, at any time before notice of its acceptance given after the qualification date. If you indicate interest, your indication of interest involves no obligation orcommitment of any kind. If an offering statement has been filed, you may obtain a copy of the most recent version of the Preliminary Offering Circular from Kendall Almerico at DiMuroGinsburg, 1101 King St #610, Alexandria, VA 22314, (703) 684-4333 or by e-mailing <a href="mailto:info@bankroll.ventures">info@bankroll.ventures</a>.</small>
                </div>
            </div>
        </div>
        <div class="fade"></div>
    </section>
    
    <section id="footer">
        <div class="container">
        	<div class="row">
                <div class="col-sm-4 col-md-4">
                    <img src="/images/logo-biolife.png" />
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="copyright">&copy; 2017 - BIOLIFE 4D<br>
                    	All rights reserved.</div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="tagline"><img src="/images/footer-tagline.png" /></div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    
    <script src="/js/smooth-scroll.js"></script>
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
    
    <?php wp_footer(); ?>

  </body>
</html>