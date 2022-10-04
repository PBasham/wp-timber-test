<!-- This is the Loop for Wordpress to display all of the post the user created. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title() ?></h1>
    <p><?php the_date() ?></p>
    <p><?php the_excerpt() ?></p>

    <!-- <?php ?> -->
    
    <hr/>

<!-- end of the loop. Also displays message if there are no post. -->
<?php endwhile; else : ?> 
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>