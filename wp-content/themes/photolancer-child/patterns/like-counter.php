<?php

/**
 * Title: Service Section
 * Slug: photolancer/like-counter
 * Categories: photolancer
 */
?>

<div class="like-count">
        <?php
            $likes = get_post_meta(get_the_ID(), 'likes', true);
            echo esc_html($likes ? $likes : 0);
        ?>
        Лайков
</div>