<?php
/**
 * Plugin Name: Example Plugin
 */

class Example_Plugin {
    public function set_my_option(): bool {
        return update_option( 'my_option', 'my_value' );
    }
}