<?php
/**
 * Template for displaying enrolled course view nav menu
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 */


if ( ! defined( 'ABSPATH' ) )
	exit;

$course_nav_item = lms_utils()->course_sub_pages();
?>

<div id="course-enrolled-nav-wrap-<?php echo get_the_ID(); ?>" class="course-enrolled-nav-wrap course-enrolled-nav-wrap-<?php the_ID(); ?>">
	<nav id="course-enrolled-nav-<?php echo get_the_ID(); ?>" class="course-enrolled-nav course-enrolled-nav-<?php the_ID(); ?>">
		<ul>
			<!--<li><a href="<?php /*echo get_permalink(); */?>"><?php /*_e('Course Home', 'lms'); */?></a> </li>-->
			<?php
			foreach ($course_nav_item as $nav_key => $nav_item){
				$active_class = get_query_var('course_subpage') === $nav_key? 'active' : '';
				$url = trailingslashit(get_permalink()).$nav_key;
				echo "<li class='{$active_class}'><a href='{$url}'>{$nav_item}</a> </li>";
			}
			?>
		</ul>
	</nav>
</div>