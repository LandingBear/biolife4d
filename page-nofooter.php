<?php
/*
 * Template Name: No Footer (Full Width)
 */
?>

<?php get_header(); ?>
    
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
    
    <!-- FOOTER -->
    
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