<?php
/**
 * Title: Dark Inline Newsletter
 * Slug: kanso/newsletter-inline-dark
 * Categories: newsletter, featured
 * Viewport width: 600
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"Newsletter","categories":["newsletter"]},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Contents"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"className":"newsletter is-style-section-1","layout":{"type":"default"}} -->
<div class="wp-block-group newsletter is-style-section-1" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"340px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Newsletter Title', 'kanso' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Every two weeks, I\'ll send you what\'s top of my mind, what is shaping up, where WordPress is headed, and how to use the new stuff.', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Subscribe Form Embed"},"layout":{"type":"constrained","contentSize":"300px"}} -->
<div class="wp-block-group"><!-- wp:html -->
&nbsp;
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Social Proof"},"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Join 3k+ other subscribers', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
