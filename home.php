<?php /* Template Name: Leagues Page */ ?>

<?php get_header();  ?>

<div class="main">
  <div class="container">
      <div class="blog-section">
        <?php $my_query = new WP_Query( 'posts_per_page=20' ); ?>
        <div class="home-blog-posts">
          <h3 class="lessons-title">Leagues</h3>
          <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <div class="home-post">
            <div class="post-content">
              <h4><?php the_title(); ?></h4>
              <?php the_content(); ?>
              <a href="<?php  the_permalink() ?>" class="read-more">read more...</a>
            </div>
          </div><!-- /.home-post -->
          <?php endwhile; ?>
        </div><!-- /.home-blog-post -->
      </div><!-- /.blog-section -->
  </div> <!-- /.container -->
      <div class="disclaimer">
        <h3>Club Championships</h3>
        <p class="note">Glendale hosts various Club Championships in July, August and September. Championships are open to league/tournament members only. Registration deadline will be posted at the club prior to the tournament. Players will play on their current level of play, and cannot play in a lower level. Complete rules will follow. Tournament Director is Anzalene Rayman 647-692-7697</p>
        <div class="note">
          <h2>Sign up for the Club Championships</h2>
          <?php echo do_shortcode('[gravityform id="10" title="false" description="false"]'); ?>
        </div>
      </div>
</div> <!-- /.main -->

<?php get_footer(); ?>