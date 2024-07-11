<?php
/**
 * Title: Cards, Tools
 * Slug: kanso/cards-tools
 * Categories: featured
 * Viewport width: 520
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Tools', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
		<p class="is-style-text-subtitle"><?php echo esc_html__( 'Tools', 'kanso' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:tabor/cards -->
		<!-- wp:tabor/card {"title":"Screen Studio","link":"","description":"The best screen recorder."} /-->
		<!-- wp:tabor/card {"title":"WordPress.com","link":"","description":"The best WordPress host."} /-->
		<!-- wp:tabor/card {"title":"Typefully","link":"","description":"The best thread maker."} /-->
		<!-- wp:tabor/card {"title":"Todoist","description":"The best todo app."} /-->
		<!-- wp:tabor/card {"title":"Cleanshot","link":"","description":"The best screenshots."} /-->
		<!-- wp:tabor/card {"title":"Raycast","link":"","description":"The best MacOS launcher."} /-->
	<!-- /wp:tabor/cards -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->