<?php

// check if the repeater field has rows of data
if( have_rows('skill_tags') ):

 	// loop through the rows of data
    while ( have_rows('skill_tags') ) : the_row();

        // display a sub field value
        the_sub_field('skill_types');

    endwhile;

else :

    // no rows found

endif;

?>