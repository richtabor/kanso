<?php
/**
 * Title: List of posts
 * Slug: kanso/posts-list
 * Categories: posts, featured
 * Block Types: core/query-loop
 * Viewport width: 520
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Post list', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-text-subtitle"} -->
<h2 class="wp-block-heading is-style-text-subtitle"><?php echo esc_html__( 'You may also enjoy…', 'kanso' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"20","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"0px","right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:2px;padding-right:0px;padding-bottom:2px;padding-left:0px">
<!-- wp:post-title {"level":3,"isLink":true,"className":"no-underline truncate","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}},"typography":{"lineHeight":"1.2"}},"fontSize":"large"} /-->
<!-- wp:post-date {"textAlign":"right","format":"M Y","style":{"typography":{"lineHeight":"1.2"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
