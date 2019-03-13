<?php
/**
 * Template for displaying social share
 *
 * @since v.1.0.4
 *
 * @author Themeum
 * @url https://themeum.com
 */


$share_config = array(
	'title' => get_the_title(),
	'text'  => get_the_excerpt(),
	'image' => get_tutor_course_thumbnail(true),
);
?>

<div class="tutor-social-share-wrap" data-social-share-config="<?php echo esc_attr(wp_json_encode($share_config)); ?>">
	<ul class="tutor-social-share">
		<?php
		$tutor_social_share_icons = tutor_utils()->tutor_social_share_icons();
		if (tutor_utils()->count($tutor_social_share_icons)){
			foreach ($tutor_social_share_icons as $icon){
				echo "<li><a href='javascript:;' class='tutor_share {$icon['share_class']}'> {$icon['icon_html']} </a> </li>";
			}
		}
		?>
	</ul>
</div>
