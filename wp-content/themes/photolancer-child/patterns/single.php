<?php

/**
 * Title: Sidebar Default
 * Slug: photolancer/single
 * Categories: photolancer
 */
?>

<!-- wp:template-part {"slug":"header","area":"header"} /-->


<!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"64px","left":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"64px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<main
  class="wp-block-group has-light-color-background-color has-background"
  style="border-top-style: none; border-top-width: 0px; border-bottom-style: none; border-bottom-width: 0px; margin-top: 0; margin-bottom: 0; padding-top: 64px; padding-right: var(--wp--preset--spacing--40); padding-bottom: 64px; padding-left: var(--wp--preset--spacing--40)">
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group" style="padding-top: 0; padding-right: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--70); padding-left: var(--wp--preset--spacing--50)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="border-bottom-color: var(--wp--preset--color--border-color); border-bottom-width: 1px; padding-top: 0; padding-bottom: var(--wp--preset--spacing--30)">
      <!-- wp:post-featured-image {"isLink":true,"height":"580px","style":{"border":{"radius":"0px"}}} /-->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
      <div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--40)">
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-bottom-style: none; border-bottom-width: 0px; padding-bottom: var(--wp--preset--spacing--50)">
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">

            <div class="like-count">

                <div class="like-container">
                    <button id="like-button" data-post-id="<?php echo get_the_ID(); ?>"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M8.96173 18.9109L9.42605 18.3219L8.96173 18.9109ZM12 5.50063L11.4596 6.02073C11.601 6.16763 11.7961 6.25063 12 6.25063C12.2039 6.25063 12.399 6.16763 12.5404 6.02073L12 5.50063ZM15.0383 18.9109L15.5026 19.4999L15.0383 18.9109ZM9.42605 18.3219C7.91039 17.1271 6.25307 15.9603 4.93829 14.4798C3.64922 13.0282 2.75 11.3345 2.75 9.1371H1.25C1.25 11.8026 2.3605 13.8361 3.81672 15.4758C5.24723 17.0866 7.07077 18.3752 8.49742 19.4999L9.42605 18.3219ZM2.75 9.1371C2.75 6.98623 3.96537 5.18252 5.62436 4.42419C7.23607 3.68748 9.40166 3.88258 11.4596 6.02073L12.5404 4.98053C10.0985 2.44352 7.26409 2.02539 5.00076 3.05996C2.78471 4.07292 1.25 6.42503 1.25 9.1371H2.75ZM8.49742 19.4999C9.00965 19.9037 9.55954 20.3343 10.1168 20.6599C10.6739 20.9854 11.3096 21.25 12 21.25V19.75C11.6904 19.75 11.3261 19.6293 10.8736 19.3648C10.4213 19.1005 9.95208 18.7366 9.42605 18.3219L8.49742 19.4999ZM15.5026 19.4999C16.9292 18.3752 18.7528 17.0866 20.1833 15.4758C21.6395 13.8361 22.75 11.8026 22.75 9.1371H21.25C21.25 11.3345 20.3508 13.0282 19.0617 14.4798C17.7469 15.9603 16.0896 17.1271 14.574 18.3219L15.5026 19.4999ZM22.75 9.1371C22.75 6.42503 21.2153 4.07292 18.9992 3.05996C16.7359 2.02539 13.9015 2.44352 11.4596 4.98053L12.5404 6.02073C14.5983 3.88258 16.7639 3.68748 18.3756 4.42419C20.0346 5.18252 21.25 6.98623 21.25 9.1371H22.75ZM14.574 18.3219C14.0479 18.7366 13.5787 19.1005 13.1264 19.3648C12.6739 19.6293 12.3096 19.75 12 19.75V21.25C12.6904 21.25 13.3261 20.9854 13.8832 20.6599C14.4405 20.3343 14.9903 19.9037 15.5026 19.4999L14.574 18.3219Z" fill="#000000"/> </g></svg></button>
                    <div id="like-full"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z" fill="#000000"></path> </g></svg></div>
                </div>
                <div id="like_amount">
                    <?php
                        $likes = get_post_meta(get_the_ID(), '_custom_likes', true);
                        echo esc_html($likes ? $likes : 0);
                    ?>
                </div>

            </div>


            <!-- wp:post-date /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--80)"><!-- wp:post-content /--></div>
    <!-- /wp:group -->

    <?php echo do_shortcode('[related_custom_posts]'); ?>

  </div>
  <!-- /wp:group -->
</main>
<!-- /wp:group -->
 
<!-- wp:template-part {"slug":"footer","area":"footer"} /-->