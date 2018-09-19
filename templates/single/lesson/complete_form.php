<?php
/**
 * Display attachments
 *
 * @since v.1.0.0
 * @author themeum
 * @url https://themeum.com
 */

if ( ! defined( 'ABSPATH' ) )
	exit;


do_action('lms_lesson/single/before/complete_form');

$is_completed_lesson = lms_utils()->is_completed_lesson();
if ( ! $is_completed_lesson) {
	?>
    <div class="lms-single-lesson-segment lms-lesson-compelte-form-wrap">

        <form method="post">
			<?php wp_nonce_field( lms()->nonce_action, lms()->nonce ); ?>

            <input type="hidden" value="<?php echo get_the_ID(); ?>" name="lesson_id"/>
            <input type="hidden" value="lms_complete_lesson" name="lms_action"/>

            <button type="submit" class="course-complete-button" name="complete_lesson_btn" value="complete_lesson"><?php _e( 'Complete Lesson', 'lms' ); ?></button>
        </form>
    </div>
	<?php
}
do_action('lms_lesson/single/after/complete_form'); ?>