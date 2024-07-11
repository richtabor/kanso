<?php
/**
 * Title: Social Feed Blog
 * Slug: kanso/query-feed
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
		<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Post Header', 'kanso' ); ?>"},"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);line-height:1"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"1000px"}}} /-->
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:post-author-name /-->
			
			<!-- wp:post-date {"format":"M j, g:i A","isLink":true} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->
			
			<!-- wp:post-content /-->
			
			<!-- wp:spacer {"height":"var:preset|spacing|60","width":"0px","style":{"layout":[]}} -->
				<div style="height:var(--wp--preset--spacing--60);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
