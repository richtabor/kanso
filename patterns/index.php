<?php
/**
 * Title: index
 * Slug: kanso/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Title"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-text-title"} -->
<h1 class="wp-block-heading is-style-text-title"><?php esc_html_e('Hi, I\'m Rich Tabor', 'kanso');?></h1>
<!-- /wp:heading -->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Topics"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:tag-cloud {"smallestFontSize":"12px","largestFontSize":"12px"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":2,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["blog"]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":1}} -->
<!-- wp:template-part {"slug":"post"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->