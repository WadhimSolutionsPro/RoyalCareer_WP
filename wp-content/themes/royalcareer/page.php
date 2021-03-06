<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="container">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
                the_content();
				

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
