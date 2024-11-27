<?php

if ($query->have_posts()) : ?>

    <div class="popular_posts">

        <div>
            <h2><?php echo $title; ?></h2>
        </div>

        <div class="sepparator"></div>

        <div class="related_post_container">
        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="popular_post__card">

                <a href="<?php the_permalink(); ?>">

                    <div class="related_posts__image">

                        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                    
                    </div>

                    <div class="related_post__card_title">
                        <?php the_title(); ?>
                        
                    </div>
                    
                </a>

                <p><?php the_excerpt(); ?></p>

            </div>

        <?php endwhile; ?>
        </div>
    </div>
    
    <?php wp_reset_postdata(); ?>

<?php else : ?>

    <p><?php _e('No posts found', 'j-drift.ru'); ?></p>

<?php endif; ?>
