<?php
/**
 * Title: Blog with Featured Image
 * Slug: kanso/query-w-featured-image
 * Categories: blog
 * Block Types: core/query
 * Viewport width: 720
 *
 * @package Kanso
 */

?>

<!-- wp:query {"metadata":{"categories":["blog"]},"query":{"perPage":32,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post Wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"16px"}}} /-->

<!-- wp:post-content /-->

<!-- wp:spacer {"height":"4px"} -->
<div style="height:4px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Post Header"},"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);line-height:1"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"1000px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name /-->

<!-- wp:post-date {"format":"M j, g:i A","isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","width":"0px","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--60);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->