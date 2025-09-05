<?php

function test_files(){
    wp_enqueue_script('main-test-js', get_theme_file_uri('js/main.js'), array(), null, true);
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('test_info_styles', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('test_main_styles', get_theme_file_uri('css/main-style.css'));

}

add_action('wp_enqueue_scripts', 'test_files', 999);


function add_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}
add_action('wp_head', 'add_viewport_meta', 1);

?>