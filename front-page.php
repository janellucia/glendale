<?php



get_header();  ?>

<h3 style="color: white"></h3>
<div class="main">


  <section class="about">
  	<div class="container clearfix">
  		<div class="about-wrapper">
		    <?php 
		      $aboutImage = get_field('about_image');
		    ?>
		    <div class="about-image" style="background-image:url(<?php echo $aboutImage['url'] ?>)">
		  </div><!-- end of about-image -->
		  <div class="about-text">
		  	<h1>Welcome</h1>
		  	<h2>to Glendale</h2>
		  	
		  	<p><?php the_field('about_text'); ?></p>
		  	<p><a class="project-button" href="<?php the_field('about_button_link') ?>" role="button" target="new"><?php the_field('about_button_text') ?> </a></p>
		  </div><!-- end of about-text -->
  		</div><!-- end of about-wrapper -->
  	</div><!-- end of container -->
  </section>


 <div class="header-image">
    <?php 
    echo do_shortcode("[metaslider id=70]"); 
?>
  </div>




	  <section class="current-events">
	  	<div class="container clearfix">
		  	<div class="events-container">
				<?php  dynamic_sidebar( 'front-widget-area' ); ?>
		  	</div>
	  	</div>
	  </section>



  	<?php $headerImage = get_field('testimonial_photo'); ?>
	<div class="testimonials" style="background-image:url(<?php echo $headerImage['url'] ?>)">
		<div class="container clearfix">
			<div id="carousel">
				<div id="slides">
        		<ul>
		             <li class="slide">
		                <div class="quoteContainer">
		                    <p class="quote-phrase">
		                      <?php the_field('testimonial_one'); ?>
		                    </p>
		                </div>
		                <div class="authorContainer">
		                    <p class="quote-author"><?php the_field('testimonial_author_one'); ?></p>
		                </div>
		            </li>
		           <li class="slide">
		                <div class="quoteContainer">
		                    <p class="quote-phrase">
		                      <?php the_field('testimonial_two'); ?>
		                    </p>
		                </div>
		                <div class="authorContainer">
		                    <p class="quote-author"><?php the_field('testimonial_author_two'); ?></p>
		                </div>
		            </li>
		             <li class="slide">
		                <div class="quoteContainer">
		                    <p class="quote-phrase">
		                      <?php the_field('testimonial_three'); ?>
		                    </p>
		                </div>
		                <div class="authorContainer">
		                    <p class="quote-author"><?php the_field('testimonial_author_three'); ?></p>
		                </div>
		            </li>
        		</ul>
    		</div>
    		<div class="btn-bar">
				<div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
			</div>
    		</div>
		</div>
	</div>

	<div class="membership">
		<div class="container clearfix">
			<div class="membership-wrap">
				<div class="title">
					<h2>Club Membership</h2>
					<p>select the best plan</p>
				</div>
				<div class="membership-types">
					<div class="membership-type">
						<div class="type">
							<h3>Family</h3>
						</div>
						<!-- <div class="amount">
							<h3>$65.00</h3>
						</div> -->
						<div class="description">
							<p>Max 2 Adults and student/juniors</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/family-membership/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3> Single Adult</h3>
						</div>
						<!-- <div class="amount">
							<h3>$45.00</h3>
						</div> -->
						<div class="description">
							<p>For Adults 18 years & older</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/adult-member/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3>Junior</h3>
						</div>
						<!-- <div class="amount">
							<h3>$15.00</h3>
						</div> -->
						<div class="description">
							<p> Juniors 17 years & under</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/junior-membership/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3>Register by Mail</h3>
						</div>
						<!-- <div class="amount">
							<h3></h3>
						</div> -->
						<div class="description">
							<p>P.O. Box 444
								Pickering, ON
								L1V2R6</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/wp-content/uploads/2017/03/Registration_Form2017.pdf" role="button">Download</a>
						</div>
					</div>
				</div><!-- end of membership types -->
			</div><!-- end of membership wrap -->
		</div><!-- end of wrapper -->
	</div><!-- end of membership section -->






	<div class="contact">
		<div class="contact-form">
			<h2>Contact Us</h2>
		 	<?php echo do_shortcode('[gravityform id="9" title="false" description="false"]'); ?>
		</div>
		<div class="map">
	    	<?php echo do_shortcode("[wpgmza id='1']"); ?>
		</div>
	</div>







    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

</div> <!-- /.main -->

<?php get_footer(); ?>