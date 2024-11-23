<?php

/**
 * Title: Search layout
 * Slug: photolancer/search
 * Categories: photolancer
 */
?>

<!-- wp:template-part {"slug":"header-large-with-banner"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--70); padding-right: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--70); padding-left: var(--wp--preset--spacing--50)">
  <!-- wp:query-title {"type":"search"} /-->

  <!-- wp:query {"queryId":31,"query":{"perPage":10,"pages":0,"offset":0,"postType":"custom_data","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
  <div class="wp-block-query">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
      <!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"var:preset|spacing|70","right":"16px","left":"16px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group" style="border-bottom-color: var(--wp--preset--color--border-color); border-bottom-width: 1px; padding-top: 16px; padding-right: 16px; padding-bottom: var(--wp--preset--spacing--70); padding-left: 16px; gap: 8px;">

        <!-- wp:post-title {"level":1,"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fit"},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","textTransform":"none","fontSize":"44px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"contrast"} /-->

        <!-- wp:post-excerpt {"excerptLength":29} /-->

        <a href="<?php the_permalink(); ?>">
            <!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"dimensions":{"width":"100%"}}} /-->
        </a>


      </div>
      <!-- /wp:group -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} -->
    <p>Ничего не найдено</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->


    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"16px","left":"16px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top: 0; margin-bottom: 0; padding-top: var(--wp--preset--spacing--30); padding-right: 16px; padding-bottom: var(--wp--preset--spacing--30); padding-left: 16px">
      <!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
      <!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

      <!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
      <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
