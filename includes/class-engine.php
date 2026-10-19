<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;

final class Engine {
    public const VERSION = '1.0.0';
    public const OPTION_KEY = 'dawn_twin_settings';

    private static ?self $instance = null;
    private DrawerCart $drawer;
    private VariantPills $variants;
    private Admin $admin;

    public static function instance(): self {
        return self::$instance ??= new self();
    }

    private function __construct() {
        $this->drawer   = new DrawerCart();
        $this->variants = new VariantPills();
        $this->admin    = new Admin();
    }

    public function init(): void {
        if (!class_exists('WooCommerce')) {
            add_action('admin_notices', [$this, 'render_woocommerce_missing_notice']);
            return;
        }

        $this->drawer->register();
        $this->variants->register();
        $this->admin->register();

        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    public function enqueue_assets(): void {
        $plugin_url = self::get_plugin_url();

        wp_enqueue_style(
            'dawn-twin-styles',
            $plugin_url . 'assets/css/dawn-theme.css',
            [],
            self::VERSION
        );

        wp_enqueue_script(
            'dawn-twin-scripts',
            $plugin_url . 'assets/js/dawn-theme.js',
            ['jquery'],
            self::VERSION,
            true
        );

        wp_localize_script('dawn-twin-scripts', 'dawnConfig', [
            'ajaxUrl'   => admin_url('admin-ajax.php'),
            'cartNonce' => wp_create_nonce('dawn_cart_nonce'),
            'i18n'      => [
                'added' => __('Added to cart', 'dawn-twin'),
                'checkout' => __('Check out', 'dawn-twin')
            ]
        ]);
    }

    public function render_woocommerce_missing_notice(): void {
        ?>
        <div class="notice notice-error">
            <p><?php esc_html_e('DawnTwin requires WooCommerce to be installed and active.', 'dawn-twin'); ?></p>
        </div>
        <?php
    }

    public static function get_plugin_dir(): string {
        return plugin_dir_path(dirname(__FILE__));
    }

    public static function get_plugin_url(): string {
        return plugin_dir_url(dirname(__FILE__));
    }
}

