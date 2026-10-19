<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;

final class Admin {
    public function register(): void {
        add_action('admin_menu', [$this, 'add_menu_page']);
    }

    public function add_menu_page(): void {
        add_submenu_page(
            'woocommerce',
            __('DawnTwin Shopify Engine', 'dawn-twin'),
            __('Dawn Twin', 'dawn-twin'),
            'manage_woocommerce',
            'dawn-twin-dashboard',
            [$this, 'render_dashboard']
        );
    }

    public function render_dashboard(): void {
        if (!current_user_can('manage_woocommerce')) {
            return;
        }

        require_once Engine::get_plugin_dir() . 'templates/admin-dashboard.php';
    }
}

