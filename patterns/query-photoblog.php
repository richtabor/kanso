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

<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"enhancedPagination":true,"metadata":{"categories":["blog"],"patternName":"kanso/query-w-featured-image","name":"<?php echo esc_html__( 'Photoblog', 'kanso' ); ?>"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Post Wrapper', 'kanso' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"border":{"radius":"16px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->