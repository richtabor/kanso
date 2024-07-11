<?php
/**
 * Title: Journal Blog
 * Slug: kanso/query-journal
 * Categories: blog
 * Block Types: core/query
 * Viewport width: 720
 *
 * @package Kanso
 */

?>

<!-- wp:query {"queryId":25,"query":{"perPage":9,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["blog"],"patternName":"kanso/query-default","name":"Journal Blog"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post Wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Header"},"style":{"spacing":{"blockGap":"4px"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="line-height:1"><!-- wp:post-date {"format":"M j, Y · g:i A","isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:spacer {"height":"var:preset|spacing|60","width":"0px","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--60);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->