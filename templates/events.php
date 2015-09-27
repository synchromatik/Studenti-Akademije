<?php
/**
 * @package WordPress
 * @subpackage Studenti Akademije - Events
 * @since Studenti Akademije 1.0
 */
?>

<!-- student card --->
<div class="row">
    <div class="homepage__content__news__newscard homepage__content__news__newscard--page">
        <span class="date">
            <?php the_time('j') ?>
            <span><?php the_time('M') ?> </span>
        </span>
        <div class="news__content clearfix">
            <a href=""><h6><?php the_title(); ?></h6></a>
        </div>
        <div class="event__image">
            <?php the_post_thumbnail( 'event', array( 'class' => 'img-responsive col-xs-12 col-md-12' ) ); ?>
        </div>
        <div class="event__content">
            <?php the_content();?>
        </div>
    </div>

</div>
