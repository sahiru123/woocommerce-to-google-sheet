<?php
/*
Plugin Name: SYNC WOO COMMERCE TO GOOGLE SHHET
Description: SYNC TO GOOGLE SHEET
Version: 1.3
Author: Microweb Global (PVT) LTD
*/

function custom_event_display_styles_and_scripts() {
    echo '<style>';
    include(plugin_dir_path(__FILE__) . 'style.css');
    echo '</style>';
    wp_enqueue_script('custom-event-display-script', plugins_url('script.js', __FILE__), array('jquery'), '', true);
    
    wp_localize_script('custom-event-display-script', 'custom_event_display_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'custom_event_display_styles_and_scripts');



function custom_event_display_shortcode() {
    $options = get_option('custom_event_display_settings');

    $post_type = isset($options['post_type']) ? $options['post_type'] : 'post';
    $posts_per_page = isset($options['posts_per_page']) ? $options['posts_per_page'] : 4;

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $posts_per_page,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = '<div class="event-list">';
        while ($query->have_posts()) {
            $query->the_post();

            $event_title = get_post_meta(get_the_ID(), 'event_title', true);

            $event_date = get_post_meta(get_the_ID(), 'event_date', true);

            $formatted_date = date_i18n('M d, Y', strtotime($event_date));

            $output .= '<div class="event-item">';
            $output .= '<div class="event-title">';
            $output .= '<span class="calendar-icon">' . date_i18n('M', strtotime($event_date)) . '<br>' . date_i18n('d', strtotime($event_date)) . '</span>';
            $output .= '<a href="' . get_permalink() . '">' . esc_html($event_title) . '</a>';
            $output .= '</div>';
            $output .= '</div>';
        }
        $output .= '</div>';

        $output .= '<p class="view-all-events"><a href="' . get_post_type_archive_link('events') . '">View All Events</a></p>';

        wp_reset_postdata();

        return $output;
    } else {
        return 'No events found.';
    }
}
function custom_event_display_settings_page() {
    add_options_page(
        'Custom Event Display Settings',
        'Event Display Settings',
        'manage_options',
        'custom_event_display_settings',
        'custom_event_display_settings_page_callback'
    );
}
add_action('admin_menu', 'custom_event_display_settings_page');
function remove_all_banners() {
    remove_all_actions('admin_notices');
}

add_action('admin_init', 'remove_all_banners');
function custom_event_display_settings_page_callback() {
    ?>
    <div class="wrap">
       <?php
        echo '<div class="developer-banner-notice notice-info">';
        echo '<div><h4>Plugin Developed by Microweb Global (PVT) LTD</h4></div>';
        echo '<div style="margin-bottom: 20px;"><img src="https://media.licdn.com/dms/image/D560BAQFiTEsFjMiy4g/company-logo_200_200/0/1682276360757?e=2147483647&v=beta&t=btygzcEDfXABJnHW8hx7DNbzwDE46BefRsjdIsYFkk8" alt="Developer\'s Logo" style="width: 200px; height: auto;" /></div>';
        echo '<div><h4>Digital Empowerment at its Finest</h4></div>';
        echo '<div><h4>Website: <a href="https://www.microweb.global" target="_blank">www.microweb.global</a></h4></div>';
        echo '<div><h4>Email: <a href="mailto:contact@microweb.global">contact@microweb.global</a></h4></div>';
        echo '</div>';
        ?>
        <h1>Custom Event Display Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_event_display_settings');
            do_settings_sections('custom_event_display_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

add_shortcode('custom_event_display', 'custom_event_display_shortcode');



add_action('wp_ajax_custom_event_display_load_more', 'custom_event_display_load_more');
add_action('wp_ajax_nopriv_custom_event_display_load_more', 'custom_event_display_load_more');
function custom_event_display_settings_init() {
    register_setting(
        'custom_event_display_settings',
        'custom_event_display_settings'
    );

    add_settings_section(
        'custom_event_display_general_section',
        'General Settings',
        'custom_event_display_general_section_callback',
        'custom_event_display_settings'
    );

    add_settings_field(
        'custom_event_display_post_type',
        'Select Post Type',
        'custom_event_display_post_type_callback',
        'custom_event_display_settings',
        'custom_event_display_general_section'
    );

    add_settings_field(
        'custom_event_display_posts_per_page',
        'Number of Posts Per Page',
        'custom_event_display_posts_per_page_callback',
        'custom_event_display_settings',
        'custom_event_display_general_section'
    );
}
add_action('admin_init', 'custom_event_display_settings_init');

function custom_event_display_general_section_callback() {
    echo '<p>General settings for Custom Event Display.</p>';
}

function custom_event_display_post_type_callback() {
    $options = get_option('custom_event_display_settings');
    $post_types = get_post_types(['public' => true], 'objects');

    echo '<select name="custom_event_display_settings[post_type]">';
    foreach ($post_types as $post_type) {
        echo '<option value="' . esc_attr($post_type->name) . '" ' . selected($options['post_type'], $post_type->name, false) . '>' . esc_html($post_type->labels->singular_name) . '</option>';
    }
    echo '</select>';
}

function custom_event_display_posts_per_page_callback() {
    $options = get_option('custom_event_display_settings');
    $posts_per_page = isset($options['posts_per_page']) && !is_bool($options['posts_per_page']) ? $options['posts_per_page'] : 4;
    echo '<input type="number" name="custom_event_display_settings[posts_per_page]" value="' . esc_attr($posts_per_page) . '" />';
}

function custom_event_display_save_settings() {
    register_setting(
        'custom_event_display_settings',
        'custom_event_display_settings',
        'custom_event_display_sanitize_settings'
    );
}
add_action('admin_init', 'custom_event_display_save_settings');

function custom_event_display_sanitize_settings($settings) {
    $sanitized_settings = array();

    if (isset($settings['post_type'])) {
        $sanitized_settings['post_type'] = sanitize_text_field($settings['post_type']);
    }

    if (isset($settings['posts_per_page'])) {
        $sanitized_settings['posts_per_page'] = absint($settings['posts_per_page']);
    }

    return $sanitized_settings;
}

function custom_event_display_load_more() {
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'offset'         => $offset,
        'category_name'  => 'event',
    );

    $query = new WP_Query($args);

    $result = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $result[] = '<div class="event-item"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
        }
        wp_reset_postdata();
    }

    wp_send_json($result);
}

?>
