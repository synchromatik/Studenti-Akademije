<?php
/**
 *
 * @package WordPress
 * @subpackage Studenti Akademije - Vesti
 * @since Studenti Akademije 1.0
 */

get_header(); ?>

<div class="container main__holder">
	<!-- /.navbar -->
	<div class="container main__holder__students__content">
		<div class="row">
			<div class="col-md-4 main__holder__students__content__sidebar">
				<?php if ( in_category( 'vesti' )) { ?>
					<h2>Vesti</h2>
					<h4>Obavestenja header</h4>
				<?php } else if ( in_category( 'studenti' )) { ?>
					<h2>studenti</h2>
					<h4>studentio header</h4>
				<?php } else if ( in_category( 'dogadjaji' )) { ?>
					<h2>dogadjaji</h2>
					<h4>dogadjaji header</h4>
				<?php } else  { ?>
		            <!-- i regret nothing -->
				<?php } ?>

			</div>
			<div class="col-md-8">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					/*
					 * Get the news template
					 */
					get_template_part( 'templates/events', get_post_format() );
				// End the loop.
				endwhile;
				?>

			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->


<?php get_footer(); ?>
