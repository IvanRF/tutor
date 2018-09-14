<?php
/**
 * Template for displaying single course
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 */

get_header();
?>

<?php do_action('lms_course/single/enrolled/before/wrap'); ?>


<?php do_action('lms_course/single/enrolled/before/lead_info'); ?>
<?php lms_course_enrolled_lead_info(); ?>
<?php do_action('lms_course/single/enrolled/after/lead_info'); ?>

    <div <?php lms_post_class(); ?>>


	    <?php do_action('lms_course/single/enrolled/nav/before'); ?>
	    <?php lms_course_enrolled_nav(); ?>
	    <?php do_action('lms_course/single/enrolled/nav/after'); ?>



	    <?php do_action('lms_course/single/enrolled/content/topics_lesson/before'); ?>
	    <?php lms_course_enrolled_content_topics_lesson(); ?>
	    <?php do_action('lms_course/single/enrolled/content/topics_lesson/after'); ?>





    </div><!-- .wrap -->

<?php do_action('lms_course/single/enrolled/after/wrap'); ?>


<?php
get_footer();