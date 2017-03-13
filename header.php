<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <div class="top-menu">
    <!-- <div class="container"> -->
    <div class="header-contact">
      <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
      
    </div>
      <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <input type="search" placeholder="Search..." title="Search..." name="s" id="s" >
        <input type="submit" class="searchsubmit" value="&raquo;">
      </form>
    <!-- </div> /.container -->
    </div> <!-- /.top-menu -->
      <div class="header-front-page">



    <div class="menuIcon">
      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          // echo $image[0]; 
      ?>
        <a class="res-logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"> <img src="<?php echo $image[0];?>" alt="Glendale Logo">
        </a>
      <a href="#menuExpand" class="hammy"><i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </div>     
    <div class="nav">
      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          // echo $image[0]; 
      ?>
      <a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"> <img src="<?php echo $image[0];?>" alt="">
      </a>
      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary' )); ?>
    
    </div>
      
  </div> <!-- /.container -->
  <div class="hero-front-page"></div>
</header><!--/.header-->

<a href="#" class="back-to-top" title="back to top"><i class="fa fa-angle-up" aria-hidden="true"></i>
</a>

      <!-- </div> /.container -->
    </div><!-- /.nav-menu -->
</header><!--/.header-->

