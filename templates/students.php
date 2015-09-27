<?php
/**
 * @package WordPress
 * @subpackage Studenti Akademije - Liista Studenata
 * @since Studenti Akademije 1.0
 */
?>

<!-- student card --->
<div class="col-md-6 col-xs-12">
    <div class="student__card">
        <?php the_post_thumbnail( 'student-image', array( 'class' => 'img-responsive col-xs-12' ) ); ?>
        <!-- contact details -->
        <div class="student__card--details">
            <!--Name -->
            <?php the_title( '<h3 class="entry-title">', '</h3>' );?>
            <!-- CV download button  -->
            <?php if( get_post_meta($post->ID, 'curriculum_vitae', true) ) { ?>
                <?php $curriculum_vitae = get_post_meta( get_the_ID(), 'curriculum_vitae', true ); ?>
                <a href="<?php echo $curriculum_vitae; ?>" target="_blank" class="btn btn-primary"><i class="fa fa-file-text"></i> Curriculum Vitae</a>
            <?php } ?>
            <!-- Body  -->
            <?php the_content(); ?>
            <!-- social icons-->
            <div class="student__card--details__social">
                <hr>
                <ul>

                    <?php get_template_part( 'templates/social', get_post_format() ); ?>

                </ul>
            </div>
        </div>
    </div><!--/student card ends -->

</div>
