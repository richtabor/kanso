<?php
/**
 * Title: Photoblog
 * Slug: kanso/query-photoblog
 * Categories: blog
 * Block Types: core/query
 * Viewport width: 720
 *
 * @package Kanso
 */

?>

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"enhancedPagination":true,"metadata":{"categories":["blog"],"name":"<?php echo esc_html__( 'Photoblog', 'kanso' ); ?>"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Post Wrapper', 'kanso' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","useFirstImageFromPost":true,"style":{"border":{"radius":"16px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
