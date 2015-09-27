<?php
/**
 * @package WordPress
 * @subpackage Studenti Akademije
 * @since Studenti Akademije 1.0
 */

get_header(); ?>

<div class="container homepage__content">
	<!-- /.navbar -->
	<div class="container homepage__content__prenews">
		<div class="row">
			<div class="col-md-12">
				<h4>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<?php echo $description; ?>
					<?php endif; ?>
				</h4>
			</div>
		</div>
	</div>
	<div class="container homepage__content__news">
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12">
						<!-- event loop -->
						<?php query_posts( 'category_name=vesti&posts_per_page=1' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="homepage__content__news__newscard ">
								<?php
									// Get the category url
									$the_cat = get_the_category();
									$category_name = $the_cat[0]->cat_name;
									$category_description = $the_cat[0]->category_description;
									$category_link = get_category_link( $the_cat[0]->cat_ID );
								?>
								<span class="date">
									<?php the_time('j') ?>
									<span><?php the_time('M') ?> </span>
								</span>
								<div class="news__content">
									<span>Najnovija vest</span>
									<a href="<?php echo $category_link; ?>"><h6><?php the_title(); ?></h6></a>
									<p><?php the_content();?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-12">
						<!-- event loop -->
						<?php query_posts( 'category_name=dogadjaji&posts_per_page=1' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'event' );  ?>
							<div class="homepage__content__news__newscard homepage__content__news__newscard--thumb">
								<span class="date">
									<?php the_time('j') ?>
									<span><?php the_time('M') ?> </span>
								</span>
								<div class="news__content" style="background:url('<?php echo $image[0]; ?>') no-repeat left top">
									<div class="news__content__holder" >
										<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /.container-fluid -->

<?php get_footer(); ?>
