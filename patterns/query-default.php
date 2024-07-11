<?php
/**
 * Title: Default Blog
 * Slug: kanso/query-default
 * Categories: blog
 * Block Types: core/query
 * Viewport width: 720
 *
 * @package Kanso
 */

?>

<!-- wp:query {"metadata":{"categories":["blog"]}, "query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Post Wrapper', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"large"} /-->

		<!-- wp:post-content /-->

		<!-- wp:group {"metadata":{"name":"Post Footer"},"style":{"spacing":{"blockGap":"4px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="line-height:1"><!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|60","width":"0px","style":{"layout":[]}} -->
		<div style="height:var(--wp--preset--spacing--60);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->
	</div>
<!-- /wp:query -->