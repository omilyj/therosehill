<?php
// Add frontend styles to Gutenberg Editor
function rh_setup_theme() {
    add_theme_support('editor-styles');

    add_editor_style([
        // Paste strings from enqueue.php
        'https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Silkscreen&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
        'assets/editor.css'
    ]);
}