<?php
/**
 * The template for displaying all single posts
 *
 *
 */

get_header();
?>

	<div id="primary" class="content-area pageTemplate">
		<main id="main" class="site-main">

			<?php

      // Start the Loop.
      
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );
       // the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
