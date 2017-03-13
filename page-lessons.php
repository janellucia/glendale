<?php

/*
	Template Name: Lessons Page
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
    <div class="head-pro">
  		<div class="about-wrapper"> 
  			<div class="about-text">
  				<h1>Head Pro: Brian Hurd</h1>
		  		<h2>Instructors</h2>
		  		<p><?php the_field('head_pro_text'); ?></p>
		  	</div><!-- end of about-text -->
		    <?php 
		      $headProImage = get_field('head_pro_photo');
		    ?>
		    <div class="about-image" style="background-image:url(<?php echo $headProImage['url'] ?>)">
		  	</div><!-- end of about-image -->
  		</div><!-- end of about-wrapper -->
  </div> <!-- /.head-pro-->

<?php $headerImage = get_field('programs_background_photo'); ?>
	<div class="junior-programs" style="background-image:url(<?php echo $headerImage['url'] ?>)">
  	<div class="junior-wrapper">
  		<h1>Junior Programs / Adult Programs</h1>
  		<p>To register for any of these programs, please complete the Program Registration Form and forward it with payment to Brian Hurd.</p>
		<p>All participants in the programs below must be Glendale Tennis Club members.  If you are not already a member, please refer to the membership section for information on membership options and instructions. </p>
		<p>To register for any of the 2017 programs click here: <a href="http://www.pickeringtennispros.com/">pickeringtennispros.com</a></p>
		<p>Or contact Brian directly at <a href="tel:+9057066667">905-706-6667</a></p>
  	</div>
  </div>

  <div class="contact-form-area">
    <div class="contact-form">
      <h2>Send Brian a Message</h2>
      <?php echo do_shortcode('[gravityform id="11" title="false" description="false"]'); ?>
    </div>
  </div>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>