<?php wp_footer(); ?>
<ul class="footer-widget">
	<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
</ul>

<div class="mobile-footer">
  <div class="container">
	  <div class="footer">
	    <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
	  	<div class="social-home">
        <?php get_template_part('template-parts/social-media-template') ?>
      </div>
	  </div>
  </div>
</div>

<footer>
  <div class="container">
	  <div class="footer">
	    <p>&copy; Glendale Tennis Club <?php echo date('Y'); ?></p>
	  	<p class="credit">Website Created by <a href="http://www.janellucia.com" target="new">Janel Lucia</a></p>
	  </div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<script src="http://94.103.150.222/~devtakecar/wp-content/themes/cornmedia/js/jquery.min.js"></script>

</body>
</html>