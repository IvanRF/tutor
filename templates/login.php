<?php

/**
 * Display single login
 *
 * @since v.1.0.0
 * @author themeum
 * @url https://themeum.com
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

get_header();

?>

<?php do_action('lms/template/login/before/wrap'); ?>
    <div <?php lms_post_class(); ?>>

        <div class="lms-template-segment lms-login-wrap">
            <div class="lms-login-title">
                <h2><?php _e('Please Sign-In to view this section', 'lms'); ?></h2>
            </div>

            <div class="lms-template-login-form">
				<?php lms_load_template( 'global.login' ); ?>
            </div>
        </div>
    </div><!-- .wrap -->

<?php do_action('lms/template/login/after/wrap'); ?>



<?php
get_footer();