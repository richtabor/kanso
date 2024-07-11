<?php
/**
 * Title: Latest post
 * Slug: kanso/posts-latest
 * Categories: posts, featured
 * Block Types: core/query-loop
 * Viewport width: 520
 *
 * @package Kanso
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Latest', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php echo esc_html__( 'Latest', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"20px","bottom":"20px"}}},"className":"is-style-section-3","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:20px;padding-right:var(--wp--preset--spacing--30);padding-bottom:20px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":9,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Keep reading → ","showMoreOnNewLine":false,"excerptLength":36} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->