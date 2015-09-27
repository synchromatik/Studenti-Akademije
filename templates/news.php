<?php
/**
 * @package WordPress
 * @subpackage Studenti Akademije - Vesti
 * @since Studenti Akademije 1.0
 */
?>

<!-- student card --->
<div class="col-md-6 col-xs-12">
    <div class="homepage__content__news__newscard homepage__content__news__newscard--page">
        <span class="date">
            <?php the_time('j') ?>
            <span><?php the_time('M') ?> </span>
        </span>
        <div class="news__content">
            <a href=""><h6><?php the_title(); ?></h6></a>
            <p><?php the_content();?></p>
        </div>
    </div>

</div>
