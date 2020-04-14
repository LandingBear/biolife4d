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
                   <a class="btn btn-bigwhite" href="/investor-instructions/">Invest Now</a>
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
    
    <?php wp_footer2(); ?>

</body>
</html>