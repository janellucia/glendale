<?php

// check if the repeater field has rows of data
if( have_rows('testimonials') ):

 	// loop through the rows of data
    while ( have_rows('testimonials') ) : the_row();

        // display a sub field value
		    the_sub_field('testimonial_one');
		        the_sub_field('testimonial_author_one');
        
   

    endwhile;

else :

    // no rows found

endif;

?>




