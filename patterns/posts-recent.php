<?php
/**
 * Title: Recent posts
 * Slug: kanso/posts-recent
 * Categories: posts, featured
 * Block Types: core/query-loop
 * Viewport width: 520
 *
 * @package Kanso
 */

?>

<!-- wp:group {"metadata":{"name":"<?php echo esc_html__( 'Recent', 'kanso' ); ?>"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
			<p class="is-style-text-subtitle"><?php echo esc_html__( 'Posts', 'kanso' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"metadata":{"name":"Posts"},"style":{"spacing":{"padding":{"top":"6px","right":"var:preset|spacing|30","bottom":"26px","left":"var:preset|spacing|30"}}},"className":"is-style-section-3","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-section-3" style="padding-top:6px;padding-right:var(--wp--preset--spacing--30);padding-bottom:26px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group" style="padding-top:16px;padding-bottom:12px">
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"className":"truncate","fontSize":"medium"} /-->
						<!-- wp:post-date {"format":"M Y","isLink":true,"style":{"typography":{"lineHeight":"1.2"}},"className":"is-style-text-subtitle"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0;margin-bottom:0"/>
					<!-- /wp:separator -->
				<!-- /wp:post-template -->
				</div>
			<!-- /wp:query -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'View all posts', 'kanso' ); ?> <strong>→</strong></a></div>
				<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->