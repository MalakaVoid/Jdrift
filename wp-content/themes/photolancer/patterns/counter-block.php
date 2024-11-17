<?php

/**
 * Title: Counter Blocks
 * Slug: photolancer/counter-block
 * Categories: photolancer
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["photolancer"],"patternName":"photolancer/counter-block","name":"Counter Blocks"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($photolancer_images[0]) ?>","id":742,"dimRatio":50,"overlayColor":"dark-shade","isUserOverlayColor":true,"minHeight":360,"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-dark-shade-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-742" alt="" src="<?php echo esc_url($photolancer_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('20+', 'photolancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Years in Industry', 'photolancer') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('50+', 'photolancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Experts Team', 'photolancer') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('1000+', 'photolancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Project Completed', 'photolancer') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('1M+', 'photolancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Happy Customers', 'photolancer') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->