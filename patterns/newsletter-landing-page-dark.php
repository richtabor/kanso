<?php
/**
 * Title: Dark Newsletter Landing Page
 * Slug: kanso/newsletter-landing-page-dark
 * Categories: newsletter
 * Viewport width: 1000
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"Newsletter"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":"100vh"},"border":{"radius":"0px"}},"className":"is-style-section-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="border-radius:0px;min-height:100vh;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"360px"}} -->
<div class="wp-block-group">
	
<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
 
<!-- wp:site-logo {"width":80,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Newsletter Title', 'kanso' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Every two weeks, I write what\'s top of my mind, what\'s shaping up, and where WordPress is headed, for free. No drama. No spam.', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'By', 'kanso' ); ?> <a href="#">Rich Tabor</a> · <a href="#"><?php echo esc_html__( 'Read it first', 'kanso' ); ?> <strong>→</strong></a></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:html -->
&nbsp;
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Social Proof"},"layout":{"type":"constrained","contentSize":"200px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Join 3k+ other subscribers who are as passionate about WordPress as you are', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
