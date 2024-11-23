<?php
/**
 * Plugin Name: Custom Post Type Plugin
 * Description: Creates a custom post type with title, description, image, date, likes, and related posts.
 * Version: 1.0
 * Author: Your Name
 */

class CustomPostTypePlugin {

    const POST_TYPE = 'custom_data';
    public $POPULAR_POSTS_TEMPLATE = "templates/popular-posts.php";
    public $RELATED_POSTS_TEMPLATE = "templates/related-posts.php";
    public $ALL_POSTS_TEMPLATE = "templates/all-posts.php";

    public function __construct() {
        add_action('init', [$this, 'register_custom_post_type']);
        add_action('add_meta_boxes', [$this, 'register_meta_boxes']);
        add_action('save_post', [$this, 'save_meta_data']);
        add_shortcode('related_custom_posts', [$this, 'display_related_posts_shortcode']);
        add_shortcode('popular_custom_posts', [$this, 'display_popular_posts_shortcode']);
        add_shortcode('all_custom_posts', [$this, 'display_all_posts_shortcode']);
        add_action('wp_ajax_load_more_posts', [$this, 'load_more_posts']);
        add_action('wp_ajax_nopriv_load_more_posts', [$this, 'load_more_posts']);
        add_action('wp_enqueue_scripts', function() {
            wp_enqueue_script('custom-posts-load-more', plugin_dir_url(__FILE__) . 'js/load-more.js', ['jquery'], null, true);
        });
    }
    

    // Register the custom post type
    public function register_custom_post_type() {
        register_post_type(self::POST_TYPE, [
            'labels' => [
                'name' => 'Custom Data',
                'singular_name' => 'Custom Data',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Custom Data',
                'edit_item' => 'Edit Custom Data',
                'new_item' => 'New Custom Data',
                'view_item' => 'View Custom Data',
                'all_items' => 'All Custom Data',
            ],
            'public' => true,
            'menu_icon' => 'dashicons-database',
            'has_archive' => true,
            'exclude_from_search' => false,
            'supports' => ['title', 'editor', 'thumbnail'], // Title, description, and image
            'show_in_rest' => true,
        ]);
    }

    // Register meta boxes
    public function register_meta_boxes() {
        add_meta_box('custom_meta_box', 'Custom Fields', [$this, 'render_meta_boxes'], self::POST_TYPE, 'side', 'high');
    }

    // Render the meta boxes
    public function render_meta_boxes($post) {
        $custom_date = get_post_meta($post->ID, '_custom_date', true);
        $likes = get_post_meta($post->ID, '_custom_likes', true);
        $related_posts = get_post_meta($post->ID, '_custom_related_posts', true);

        wp_nonce_field('custom_meta_box_nonce_action', 'custom_meta_box_nonce');
        ?>
        <p>
            <label for="custom_date">Date:</label>
            <input type="date" id="custom_date" name="custom_date" value="<?php echo esc_attr($custom_date); ?>">
        </p>
        <p>
            <label for="custom_likes">Likes:</label>
            <input type="number" id="custom_likes" name="custom_likes" value="<?php echo esc_attr($likes); ?>">
        </p>
        <p>
            <label for="custom_related_posts">Related Posts:</label>
            <select id="custom_related_posts" name="custom_related_posts[]" multiple style="width: 100%;">
                <?php
                $query = new WP_Query(['post_type' => self::POST_TYPE, 'posts_per_page' => -1]);
                while ($query->have_posts()) : $query->the_post();
                    $selected = is_array($related_posts) && in_array(get_the_ID(), $related_posts) ? 'selected' : '';
                    echo '<option value="' . get_the_ID() . '" ' . $selected . '>' . get_the_title() . '</option>';
                endwhile;
                wp_reset_postdata();
                ?>
            </select>
        </p>
        <?php
    }

    // Save meta data
    public function save_meta_data($post_id) {
        if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], 'custom_meta_box_nonce_action')) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (isset($_POST['custom_date'])) {
            update_post_meta($post_id, '_custom_date', sanitize_text_field($_POST['custom_date']));
        }

        if (isset($_POST['custom_likes'])) {
            update_post_meta($post_id, '_custom_likes', intval($_POST['custom_likes']));
        }

        if (isset($_POST['custom_related_posts'])) {
            update_post_meta($post_id, '_custom_related_posts', array_map('intval', $_POST['custom_related_posts']));
        } else {
            delete_post_meta($post_id, '_custom_related_posts');
        }
    }

    function display_related_posts_shortcode() {
        $current_post_id = get_the_ID();

        $related_posts_ids = get_post_meta($current_post_id, '_custom_related_posts', true);

        $output = '';

        if ($related_posts_ids && is_array($related_posts_ids)) {
            $args = array(
                'post_type' => self::POST_TYPE,
                'post__in' => $related_posts_ids,
                'orderby' => 'post__in',
                'posts_per_page' => 3,
            );

            
            $output = $this->render_posts_template($args, "Также смотрят", $this->RELATED_POSTS_TEMPLATE);

        }

        return $output;

    }

    public function display_popular_posts_shortcode() {

        $output = '';
        $args = array(
            'post_type' => self::POST_TYPE,
            'orderby' => 'meta_value',
            'meta_key' => '_custom_likes',
            'order' => 'ASC',
            'posts_per_page' => 6,
        );

        
        $output = $this->render_posts_template($args, "Популярные статьи", $this->POPULAR_POSTS_TEMPLATE);

        return $output;

    }

    public function display_all_posts_shortcode() {

        $output = '';
        $args = array(
            'post_type' => self::POST_TYPE,
            'orderby' => 'meta_value',
            'meta_key' => '_custom_date',
            'order' => 'DESC',
            'posts_per_page' => 10,
        );

        
        $output = $this->render_posts_template($args, "Все статьи", $this->ALL_POSTS_TEMPLATE);

        return $output;

    }

    public function render_posts_template($query_args, $title, $template) {
        ob_start();

        $query = new WP_Query($query_args);

        include plugin_dir_path(__FILE__) . $template; 

        return ob_get_clean();
    }

    public function load_more_posts() {
        $paged = $_POST['page'] ? intval($_POST['page']) : 1;
        $args = array(
            'post_type' => self::POST_TYPE,
            'orderby' => 'meta_value',
            'meta_key' => '_custom_date',
            'order' => 'DESC',
            'posts_per_page' => 10,
            'paged' => $paged,
        );
    
        $query = new WP_Query($args);
    
        if ($query->have_posts()) {
            while ($query->have_posts()) : $query->the_post();
                ?>
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
                <?php
            endwhile;
        } else {
            echo '';
        }
    
        wp_reset_postdata();
        wp_die();
    }

}

new CustomPostTypePlugin();
