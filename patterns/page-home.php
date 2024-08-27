<?php
/**
 * Title: Cards, Listening
 * Slug: kanso/page-home
 * Categories: featured
 * Viewport width: 520
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Home', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:site-tagline /-->
 
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Latest', 'kanso' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php echo esc_html__( 'Latest', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"22px","bottom":"22px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"is-style-section-3","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:22px;padding-right:var(--wp--preset--spacing--30);padding-bottom:22px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":9,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Keep reading → ","showMoreOnNewLine":false,"excerptLength":36} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Recent","categories":["posts"],"patternName":"kanso/posts-recent"},"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php echo esc_html__( 'Posts', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Posts"},"style":{"spacing":{"padding":{"top":"6px","right":"var:preset|spacing|30","bottom":"26px","left":"var:preset|spacing|30"}}},"className":"is-style-section-3","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:6px;padding-right:var(--wp--preset--spacing--30);padding-bottom:26px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"13px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:16px;padding-bottom:13px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"className":"truncate","fontSize":"medium"} /-->

<!-- wp:post-date {"format":"M Y","isLink":true,"style":{"typography":{"lineHeight":"1.2"}},"className":"is-style-text-subtitle"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'View all posts', 'kanso' ); ?> <strong>→</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Topics', 'kanso' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php echo esc_html__( 'Topics', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"smallestFontSize":"12px","largestFontSize":"12px"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Tools', 'kanso' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php echo esc_html__( 'Tools', 'kanso' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Cards"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-section-3","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><a href="#"><?php echo esc_html__( 'Shaping WordPress', 'kanso' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle" style="font-size:13px"><?php echo esc_html__( 'The best newsletter.', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-section-3","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><a href="#"><?php echo esc_html__( 'Rich\'s Blog', 'kanso' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle" style="font-size:13px"><?php echo esc_html__( 'The best WordPress blog.', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-section-3","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><a href="#"><?php echo esc_html__( 'Using WordPress', 'kanso' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle" style="font-size:13px"><?php echo esc_html__( 'The best WordPress tips.', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-section-3","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><a href="#"><?php echo esc_html__( 'Shaping WordPress', 'kanso' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle" style="font-size:13px"><?php echo esc_html__( 'The best newsletter.', 'kanso' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->