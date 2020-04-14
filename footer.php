<style type="text/css">
.photo {
}
</style>
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
					<div></div>
                <!-- <p><a class="btn btn-bigwhite" href="https://cfxtrading.com/now/biolife4d.html" target="_blank" rel="noopener">Invest Now</a></p> -->
                 <!--   <p><span class=".secure"><img title="Secure Payments by Credit Card." src="/wp-content/uploads/2018/04/CREDIT-CARDS-secure-WIDE.png" height="47" alt="Bioprinter layering bio-ink of human heart cells"/></span> </p> -->
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
                <div class="col-md-4 lb-custom-logo"> 
                	<?php the_custom_logo(); ?>     
                </div>
                <div class="col-md-4"> 
                	<div class="info"><?php echo get_theme_mod( 'social_media_text' ); ?>
                	  <div class="social">
							<p>
								<?php if (get_theme_mod( 'facebook_link' ) != ""): ?>
									<a href="<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank"><img class="alignleft wp-image-166 size-full" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-social-fb.png" alt="" width="75" height="75" /></a>
								<?php endif ?>
								<?php if (get_theme_mod( 'instagram_link' ) != ""): ?>
									<a href="<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank"><img class="alignleft wp-image-166 size-full" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-social-insta.png" alt="" width="75" height="75" /></a>
								<?php endif ?>
								<?php if (get_theme_mod( 'twitter_link' ) != ""): ?>
									<a href="<?php echo get_theme_mod( 'twitter_link' ); ?>" target="_blank"><img class="alignleft wp-image-166 size-full" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-social-twitter.png" alt="" width="75" height="75" /></a>
								<?php endif ?>
								<?php if (get_theme_mod( 'linkedin_link' ) != ""): ?>
									<a href="<?php echo get_theme_mod( 'linkedin_link' ); ?>" target="_blank"><img class="alignleft wp-image-166 size-full" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-social-linkedin.png" alt="" width="75" height="75" /></a>
								<?php endif ?>
								<?php if (get_theme_mod( 'youtube_link' ) != ""): ?>
									<a href="<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank"><img class="alignleft wp-image-166 size-full" src="<?php bloginfo('template_directory'); ?>/assets/images/icon-social-youtube.png" alt="" width="75" height="75" /></a>
								<?php endif ?>
							<p><?php echo get_theme_mod( 'copyright_text' ); ?></p>
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- FlowType -->
    <script src="/js/flowtype.js"></script>
    <script src="/js/flowtype-size.js"></script>

		<!-- Onboarding Form Autopopulate -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/onboardingForm5.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/preventDatePicker3.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/preventEnterSubmit3.js"></script>

		<!-- More Information Page -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/moreInformationLogic.js"></script>
    
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
    
    <?php wp_footer(); ?>

</body>
</html>