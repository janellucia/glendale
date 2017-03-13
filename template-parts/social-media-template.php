<?php

// check if the repeater field has rows of data
if( have_rows('social_media_icons', 'option') ):

 	// loop through the rows of data
    while ( have_rows('social_media_icons', 'option') ) : the_row();

        // display a sub field value
        // the_sub_field('social_media_url', 'option');

        $social_platform = get_sub_field('social_media_platform', 'option');
        $social_url = get_sub_field('social_media_url', 'option');

        if( $social_platform == 'facebook'){
        	echo '<li><a href="'. $social_url.'" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
        }
        elseif( $social_platform == 'twitter'){
        	echo '<li><a href="'. $social_url.'" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
        }
         elseif( $social_platform == 'instagram'){
        	echo '<li><a href="'. $social_url.'" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
        }
          elseif( $social_platform == 'linkedin'){
        	echo '<li><a href="'. $social_url.'" target="new"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
        }
         elseif( $social_platform == 'google'){
        	echo '<li><a href="'. $social_url.'" target="new"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
        }
        // else( $social_platform == 'other'){
        //     echo '<li><a href="'. $social_url.'"><i class="fa fa-diamond" aria-hidden="true"></i></a></li>';
        //  }
       

    endwhile;

else :

    // no rows found

endif;

?>
