<?php /* Template Name: Events Page */ ?>



<?php get_header();  ?>

<div class="main">
  <div class="container">
  <h2>Events at Glendale</h2>

    <div class="content">
    <div class="events-wrapper">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end the loop?>
    </div><!-- /,events-wrapper -->
    </div> <!-- /,content -->
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->


<div class="lessons-title">
</div>


  <div class="container">
  <!-- start loop for blog posts -->
  <div class="events-blog-section">
    <?php $my_query = new WP_Query( 'posts_per_page=8' ); ?>
    
    <div class="home-blog-posts">
  <h3 class="lessons-title">Leagues</h3>
      <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <div class="home-post">
            <div class="post-content">
              <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
          </div><!-- /.home-post -->
      <?php endwhile; ?>
  </div><!-- /.home-blog-post -->
    </div><!-- /.blog-section -->
  </div><!-- /.container -->



<?php get_footer(); ?>