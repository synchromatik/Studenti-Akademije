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
	<div class="main__holder__students__content">
		<div class="row">
			<div class="col-md-4 main__holder__students__content__sidebar">
				<?php if ( in_category( 'vesti' )) { ?>
					<h2>Vesti</h2>
					<h4>Informicije </h4>
				<?php } else if ( in_category( 'studenti' )) { ?>
					<h2>Profili Studenata</h2>
					<h4>Prestavljanje studenata Akademije Umetnosti smer Produkcija u umetnosti i medijima</h4>
				<?php } else if ( in_category( 'dogadjaji' )) { ?>
					<h2>Događaji</h2>
					<h4>Na i oko akademije</h4>
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
					if ( in_category( 'vesti' )) {
						get_template_part( 'templates/news', get_post_format() );
					} elseif ( in_category( 'studenti' )) {
						get_template_part( 'templates/students', get_post_format() );
					} elseif ( in_category( 'dogadjaji' )) {
						get_template_part( 'templates/events', get_post_format() );
					} else {
						// etc.
					}
				// End the loop.
				endwhile;
				?>

			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->


<?php get_footer(); ?>
