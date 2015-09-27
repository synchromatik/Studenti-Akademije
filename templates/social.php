<?php
/**
 * @package WordPress
 * @subpackage Studenti Akademije - Lista social profila
 * custom meta posts keys:
 * 'facebook_profil' - facebook
 * 'twitter_profil' - twitter
 * 'google_profil - google plus'
 * 'github_profil' - git hub
 * 'linkedin_profil' - linked in profil
 * 'dribbble_profil' - dribbble profil
 * 'behance_profil' - behance galerija
 */
?>

<?php if( get_post_meta($post->ID, 'facebook_profil', true) ) { ?>
    <?php $facebook_profil = get_post_meta( get_the_ID(), 'facebook_profil', true ); ?>
    <li>
        <a href="<?php echo $facebook_profil; ?>" target="_blank">
            <span>Facebook</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'twitter_profil', true) ) { ?>
    <?php $twitter_profil = get_post_meta( get_the_ID(), 'twitter_profil', true ); ?>
    <li>
        <a href="<?php echo $twitter_profil; ?>" target="_blank">
            <span>Twitter</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'google_profil', true) ) { ?>
    <?php $google_profil = get_post_meta( get_the_ID(), 'google_profil', true ); ?>
    <li>
        <a href="<?php echo $google_profil; ?>" target="_blank">
            <span>Google+</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'github_profil', true) ) { ?>
    <?php $github_profil = get_post_meta( get_the_ID(), 'github_profil', true ); ?>
    <li>
        <a href="<?php echo $github_profil; ?>" target="_blank">
            <span>GitHub</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'linkedin_profil', true) ) { ?>
    <?php $linkedin_profil = get_post_meta( get_the_ID(), 'linkedin_profil', true ); ?>
    <li>
        <a href="<?php echo $linkedin_profil; ?>" target="_blank">
            <span>LinkedIn</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'dribbble_profil', true) ) { ?>
    <?php $dribbble_profil = get_post_meta( get_the_ID(), 'dribbble_profil', true ); ?>
    <li>
        <a href="<?php echo $dribbble_profil; ?>" target="_blank">
            <span>Dribbble</span>
        </a>
    </li>
<?php } ?>

<?php if( get_post_meta($post->ID, 'behance_profil', true) ) { ?>
    <?php $behance_profil = get_post_meta( get_the_ID(), 'behance_profil', true ); ?>
    <li>
        <a href="<?php echo $behance_profil; ?>" target="_blank">
            <span>Behance</span>
        </a>
    </li>
<?php } ?>
